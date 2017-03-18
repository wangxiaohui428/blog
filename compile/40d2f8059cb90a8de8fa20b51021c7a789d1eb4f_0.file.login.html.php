<?php
/* Smarty version 3.1.30, created on 2017-03-13 18:46:34
  from "D:\wampserver\wamp\www\moni-mvc\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6dafa383c16_52472758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40d2f8059cb90a8de8fa20b51021c7a789d1eb4f' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\moni-mvc\\template\\index\\login.html',
      1 => 1489427063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6dafa383c16_52472758 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <!--<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">-->
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
</head>
<body>
<form action="index.php?m=index&f=login&a=onLogin" method="post" id="form">
    <div class="login-container" >
        <h1>用户登录</h1>

        <div class="connect">
            <p>聆听心的声音</p>
        </div>

        <!--<form action="" method="post" id="loginForm">-->
            <div>
                <input type="text" name="username" class="username" placeholder="用户名" autocomplete="off"/>
            </div>
            <div>
                <input type="password" name="password" class="password" placeholder="密码" oncontextmenu="return false" onpaste="return false" />
            </div>
            <div class="form-group">
                <!--<label for="code">验证码</label>-->
                <input type="text" id="code" name="code" placeholder="验证码" autocomplete><br/>
                <img src="index.php?m=index&f=login&a=code" alt="验证码" title="点击更换" class="code"
                onclick="this.src='index.php?m=index&f=login&a=code&'+Math.random()">
            </div>
            <button id="submit" type="submit">登 陆</button>
        <!--</form>-->

        <a href="index.php?m=index&f=login&a=reg">
            <button type="button" class="register-tis">还有没有账号？</button>
        </a>

    </div>
<!--
    <div class="box">
        <h3>登录页</h3>
        用户名：<input type="text" value="" name="username"/><br/>
        密　码：<input type="password" value="" name="password"/><br/>
        验证码：<input type="text" value="" name="code" size="4" use="no"><img src="index.php?m=index&f=login&a=code" alt="验证码" title="点击更换" class="code" onclick="this.src='index.php?m=index&f=login&a=code&'+Math.random()"><span class="codes"></span><br/>
        <input type="submit" value="登录" disabled="disabled" /><br/>
        没有用户名，请<a href="index.php?m=index&f=login&a=reg">点击注册</a>
    </div>
-->


    <!--<div class="box">-->
        <!--<h3>登录页</h3>-->
        <!--<div class="form-group">-->
            <!--<label for="username">用户名</label>-->
            <!--<input type="text" class="form-control" id="username" name="username" autocomplete>-->
        <!--</div>-->
        <!--<div class="form-group">-->
            <!--<label for="Password1">密码</label>-->
            <!--<input type="password" class="form-control" id="Password1" name="password" autocomplete>-->
        <!--</div>-->
        <!--<div class="form-group">-->
            <!--<label for="code">验证码</label>-->
            <!--<input type="text" id="code" name="code" autocomplete><br/>-->
            <!--<img src="index.php?m=index&f=login&a=code" alt="验证码" title="点击更换" class="code"-->
                 <!--onclick="this.src='index.php?m=index&f=login&a=code&'+Math.random()">-->
        <!--</div>-->
        <!--<p>没有用户名，请<a href="index.php?m=index&f=login&a=reg">点击注册</a></p>-->
        <!--<input type="submit" class="btn btn-default" value="点击登录">-->
        <!--<a href="index.php?m=index" class="unlogin">取消登录</a>-->


    <!--</div>-->

</form>
</body>
</html><?php }
}
