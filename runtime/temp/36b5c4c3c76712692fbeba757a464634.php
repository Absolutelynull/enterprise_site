<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/admin\view\login\login.htm";i:1558424497;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head-->
<head>
    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__ADMIN__/style/bootstrap.css" rel="stylesheet">
    <link href="__ADMIN__/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet">
    <link href="__ADMIN__/style/demo.css" rel="stylesheet">
    <link href="__ADMIN__/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
<div class="login-container animated fadeInDown" style="width: 300px;height: 280px;">
    <form action="<?php echo url('login/index'); ?>" method="post">
        <div class="loginbox bg-white">
            <div class="loginbox-title">SIGN IN</div>
            <div class="loginbox-textbox">
                <input value="admin" class="form-control" placeholder="username" name="username" type="text">
            </div>
            <div class="loginbox-textbox">
                <input class="form-control" placeholder="password" name="password" type="password">
            </div>
            <div class="loginbox-textbox">
                <input class="form-control" placeholder="code" name="code" type="text"
                       style="width: 100px;float:left;margin-right: 5px;" size="4">
                <!--<img src="<?php echo captcha_src(); ?>"	alt="captcha" style="float:left;width:100px;height: 30px;" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random()"/>-->
                <img src="<?php echo captcha_src(); ?>" alt="captcha"  style="width: 110px;height: 30px;" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random()" />

            </div>
            <div class="loginbox-submit">
                <input class="btn btn-primary btn-block" style="margin-top: 10px;" value="Login" type="submit">

            </div>
        </div>
        <div class="logobox">
            <p class="text-center">童老师ThinkPHP交流群：4845194464</p>
        </div>
    </form>
</div>
<!--Basic Scripts-->
<script src="__ADMIN__/style/jquery.js"></script>
<script src="__ADMIN__/style/bootstrap.js"></script>
<script src="__ADMIN__/style/jquery_002.js"></script>
<!--Beyond Scripts-->
<script src="__ADMIN__/style/beyond.js"></script>


</body><!--Body Ends--></html>