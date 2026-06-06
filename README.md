<!DOCTYPE html>
<html lang="zh-CN">
      
    <!-- 隐私政策卡片 -->
    <div class="card">
        <div class="card-header">
            <h1>🔒 隐私政策 <span class="badge">最后更新: 2026年6月6日</span></h1>
            <p style="margin-top: 0.5rem; color: #4a627a;">AI WHOIS LOOKUP / 请求转发服务 · 边缘转发隐私声明</p>
        </div>
        <div class="card-body">
            <p>本隐私政策说明 <strong>AI WHOIS LOOKUP / 请求转发服务</strong> 如何收集、使用、转发及保护你的信息。使用本服务即表示你已阅读并理解本政策。</p>

            <h3>1. 服务说明</h3>
            <p>AI WHOIS LOOKUP 是一个基于 Cloudflare Worker 的请求转发与 WHOIS 查询辅助服务。用户请求经由 Cloudflare 边缘网络及本项目的 Worker 逻辑处理后，转发至上游服务（WHOIS 数据源或自定义端点）。</p>
            <pre><code>用户设备 → Cloudflare 边缘节点 → Cloudflare Worker (本服务) → 上游服务(WHOIS/API)</code></pre>
            <p>因此，在使用本服务过程中，请求信息可能被 Cloudflare、本服务逻辑以及目标上游服务处理。</p>

            <h3>2. 我们可能收集或处理的信息</h3>
            <h4>📡 技术信息</h4>
            <p>包括但不限于：IP 地址、请求时间、请求 URL、请求方法、请求头(User-Agent/Referer)、响应状态码、执行耗时、错误日志等。</p>
            <h4>📨 用户主动提交的信息</h4>
            <p>当你通过本服务发起 WHOIS 查询或 API 转发请求时，提交的内容（例如域名、参数、JSON 数据、表单）会被转发至目标上游服务。</p>
            <h4>🔑 鉴权信息（若存在）</h4>
            <p>如请求中包含 API Key、Bearer Token、Cookie、Authorization Header 等凭证，可能被本服务处理或转发。除服务功能必要外，我们不主动记录或公开这些敏感信息。</p>

            <h3>3. Cloudflare Worker 转发相关说明</h3>
            <p>本服务基于 Cloudflare Workers 运行，Cloudflare 作为基础设施服务商会自动处理请求元数据用于网络性能、安全防护及分析。Cloudflare 可能处理的信息包括：IP 地址、请求元数据、HTTP 头、路径、防火墙日志等。</p>
            <div class="info-block">
                ℹ️ Cloudflare 的数据处理受其自身隐私政策约束：<br>
                📄 <a href="https://www.cloudflare.com/privacypolicy/" target="_blank" rel="noopener noreferrer">Cloudflare 隐私政策</a> |
                📄 <a href="https://www.cloudflare.com/terms/" target="_blank" rel="noopener noreferrer">Cloudflare 服务条款</a>
            </div>
            <p>本项目无法完全控制 Cloudflare 对基础设施层面数据的收集与处理方式，但始终选择最小必要原则配置 Worker 行为。</p>

            <h3>4. 我们如何使用信息</h3>
            <ul>
                <li>✅ 提供稳定的请求转发、WHOIS 查询服务</li>
                <li>✅ 连接目标上游服务并返回查询结果</li>
                <li>✅ 排查故障、监控服务可用性、性能优化</li>
                <li>✅ 防止滥用、攻击、异常高频请求，执行访问控制策略</li>
                <li>✅ 满足法律法规或监管要求</li>
            </ul>
            <p><strong>我们不会出售用户个人信息，也不会超出服务目的使用相关数据。</strong></p>

            <h3>5. 信息共享与第三方服务</h3>
            <ul>
                <li><strong>Cloudflare</strong>：基础设施及边缘计算服务方，请求必然经过 Cloudflare 网络。</li>
                <li><strong>上游服务提供方</strong>：根据配置，用户请求可能转发至上游 WHOIS 服务器或自定义 API，上游服务独立遵循其隐私政策。</li>
                <li><strong>法律合规与安全</strong>：当法律要求、保护权益、调查滥用或攻击行为时，我们可能披露必要信息。</li>
            </ul>
            <div class="warning-block">⚠️ 注意：上游服务的数据处理行为不受本隐私政策约束，请自行查阅上游服务的隐私条款。</div>

            <h3>6. 日志保留</h3>
            <p>本服务会保留有限的访问日志和错误日志，仅用于运维排障和安全审计。<br>📅 <strong>日志保留时间</strong>：默认保留 7 天（滚动覆盖），不长期存储可识别到个人身份的明细数据。</p>
            <ul>
                <li>✅ 不记录完整请求体（除必要调试外，且脱敏）</li>
                <li>✅ 不记录完整 Authorization / Cookie 明文</li>
                <li>✅ 对 IP 地址不做长期关联分析</li>
            </ul>
            <p>Cloudflare 依据其数据保留策略可能保有其安全分析数据，详情参阅 Cloudflare 隐私文档。</p>

            <h3>7. Cookie 与本地存储</h3>
            <p>本服务 <strong>不使用 Cookie 或浏览器本地存储</strong> 来追踪用户。如果上游服务通过响应设置了 Cookie，相关 Cookie 将转发至客户端，其用途由上游服务政策约束。</p>

            <h3>8. 数据安全</h3>
            <ul>
                <li>🔒 全程 HTTPS 加密通信，保障传输安全</li>
                <li>🔒 使用 Cloudflare Secrets 管理敏感配置（上游密钥等）</li>
                <li>🔒 最小化日志输出，限制敏感信息暴露</li>
                <li>🔒 定期检查异常请求模式，避免开放式代理滥用</li>
                <li>🔒 边缘访问控制与速率限制（按需部署）</li>
            </ul>
            <div class="warning-block">⚠️ 尽管采取多种防护，互联网传输无法保证绝对安全。请用户自行承担使用风险，切勿通过本服务传输极高敏感信息（如未加密的支付数据）。</div>

            <h3>9. 用户权利</h3>
            <p>根据适用法律（如 GDPR、CCPA、中国《个人信息保护法》等），你享有查询、访问、更正、删除、限制处理、数据携带、撤回同意等权利。如需行使上述权利，请通过下方联系方式联系我们，我们将在合理时间内响应。</p>

            <h3>10. 未成年人隐私</h3>
            <p>本服务不面向 14 周岁以下未成年人主动收集信息。若你是未成年人，请在监护人同意与陪同下使用。如发现无意中收集了未成年人信息，我们将在合理范围内尽快删除。</p>

            <h3>11. 跨境数据传输</h3>
            <p>Cloudflare 拥有全球边缘网络，请求可能会在不同国家/地区的服务器之间传输、缓存或处理。使用本服务即表示你理解并同意数据可能传输至你所在地区以外的司法管辖区。</p>

            <h3>12. 禁止用途</h3>
            <div class="danger-block">
                🚫 严禁：违反法律法规、未授权访问第三方系统、网络攻击、扫描、撞库、DDoS、绕过访问控制、传播恶意内容、滥用资源、侵犯隐私或知识产权。一经发现滥用，有权立即暂停或终止服务。
            </div>

            <h3>13. 免责声明</h3>
            <p>本服务按“现状”与“可用”提供。在法律允许的最大范围内，我们不对服务持续可用性、无错误、上游服务稳定性、数据绝对安全做任何保证。</p>

            <h3>14. 法律适用与争议解决</h3>
            <p>本隐私政策的解释及争议解决，适用 <strong>中华人民共和国法律</strong>。协商不成时，提交至项目运营者所在地有管辖权的法院诉讼解决。</p>

            <h3>15. 政策更新</h3>
            <p>我们可能不定期更新本隐私政策。更新后将在本页面发布新版，并修改“最后更新日期”。继续使用服务即视为接受更新后的政策。</p>

            <h3>16. 联系方式</h3>
            <ul>
                <li>📛 项目名称：AI WHOIS LOOKUP / Request Forwarding</li>
                <li>👤 运营者/维护者：meoccu</li>
                <li>📧 联系邮箱：<a href="mailto:meow@m.paws.pp.ua">meow@m.paws.pp.ua</a></li>
            </ul>
            <p>如需行使数据主体权利、报告隐私问题或安全漏洞，请通过上述邮箱联系，我们将在 <strong>15个工作日</strong> 内予以回复。</p>
            <hr>
            <p><strong>📌 使用本服务即代表你已阅读、理解并同意本隐私政策全部条款。</strong> 如果你不同意，请立即停止使用该转发服务。</p>
            <div class="footer-note" style="margin-top: 1rem; text-align: left;">AI WHOIS LOOKUP · 边缘转发隐私声明 | 生效版本 20260606</div>
        </div>
    </div>

    <!-- 开发文档卡片 -->
    <div class="card">
        <div class="card-header">
            <h1>🛸 开发文档 <span class="badge">Cloudflare Worker 请求转发服务</span></h1>
            <p style="margin-top: 0.5rem; color: #4a627a;">⚡ 边缘转发 · 安全网关 · 统一入口 | 仅用于合法开发、测试、API聚合</p>
        </div>
        <div class="card-body">
            <p>基于 Cloudflare Workers 构建的高效转发层，提供统一的 API 入口、上游保护、CORS 处理与智能路由能力。</p>
            <div class="info-block">
                ✅ 统一 API 访问入口 | 🔒 隐藏上游真实地址 | 🌐 跨域/安全头管理 | 🚀 边缘网络加速
            </div>
            <div class="danger-block">
                ⚠️ 合规红线：禁止用于攻击第三方系统、绕过访问控制、批量滥用接口、侵犯隐私或其他违法违规行为。使用者须遵守所在地法律法规。
            </div>

            <h2>📌 项目概述</h2>
            <p>本项目运行在 Cloudflare 边缘网络，按照预定义配置将请求转发至上游目标服务，并可选实现鉴权、头处理、缓存策略、跨域等逻辑。</p>

            <h2>🧰 技术栈</h2>
            <ul>
                <li>☁️ Cloudflare Workers 无服务器运行时</li>
                <li>📜 JavaScript / TypeScript 核心逻辑</li>
                <li>🌐 Fetch API 网络请求</li>
                <li>⚙️ Wrangler CLI 开发与部署</li>
                <li>📡 Cloudflare DNS / Routes 可选路由</li>
                <li>🗃️ KV / D1 / R2 扩展存储（按需）</li>
            </ul>

            <h2>🔄 请求转发流程</h2>
            <pre><code>用户客户端
    │
    ▼
Cloudflare 边缘节点
    │
    ▼
Cloudflare Worker
(URL重写 · 头处理 · 鉴权 · 限流)
    │
    ▼
目标上游服务
    │
    ▼
Worker 返回响应 → 用户客户端</code></pre>
            <p>Worker 可能干预的内容包括：请求 URL/方法、请求头、请求体、响应状态码、响应头、跨域设置以及可选的缓存/日志。</p>

            <h2>💻 本地开发 & 部署</h2>
            <pre><code># 安装依赖
npm install

# 登录 Cloudflare
npx wrangler login

# 本地开发（热重载）
npx wrangler dev

# 部署至边缘网络
npx wrangler deploy</code></pre>
            <p>💡 部署成功后，Cloudflare 会返回 Worker 专属公网地址。生产环境建议通过 Custom Domain 绑定并配置 WAF 或速率限制。</p>

            <h2>🔧 环境变量（配置项）</h2>
            <table>
                <thead><tr><th>变量名</th><th>说明</th><th>示例</th></tr></thead>
                <tbody>
                    <tr><td><code>UPSTREAM_URL</code></td><td>目标上游服务地址</td><td><code>https://api.example.com</code></td></tr>
                    <tr><td><code>API_KEY</code></td><td>访问上游所需的密钥 (可选)</td><td><code>your-api-key</code></td></tr>
                    <tr><td><code>ALLOWED_ORIGINS</code></td><td>CORS 允许的来源，多域名用逗号分隔</td><td><code>https://admin.yourdomain.com</code></td></tr>
                    <tr><td><code>LOG_LEVEL</code></td><td>日志等级 (info, warn, error)</td><td><code>info</code></td></tr>
                </tbody>
            </table>
            <pre><code># 设置 secret 示例
npx wrangler secret put API_KEY
npx wrangler secret put UPSTREAM_URL</code></pre>
            <div class="danger-block">⚠️ 严禁将任何密钥、Token、私钥硬编码或提交至 Git 仓库，一律使用 Secrets 或环境变量注入。</div>

            <h2>📡 转发实现示例 (核心逻辑)</h2>
            <pre><code>export default {
  async fetch(request, env) {
    const url = new URL(request.url);
    const upstream = new URL(env.UPSTREAM_URL);
    upstream.pathname = url.pathname;
    upstream.search = url.search;
    const forwardReq = new Request(upstream.toString(), {
      method: request.method,
      headers: request.headers,
      body: request.body,
      redirect: "follow"
    });
    if (env.API_KEY) forwardReq.headers.set("X-API-Key", env.API_KEY);
    return fetch(forwardReq);
  }
};</code></pre>
            <p>🔁 上述是基础透传模式，实际生产可扩展请求校验、路径重写、缓存回写、错误降级等。</p>

            <h2>🌐 CORS 跨域配置</h2>
            <pre><code>const corsHeaders = {
  "Access-Control-Allow-Origin": env.ALLOWED_ORIGINS || "*",
  "Access-Control-Allow-Methods": "GET, POST, PUT, DELETE, PATCH, OPTIONS",
  "Access-Control-Allow-Headers": "Content-Type, Authorization, X-Requested-With",
  "Access-Control-Max-Age": "86400"
};

if (request.method === "OPTIONS") {
  return new Response(null, { status: 204, headers: corsHeaders });
}
const response = await fetch(forwardReq);
const newHeaders = new Headers(response.headers);
Object.entries(corsHeaders).forEach(([k, v]) => newHeaders.set(k, v));
return new Response(response.body, { status: response.status, headers: newHeaders });</code></pre>
            <div class="warning-block">⚠️ 生产环境避免使用通配符 "*"，请替换为具体的受信任域名。</div>

            <h2>📊 日志 & 监控</h2>
            <p>✅ 推荐记录：请求时间/耗时/路径/方法、响应状态码、上游服务响应时长。<br>
            ❌ 严禁记录：Authorization、Cookie、密码、API密钥、个人身份信息、完整请求体敏感载荷。</p>
            <pre><code>console.log(`[INFO] ${new Date().toISOString()} method=${request.method} path=${url.pathname} status=${response.status} ms=${duration}`);</code></pre>

            <h2>🛡️ 安全建议（必读）</h2>
            <ul>
                <li>🔐 使用 Cloudflare Secrets 管理敏感配置</li>
                <li>🔄 对上游地址白名单限制（或路径校验）</li>
                <li>✂️ 限制允许的 HTTP 方法（如仅开放 GET/POST）</li>
                <li>⚡ 高风险接口增加额外鉴权（HMAC/JWT）</li>
                <li>⏱️ 设置速率限制（Rate Limiting）避免滥用</li>
                <li>🚫 避免开放式任意URL代理（万能转发器）</li>
                <li>📄 对错误响应脱敏（不暴露堆栈或内部路径）</li>
                <li>📋 定期审查访问日志与异常请求模式</li>
            </ul>
            <div class="danger-block">🧠 特别提醒：不要把 Worker 做成“无限制公共代理”，否则可能被滥用为流量中间人，严重违反服务条款。</div>

            <h2>✅ 部署前检查清单</h2>
            <ul>
                <li>✔️ 环境变量已正确配置（UPSTREAM_URL有效，API_KEY通过secret注入）</li>
                <li>✔️ 上游服务地址可达且路径重写逻辑符合预期</li>
                <li>✔️ 确认 Git 仓库无密钥硬编码 (git secrets 扫描)</li>
                <li>✔️ CORS 策略安全（生产域名收敛，禁用全开放）</li>
                <li>✔️ 日志输出不包含敏感数据（Token、IP完整地址可选脱敏）</li>
                <li>✔️ 已配置必要的访问控制（如 IP 白名单、请求头校验）</li>
                <li>✔️ 阅读并理解 Cloudflare 服务条款及产品使用政策</li>
                <li>✔️ 确保项目用途符合当地法律法规和上游服务 ToS</li>
            </ul>

            <h2>⚖️ 合规说明与法律责任</h2>
            <div class="danger-block">
                🚨 禁止性用途：未授权访问、攻击扫描、撞库、绕过控制、传播恶意内容、批量抓取违反服务条款、侵犯隐私及知识产权，或任何违反《网络安全法》、GDPR等法律的行为。<br>
                项目维护者不对使用者的违法违规行为承担责任。一旦发现滥用，维护者有权立即限制、暂停或终止访问权限。
            </div>
            <p>📢 <strong>使用者承诺</strong>：仅将本项目用于自身授权系统的API网关、合法测试或经明确授权的服务代理，遵守所有适用的国内与国际法律法规。</p>

            <h2>📚 相关参考</h2>
            <ul>
                <li><a href="https://developers.cloudflare.com/workers/" target="_blank" rel="noopener noreferrer">Cloudflare Workers 文档</a></li>
                <li>Wrangler CLI 指南：部署、Secret、环境管理</li>
                <li>Fetch API 标准 (MDN / WHATWG)</li>
                <li>最佳实践：请求校验、头过滤、超时控制</li>
            </ul>
            <p>若需扩展 KV 缓存、D1 持久化或 R2 存储，请参阅 Cloudflare 开发者文档并按需集成。</p>
            <hr>
            <div class="footer-note" style="margin-top: 1rem;">© Cloudflare Worker 转发服务 | 本文档仅供内部及合法用途参考 | 版本 v2.0 · 遵循法律法规与道德规范<br>本作品采用 知识共享署名-非商业性使用 4.0 国际许可协议 进行许可</div>
        </div>
    </div>
</div>
</body>
</html>
