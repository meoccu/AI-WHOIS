export default {
  async fetch(request, env, ctx) {
    const url = new URL(request.url);
    const target = `https://whois.meowcould.com${url.pathname}`;
    
    // 使用 Cloudflare Cache API
    const cacheKey = new Request(target, request);
    const cache = caches.default;
    
    let res = await cache.match(cacheKey);
    if (res) {
      // 命中缓存，加个标识方便调试
      res = new Response(res.body, res);
      res.headers.set('X-Cache', 'HIT');
      return res;
    }
    
    // 未命中，回源查询
    res = await fetch(target);
    const body = await res.text();
    
    res = new Response(body, {
      status: res.status,
      headers: {
        'Content-Type': 'application/json',
        'Access-Control-Allow-Origin': '*',
        'Cache-Control': 'public, max-age=600', // 缓存 10 分钟
        'X-Cache': 'MISS'
      }
    });
    
    // 异步写入缓存，不阻塞响应
    ctx.waitUntil(cache.put(cacheKey, res.clone()));
    return res;
  }
}
