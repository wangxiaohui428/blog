<?php
/* Smarty version 3.1.30, created on 2017-03-13 18:46:10
  from "D:\wampserver\wamp\www\moni-mvc\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6dae2771048_57791865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db4bb5124daf58902bf385892072c85722c9bc3e' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\moni-mvc\\template\\index\\reg.html',
      1 => 1489427169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6dae2771048_57791865 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <!--<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/public.css">-->
    <!--<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/reg.css">-->
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/style.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/login.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/supersized.3.2.7.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/supersized-init.js"><?php echo '</script'; ?>
>

<body>
<form action="index.php?m=index&f=login&a=addReg" method="post" id="form">
    <div class="register-container">
        <h1>用户注册</h1>

        <div class="connect">
            <p>聆听心的声音</p>
        </div>

        <form action="" method="post" id="registerForm">
            <div>
                <input type="text" name="username" class="username" placeholder="您的用户名" autocomplete="off"/>
            </div>
            <div class="form-group">
            <!--<label for="nickname">昵称</label>-->
            <input type="text" placeholder="昵称" class="form-control" id="nickname" name="nickname" autocomplete>
            </div>
            <div>
                <input type="password" name="password" class="password" placeholder="输入密码" oncontextmenu="return false" onpaste="return false" />
            </div>
            <div>
                <input type="password" name="confirm_password" class="confirm_password" placeholder="再次输入密码" oncontextmenu="return false" onpaste="return false" />
            </div>
            <div class="form-group">
                <!--<label for="code">验证码</label>-->
                <input type="text" id="code" name="code" placeholder="验证码" autocomplete><br/>
                <img src="index.php?m=index&f=login&a=code" alt="验证码" title="点击更换" class="code"
                     onclick="this.src='index.php?m=index&f=login&a=code&'+Math.random()">
            </div>

            <button id="submit" type="submit">注 册</button>
        </form>
        <a href="denglu.html">
            <button type="button" class="register-tis">已经有账号？</button>
        </a>

    </div>
    <!--<div class="box">-->
        <!--<div class="form-group">-->
            <!--<h3>注册页</h3>-->
            <!--<label for="username">用户名</label>-->
            <!--<input type="text" class="form-control" id="username" name="username" autocomplete>-->
        <!--</div>-->
        <!--<div class="form-group">-->
            <!--<label for="nickname">昵称</label>-->
            <!--<input type="text" class="form-control" id="nickname" name="nickname" autocomplete>-->
        <!--</div>-->
        <!--<div class="form-group">-->
            <!--<label for="Password1">密码</label>-->
            <!--<input type="password" class="form-control" id="Password1" name="password" autocomplete>-->
        <!--</div>-->
        <!--<div class="form-group">-->
            <!--<label for="Password2">确认密码</label>-->
            <!--<input type="password" class="form-control" id="Password2" name="password2" autocomplete>-->
        <!--</div>-->
        <!--<div class="form-group">-->
            <!--<label for="code">验证码</label>-->
            <!--<input type="text" id="code" name="code" autocomplete><br/>-->
            <!--<img src="index.php?m=index&f=login&a=code" alt="验证码" title="点击更换" class="code"-->
                 <!--onclick="this.src='index.php?m=index&f=login&a=code&'+Math.random()">-->
        <!--</div>-->
        <!--<p>已有用户名，请<a href="index.php?m=index&f=login&a=login">点击登录</a></p>-->
        <!--<input type="submit" class="btn btn-default" value="点击注册">-->

    <!--</div>-->
</form>
</body>

</html>
<?php }
}
