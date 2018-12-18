<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>注册</title>

    <link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body>
<header>
    <h2>BootCamp - 用户管理系统</h2>
    <a href="register.php">注册</a>
    <a href="index.php">登录&nbsp;&nbsp;&nbsp;&nbsp;</a>
</header>

<div class="main">
    <div class="select2">
        <a class="active" href="index.php">登录</a>
        <a href="register.php">注册</a>
    </div>
    <div class="new-user">
        <div class="name">
            <p>账号</p>
            <input type="text" name="n-name">
        </div>
        <div class="pwd">
            <p>密码</p>
            <input type="password" name="n-pwd">
        </div>
        <div class="rpwd">
            <p>确认密码</p>
            <input type="password" name="n-rpwd">
        </div>
        <div class="email">
            <p>电子邮箱</p>
            <input type="email" name="n-email">
        </div>
        <div class="age">
            <p>年龄</p>
            <input type="text" name="n-age">
        </div>
        <div class="job">
            <p>职业</p>
            <p class="st1"><input type="radio" name="n-job" value="student" checked>学生</p>
            <p class="st2"><input type="radio" name="n-job" value="worker" >上班族</p>
        </div>
        <div class="get-new-user">
            <input type="submit" name="reg" value="注册">
        </div>
    </div>
</div>

</body>
</html>
