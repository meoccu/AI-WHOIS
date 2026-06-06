<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

$allowedOrigins = array_filter(array_map('trim', explode(',', getenv('ALLOWED_ORIGINS') ?: '*')));
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';

if (in_array('*', $allowedOrigins, true)) {
    header('Access-Control-Allow-Origin: *');
} elseif ($origin && in_array($origin, $allowedOrigins, true)) {
    header('Access-Control-Allow-Origin: ' . $origin);
    header('Vary: Origin');
}

header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Max-Age: 86400');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(405, ['error' => '仅支持 POST 请求']);
}

$apiKey = getenv('ZHIPU_API_KEY');
if (!$apiKey) {
    respond(500, ['error' => '服务端未配置 ZHIPU_API_KEY']);
}

$allowedModel = getenv('AI_MODEL') ?: 'glm-4.5-flash';
$upstreamUrl = getenv('ZHIPU_API_URL') ?: 'https://open.bigmodel.cn/api/paas/v4/chat/completions';

rateLimit();

$raw = file_get_contents('php://input');
if ($raw === false || $raw === '') {
    respond(400, ['error' => '请求体不能为空']);
}

if (strlen($raw) > 1024 * 128) {
    respond(413, ['error' => '请求体过大']);
}

$body = json_decode($raw, true);
if (!is_array($body)) {
    respond(400, ['error' => '请求体必须是合法 JSON']);
}

if (!isset($body['messages']) || !is_array($body['messages'])) {
    respond(400, ['error' => '缺少 messages 字段']);
}

$body['model'] = $allowedModel;
$body['temperature'] = clampFloat($body['temperature'] ?? 0.7, 0, 1);
$body['max_tokens'] = clampInt($body['max_tokens'] ?? 1200, 1, 2000);

if (isset($body['stream'])) {
    unset($body['stream']);
}

$payload = json_encode($body, JSON_UNESCAPED_UNICODE);
if ($payload === false) {
    respond(500, ['error' => '请求编码失败']);
}

$ch = curl_init($upstreamUrl);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey,
    ],
    CURLOPT_TIMEOUT => 60,
    CURLOPT_CONNECTTIMEOUT => 10,
]);

$response = curl_exec($ch);
$httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

if ($response === false) {
    respond(502, ['error' => '上游 AI 服务连接失败', 'detail' => $curlError]);
}

http_response_code($httpCode > 0 ? $httpCode : 502);
echo $response;
exit;

function respond(int $status, array $data): void
{
    http_response_code($status);
    echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

function clampInt(mixed $value, int $min, int $max): int
{
    $value = (int) $value;
    return max($min, min($max, $value));
}

function clampFloat(mixed $value, float $min, float $max): float
{
    $value = (float) $value;
    return max($min, min($max, $value));
}

function rateLimit(): void
{
    $limit = (int) (getenv('RATE_LIMIT_PER_MINUTE') ?: 20);
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

    $file = sys_get_temp_dir() . '/ai_proxy_rl_' . md5($ip);
    $now = time();

    $records = [];
    if (is_file($file)) {
        $json = file_get_contents($file);
        $decoded = json_decode($json ?: '[]', true);
        if (is_array($decoded)) {
            $records = $decoded;
        }
    }

    $records = array_values(array_filter($records, fn ($time) => is_int($time) && $time > $now - 60));

    if (count($records) >= $limit) {
        respond(429, ['error' => '请求过于频繁，请稍后再试']);
    }

    $records[] = $now;
    file_put_contents($file, json_encode($records), LOCK_EX);
}
