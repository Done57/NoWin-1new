<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蓝鲸公益</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'PingFang SC', 'Microsoft YaHei', sans-serif;
            background: #fff;
            color: #333;
            line-height: 1.5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

           .bg-img {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.0);
            z-index: -1;
        }

        .header {
            background: transparent;
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 2px solid #3498db;
        }

        .header-content {
            max-width: 100%;
            margin: 0;
            padding: 16px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #3498db;
        }

        .nav a {
            color: #333;
            text-decoration: none;
            margin-left: 32px;
            font-size: 0.9rem;
            transition: 0.2s;
        }

        .nav a:hover {
            color: #3498db;
        }

        .container {
            max-width: 100%;
            margin: 0;
            padding: 40px 24px;
            flex: 1;
        }

        .stats {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 32px;
            margin-bottom: 60px;
            text-align: center;
        }

         .stat-item {
            background: transparent;
            padding: 20px 28px;
            min-width: 140px;
        }

        .stat-item h3 {
            font-size: 2rem;
            font-weight: 700;
            color: #3498db;
        }

        .stat-item p {
            color: #fff;
            font-size: 0.85rem;
            margin-top: 8px;
            text-shadow: 0 0 4px rgba(0,0,0,0.5);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 24px;
            margin-top: 32px;
        }

       .card {
            background: transparent;
            border-radius: 20px;
            padding: 24px;
            transition: 0.2s;
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(0px);
        }

        .card:hover {
            transform: translateY(-4px);
            border-color: #3498db;
            background: rgba(0, 0, 0, 0.2);
        }

        .card h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 12px;
            color: #fff;
            text-shadow: 0 0 2px rgba(0,0,0,0.3);
        }

        .card p {
            color: #f0f0f0;
            font-size: 0.85rem;
            margin-bottom: 16px;
            text-shadow: 0 0 2px rgba(0,0,0,0.2);
        }

        .btn {
            display: inline-block;
            background: #3498db;
            color: white;
            padding: 6px 16px;
            border-radius: 40px;
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: 500;
            transition: 0.2s;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #2980b9;
            transform: translateY(-1px);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid #3498db;
            color: #3498db;
        }

        .btn-outline:hover {
            background: #3498db;
            color: white;
        }

    .join {
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            color: white;
            text-align: center;
            padding: 60px 0;
            margin-top: 40px;
            width: 100%;
        }

        .join h2 {
            font-size: 1.8rem;
            margin-bottom: 16px;
            color: white;
        }

        .join p {
            margin-bottom: 32px;
            opacity: 0.9;
            color: white;
        }

        .join .btn {
            background: white;
            color: #3498db;
        }

        .join .btn:hover {
            background: #f0f0f0;
        }

             .footer {
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            text-align: center;
            padding: 40px 24px;
            color: white;
            font-size: 0.75rem;
            width: 100%;
            margin-top: 20px;
        }

        .footer a {
            color: white;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .services-grid {
                grid-template-columns: 1fr;
            }
            .nav a {
                margin-left: 16px;
            }
        }
    </style>
</head>
<body>
    <img class="bg-img" src="https://t.alcy.cc/pc" alt="随机二次元图">   
    <div class="header">
        <div class="header-content">
            <div class="logo">蓝鲸公益</div>
            <div class="nav">
                <a href="#">首页</a>
                <a href="#services">服务</a>
                <a href="#join">加入</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="stats">
            <div class="stat-item"><h3>170+</h3><p>用户</p></div>
            <div class="stat-item"><h3>7+</h3><p>公益服务</p></div>
            <div class="stat-item"><h3>100%</h3><p>免费开放</p></div>
            <div class="stat-item"><h3>170+天</h3><p>创立</p></div>
        </div>

        <div class="services-grid">
              <div class="card"><h3>论坛</h3><p>论坛</p><a href="https://lt.ljgy123.top" class="btn btn-outline">前往</a></div>     
       <div class="card"><h3>开放API</h3><p>时间、IP、二维码、TTS 语音等接口</p><a href="https://www.ljgy.site/api/" class="btn btn-outline">API集</a></div>
            <div class="card"><h3>快捷创建网页</h3><p>粘贴HTML代码发布</p><a href="https://e.ljgy123.top" class="btn btn-outline">创建</a></div>
            <div class="card"><h3>快捷创建网页（新）</h3><p> 粘贴HTML代码发布</p><a href="https://site.ljgy123.top" class="btn btn-outline">创建</a></div>
            <div class="card"><h3>虚拟主机</h3><p>公益虚拟主机，可无限创建，请遵守法律，后果自负，团队也将追究责任</p><a href="https://www.ljgy.site/cloud.php" class="btn btn-outline">使用</a></div>
            <div class="card"><h3>内网穿透</h3><p>公益内网穿透，联系站长或Q群管理和客服可为您创建隧道，无限流量，请按需求申请，不要乱滥用</p><a href="https://qm.qq.com/q/gsUKE03fuU" class="btn btn-outline">加群</a></div>
            <div class="card"><h3>二级域名</h3><p>二级域名，点击按钮加入官方群，联系站长管理申请域名</p><a href="https://qm.qq.com/q/gsUKE03fuU" class="btn btn-outline">进入</a></div>            
            <div class="card"><h3>其他子页面</h3><p>子页面</p><a href="https://www.ljgy.site/subpage.html" class="btn btn-outline">进入</a></div>
</div>
    </div>

    <div class="join" id="join">
    <div class="container">
        <h2>加入我们</h2>
        <p>欢迎各公益团队、技术社区及个人开发者交流合作。</p>
        <a href="https://qm.qq.com/q/gsUKE03fuU" class="btn">加入QQ群聊</a>
        <a href="https://qun.qq.com/universal-share/share?ac=1&authKey=uy4%2BkkjDPiMNaon8xQkOjl23JTMsIeeoyS87E2r1RY7lcFmlvoynZl7h3GKoHNZd&busi_data=eyJncm91cENvZGUiOiIyNDkzNzQzMzciLCJ0b2tlbiI6InhsVFNkQUR5V3IrTG5hdFFGdXNQbWRUb3AwMXdrTkU4K3FBUy9BeUFCUlhMd04rQ3pGTTU2RW51c1Nwb29rOE8iLCJ1aW4iOiIyMTg0MDU5MjM3In0%3D&data=d4YOo1GPp_NrJ0CoRA_KNAtZ-bjffHQRklIl1ia0EFvERFYQ8IiQB2qvuIDoeg_HDJPSIlMIZr_jSLw-BHaYOA&svctype=4&tempid=h5_group_info" class="btn">加入客户群</a>
    </div>
</div>

    <div class="footer">
        <div class="container">
            <p>© 2026 蓝鲸公益</p>
            <p><a href="https://www.ljgy.site">https://www.ljgy.site</a></p>
            <p style="margin-top: 8px;">联系邮箱：<a href="mailto:ljgy@ljgy123.top">ljgy@ljgy123.top</a></p>
        </div>
    </div>
</body>
</html>
