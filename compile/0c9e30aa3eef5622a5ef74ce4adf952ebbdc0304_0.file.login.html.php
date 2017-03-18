<?php
/* Smarty version 3.1.30, created on 2017-03-13 15:33:37
  from "D:\wampserver\wamp\www\moni-mvc\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6adc1a1f7f6_04666144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c9e30aa3eef5622a5ef74ce4adf952ebbdc0304' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\moni-mvc\\template\\admin\\login.html',
      1 => 1488794867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6adc1a1f7f6_04666144 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/login.js"><?php echo '</script'; ?>
>
</head>
<body>
<form action="index.php?m=admin&a=onLogin" method="post">
    <div class="box">
        <h3>登录页</h3>
        用户名：<input type="text" value="" name="username"/><br/>
        密　码：<input type="password" value="" name="password"/><br/>
        验证码：<input type="text" value="" name="code" size="4" use="no"><img src="index.php?m=admin&f=index&a=code" alt="验证码" title="点击更换" class="code" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()"><span class="codes"></span><br/>
        <input type="submit" value="登录" disabled="disabled" /><br/>
    </div>
</form>
</body>
</html><?php }
}
