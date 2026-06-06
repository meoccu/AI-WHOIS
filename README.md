# 🔒 AI-WHOIS 隐私政策 & 开发文档

> **项目名称**：AI WHOIS LOOKUP / 请求转发服务  
> **版本**：v2.0 | **最后更新**：2026年6月6日

---

# 🔒 隐私政策

**最后更新**：2026年6月6日

本隐私政策说明 **AI WHOIS LOOKUP / 请求转发服务** 如何收集、使用、转发及保护你的信息。使用本服务即表示你已阅读并理解本政策。

## 1. 服务说明

AI WHOIS LOOKUP 是一个基于 Cloudflare Worker 的请求转发与 WHOIS 查询辅助服务。用户请求经由 Cloudflare 边缘网络及本项目的 Worker 逻辑处理后，转发至上游服务（WHOIS 数据源或自定义端点）。

**数据流路径**：
用户设备 → Cloudflare 边缘节点 → Cloudflare Worker (本服务) → 上游服务(WHOIS/API)
因此，在使用本服务过程中，请求信息可能被 Cloudflare、本服务逻辑以及目标上游服务处理。

2. 我们可能收集或处理的信息
📡 技术信息
包括但不限于：IP 地址、请求时间、请求 URL、请求方法、请求头(User-Agent/Referer)、响应状态码、执行耗时、错误日志等。

📨 用户主动提交的信息
当你通过本服务发起 WHOIS 查询或 API 转发请求时，提交的内容（例如域名、参数、JSON 数据、表单）会被转发至目标上游服务。

🔑 鉴权信息（若存在）
如请求中包含 API Key、Bearer Token、Cookie、Authorization Header 等凭证，可能被本服务处理或转发。除服务功能必要外，我们不主动记录或公开这些敏感信息。

3. Cloudflare Worker 转发相关说明
本服务基于 Cloudflare Workers 运行，Cloudflare 作为基础设施服务商会自动处理请求元数据用于网络性能、安全防护及分析。Cloudflare 可能处理的信息包括：IP 地址、请求元数据、HTTP 头、路径、防火墙日志等。

ℹ️ Cloudflare 的数据处理受其自身隐私政策约束：
📄 Cloudflare 隐私政策 | 📄 Cloudflare 服务条款

本项目无法完全控制 Cloudflare 对基础设施层面数据的收集与处理方式，但始终选择最小必要原则配置 Worker 行为。

4. 我们如何使用信息
✅ 提供稳定的请求转发、WHOIS 查询服务

✅ 连接目标上游服务并返回查询结果

✅ 排查故障、监控服务可用性、性能优化

✅ 防止滥用、攻击、异常高频请求，执行访问控制策略

✅ 满足法律法规或监管要求

我们不会出售用户个人信息，也不会超出服务目的使用相关数据。

5. 信息共享与第三方服务
Cloudflare：基础设施及边缘计算服务方，请求必然经过 Cloudflare 网络。

上游服务提供方：根据配置，用户请求可能转发至上游 WHOIS 服务器或自定义 API，上游服务独立遵循其隐私政策。

法律合规与安全：当法律要求、保护权益、调查滥用或攻击行为时，我们可能披露必要信息。

⚠️ 注意：上游服务的数据处理行为不受本隐私政策约束，请自行查阅上游服务的隐私条款。

6. 日志保留
本服务会保留有限的访问日志和错误日志，仅用于运维排障和安全审计。
📅 日志保留时间：默认保留 7 天（滚动覆盖），不长期存储可识别到个人身份的明细数据。

✅ 不记录完整请求体（除必要调试外，且脱敏）

✅ 不记录完整 Authorization / Cookie 明文

✅ 对 IP 地址不做长期关联分析

Cloudflare 依据其数据保留策略可能保有其安全分析数据，详情参阅 Cloudflare 隐私文档。

7. Cookie 与本地存储
本服务 不使用 Cookie 或浏览器本地存储 来追踪用户。如果上游服务通过响应设置了 Cookie，相关 Cookie 将转发至客户端，其用途由上游服务政策约束。

8. 数据安全
🔒 全程 HTTPS 加密通信，保障传输安全

🔒 使用 Cloudflare Secrets 管理敏感配置（上游密钥等）

🔒 最小化日志输出，限制敏感信息暴露

🔒 定期检查异常请求模式，避免开放式代理滥用

🔒 边缘访问控制与速率限制（按需部署）

⚠️ 尽管采取多种防护，互联网传输无法保证绝对安全。请用户自行承担使用风险，切勿通过本服务传输极高敏感信息（如未加密的支付数据）。

9. 用户权利
根据适用法律（如 GDPR、CCPA、中国《个人信息保护法》等），你享有以下权利：

查询我们是否处理你的个人信息

请求访问、更正或删除个人信息

限制或反对部分数据处理

数据可携带权（若适用）

撤回同意，投诉或向监管机构申诉

如需行使上述权利，请通过下方 联系方式 联系我们，我们将在合理时间内响应。

10. 未成年人隐私
本服务不面向 14 周岁以下未成年人主动收集信息。若你是未成年人，请在监护人同意与陪同下使用。如发现无意中收集了未成年人信息，我们将在合理范围内尽快删除。

11. 跨境数据传输
Cloudflare 拥有全球边缘网络，请求可能会在不同国家/地区的服务器之间传输、缓存或处理。使用本服务即表示你理解并同意数据可能传输至你所在地区以外的司法管辖区，不同地区的隐私保护水平可能有所差异。

12. 禁止用途
🚫 使用本服务时严禁：

违反任何适用法律法规

未授权访问第三方系统、网络攻击、扫描、撞库、DDoS

绕过访问控制或技术保护措施

传播恶意软件、钓鱼内容或非法材料

滥用 Cloudflare Worker 资源或上游服务

侵犯他人隐私、知识产权

一经发现滥用行为，我们有权立即暂停或终止服务访问，并配合司法机关处理。

13. 免责声明
本服务按“现状”与“可用”提供。在法律允许的最大范围内，我们不对服务持续可用性、无错误、上游服务稳定性、数据绝对安全做任何保证。用户应自行判断风险并承担使用责任。

14. 法律适用与争议解决
本隐私政策的解释及争议解决，适用 中华人民共和国法律（不适用冲突法原则）。因本服务或政策产生的争议，双方应友好协商解决；协商不成时，提交至 项目运营者所在地有管辖权的法院 诉讼解决。若法律另有强制性规定，依其规定。

15. 政策更新
我们可能不定期更新本隐私政策。更新后将在本页面发布新版，并修改“最后更新日期”。如果涉及重大变更（如数据处理目的变更），我们将在服务官网或通过显著方式提示。继续使用服务即视为接受更新后的政策。

16. 联系方式
📛 项目名称：AI WHOIS LOOKUP / Request Forwarding

👤 运营者/维护者：meoccu

📧 联系邮箱：meow@m.paws.pp.ua

如需行使数据主体权利、报告隐私问题或安全漏洞，请通过上述邮箱联系，我们将在 15个工作日 内予以回复。

📌 使用本服务即代表你已阅读、理解并同意本隐私政策全部条款。
如果你不同意本政策，请立即停止使用该转发服务。感谢理解与配合。

AI WHOIS LOOKUP · 边缘转发隐私声明 | 生效版本 20260606

🛸 开发文档
基于 Cloudflare Workers 构建的高效转发层
提供统一的 API 入口、上游保护、CORS 处理与智能路由能力。
仅用于合法开发、测试、API 聚合或服务转发用途。

📌 项目概述
本项目是一个运行在 Cloudflare 边缘网络中的请求转发服务。客户端请求到达 Cloudflare 边缘节点后，Worker 会按照预定义配置将请求转发至上游目标服务，并可选地实现鉴权、头处理、缓存策略、跨域等逻辑。

特性	说明
✅ 统一 API 访问入口	简化客户端调用
🔒 隐藏上游真实地址	增强安全性
🌐 跨域/安全头管理	支持 CORS 配置
🚀 边缘网络加速	全球低延迟
⚠️ 合规红线：禁止用于攻击第三方系统、绕过访问控制、批量滥用接口、侵犯隐私或其他违法违规行为。使用者须遵守所在地法律法规。

🧰 技术栈
☁️ Cloudflare Workers 无服务器运行时

📜 JavaScript / TypeScript 核心逻辑

🌐 Fetch API 网络请求

⚙️ Wrangler CLI 开发与部署

📡 Cloudflare DNS / Routes 可选路由

🗃️ KV / D1 / R2 扩展存储（按需）

🔄 请求转发流程
用户客户端
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
Worker 返回响应
    │
    ▼
用户客户端
Worker 可能干预的内容包括：请求 URL/方法、请求头（Authorization, Content-Type等）、请求体、响应状态码、响应头、跨域设置，以及可选的缓存/日志。

💻 本地开发 & 部署
📦 安装依赖
bash
npm install
🔐 登录 Cloudflare
bash
npx wrangler login
🚀 本地开发（热重载）
bash
npx wrangler dev
🌍 部署至边缘网络
bash
npx wrangler deploy
💡 提示：部署成功后，Cloudflare 会返回 Worker 的专属公网地址（例如 https://your-worker.your-subdomain.workers.dev）。生产环境建议通过 Custom Domain 绑定，并配置 WAF 或速率限制。

🔧 环境变量（配置项）
以下变量可通过 wrangler.toml 或 Cloudflare Dashboard 设定，敏感信息务必使用 wrangler secret put：

变量名	说明	示例
UPSTREAM_URL	目标上游服务地址	https://api.example.com
API_KEY	访问上游所需的密钥 (可选)	your-api-key
ALLOWED_ORIGINS	CORS 允许的来源，多域名用逗号分隔	https://admin.yourdomain.com
LOG_LEVEL	日志等级 (info, warn, error)	info
bash
# 设置 secret 示例
npx wrangler secret put API_KEY
npx wrangler secret put UPSTREAM_URL   # 如含敏感路径可置为secret
⚠️ 严禁将任何密钥、Token、私钥硬编码或提交至 Git 仓库，一律使用 Secrets 或环境变量注入。

📡 转发实现示例 (核心逻辑)
javascript
export default {
  async fetch(request, env) {
    const url = new URL(request.url);
    const upstream = new URL(env.UPSTREAM_URL);

    // 保留原请求路径与查询参数
    upstream.pathname = url.pathname;
    upstream.search = url.search;

    // 构造转发请求（复制 method / headers / body）
    const forwardReq = new Request(upstream.toString(), {
      method: request.method,
      headers: request.headers,
      body: request.body,
      redirect: "follow"
    });

    // 可选：添加自定义认证头
    if (env.API_KEY) {
      forwardReq.headers.set("X-API-Key", env.API_KEY);
    }

    // 发送请求并返回响应
    return fetch(forwardReq);
  }
};
🔁 上述是基础透传模式，实际生产可扩展请求校验、路径重写、缓存回写、错误降级等。

🌐 CORS 跨域配置
如果 Worker 需要被浏览器直接调用，推荐添加以下响应头处理（需同时处理 OPTIONS 预检）：

javascript
const corsHeaders = {
  "Access-Control-Allow-Origin": env.ALLOWED_ORIGINS || "*",
  "Access-Control-Allow-Methods": "GET, POST, PUT, DELETE, PATCH, OPTIONS",
  "Access-Control-Allow-Headers": "Content-Type, Authorization, X-Requested-With",
  "Access-Control-Max-Age": "86400"
};

// 处理 OPTIONS 预检请求
if (request.method === "OPTIONS") {
  return new Response(null, { status: 204, headers: corsHeaders });
}

// 对真实响应合并 CORS 头
const response = await fetch(forwardReq);
const newHeaders = new Headers(response.headers);
Object.entries(corsHeaders).forEach(([k, v]) => newHeaders.set(k, v));
return new Response(response.body, { status: response.status, headers: newHeaders });
⚠️ 生产环境避免使用通配符 "*"，请替换为具体的受信任域名，如 https://admin.yourdomain.com。

📊 日志 & 监控
Cloudflare Workers 提供多种观测手段：console.log、Dashboard 实时日志、Analytics 分析。建议记录关键指标但切勿记录敏感信息。

✅ 推荐记录
请求时间 / 耗时 / 路径 / 方法

响应状态码 / 错误类型

上游服务响应时长

❌ 严禁记录
Authorization / Bearer Token

Cookie / Session ID

密码、API密钥、个人身份信息 (PII)

完整请求体中的敏感载荷

javascript
// 安全日志示例
console.log(`[INFO] ${new Date().toISOString()} method=${request.method} path=${url.pathname} status=${response.status} ms=${duration}`);
🛡️ 安全建议（必读）
🔐 使用 Cloudflare Secrets 管理敏感配置

🔄 对上游地址白名单限制（或路径校验）

✂️ 限制允许的 HTTP 方法（如仅开放 GET/POST）

⚡ 高风险接口增加额外鉴权（HMAC/JWT）

⏱️ 设置速率限制（Rate Limiting）避免滥用

🚫 避免开放式任意URL代理（万能转发器）

📄 对错误响应脱敏（不暴露堆栈或内部路径）

📋 定期审查访问日志与异常请求模式

🧠 特别提醒：不要把 Worker 做成“无限制公共代理”，否则可能被滥用为流量中间人，严重违反服务条款。

✅ 部署前检查清单
✔️ 环境变量已正确配置（UPSTREAM_URL 有效，API_KEY 通过 secret 注入）

✔️ 上游服务地址可达且路径重写逻辑符合预期

✔️ 确认 Git 仓库无密钥硬编码 (git secrets 扫描)

✔️ CORS 策略安全（生产域名收敛，禁用全开放）

✔️ 日志输出不包含敏感数据（Token、IP 完整地址可选脱敏）

✔️ 已配置必要的访问控制（如 IP 白名单、请求头校验）

✔️ 阅读并理解 Cloudflare 服务条款及产品使用政策

✔️ 确保项目用途符合当地法律法规和上游服务 ToS

⚖️ 合规说明与法律责任
🚨 禁止性用途（绝不姑息）
未授权访问或渗透任何第三方系统

网络攻击、扫描、撞库、暴力破解

规避技术保护措施或访问控制

传播恶意软件、钓鱼内容或非法材料

批量抓取数据违反目标服务条款（如爬虫滥用）

侵犯他人隐私、知识产权或其他合法权益

任何违反《网络安全法》、GDPR、CCPA 等适用法律的行为

项目维护者不对使用者的违法违规行为承担责任。
一旦发现滥用或恶意转发，维护者有权立即限制、暂停或终止相关访问权限，并向有关部门报告。

📢 使用者承诺：仅将本项目用于自身授权系统的 API 网关、合法测试或经明确授权的服务代理，遵守所有适用的国内与国际法律法规。

📚 相关参考
资源	链接/说明
Cloudflare Workers 文档	https://developers.cloudflare.com/workers/
Wrangler CLI 指南	部署、Secret、环境管理
Fetch API 标准	MDN / WHATWG Fetch 规范
最佳实践：安全转发	请求校验、头过滤、超时控制
若需扩展 KV 缓存、D1 持久化或 R2 存储，请参阅 Cloudflare 开发者文档并按需集成。

© Cloudflare Worker 转发服务 | 本文档仅供内部及合法用途参考 | 版本 v2.0 · 遵循法律法规与道德规范

*本作品采用 知识共享署名-非商业性使用 4.0 国际许可协议 进行许可*
