<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>登录</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    <h2>BootCamp - 用户管理系统</h2>
    <a href="register.php">注册</a>
    <a href="index.php">登录&nbsp;&nbsp;&nbsp;&nbsp;</a>
</header>

<div class="main">
    <div class="select1">
        <a href="index.php">登录</a>
        <a class="active" href="register.php">注册</a>
    </div>
    <div class="user-info">
        <div class="name">
            <p>账号:</p>
            <input type="text" name="user" value required placeholder="邮箱/手机/用户名">
        </div>
        <div class="pwd">
            <p>密码:</p>
            <input type="text" name="password" value required placeholder="密码">
        </div>
        <div class="remeber">
            <input class="show-box" type="checkbox" name="r-pwd">
            <span class="remp">记住密码</span>
        </div>
        <div class="login">
            <input type="submit" name="log" value="登录">
        </div>
        <div class="lost-pwd">
            <a href="#">找回密码</a>
        </div>
        |
        <div class="get-user">
            还没有注册账号？
            <a href="register.php">立即注册</a>
        </div>
    </div>
</div>

</body>
</html>
