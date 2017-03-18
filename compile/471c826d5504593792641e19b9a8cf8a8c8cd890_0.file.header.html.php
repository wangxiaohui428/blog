<?php
/* Smarty version 3.1.30, created on 2017-03-17 15:18:48
  from "D:\wampserver\wamp\www\moni-mvc\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cbf048aab010_23920485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '471c826d5504593792641e19b9a8cf8a8c8cd890' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\moni-mvc\\template\\index\\header.html',
      1 => 1489760327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_58cbf048aab010_23920485 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>聆听心的声音</title>
    <meta name="keywords" content="黑色模板,个人网站模板,个人博客模板,博客模板,css3,html5,网站模板" />
    <meta name="description" content="这是一个有关黑色时间轴的css3 html5 网站模板" />
    <link href="<?php echo CSS_PATH;?>
/index/styles.css" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>
/index/animation.css" rel="stylesheet">
    <!-- 返回顶部调用 begin -->
    <link href="<?php echo CSS_PATH;?>
/index/lrtk.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/header.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/index/js.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/header.js"><?php echo '</script'; ?>
>
    <!-- 返回顶部调用 end-->
    <!--[if lt IE 9]>
    <!--<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/modernizr.js"><?php echo '</script'; ?>
>-->
    <![endif]-->
</head>
<body>
<header>
    <nav id="nav">
        <ul>
            <li><a href="index.php" >网站首页</a></li>
            <li style="float: right">
                <ul>
                    <?php if (empty($_smarty_tpl->tpl_vars['nickname']->value)) {?>
                    <li><a href="index.php?m=index&f=login&a=startLogin">登录</a></li>
                    <li><a href="index.php?m=index&f=login&a=reg">注册</a></li>
                    <?php } else { ?>
                    <li><a href="javascript:;">欢迎<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
回来</a></li>
                    <li><a href="index.php?m=index&f=login&a=unlogin">退出登录</a></li>
                    <?php }?>

                    <li><a href="index.php?m=index&f=art&a=addcon">添加文章</a></li>
                    <li><a href="index.php?m=index&f=home">个人中心</a></li>
                </ul>

            </li>
        </ul>
        <?php echo '<script'; ?>
 src="js/silder.js"><?php echo '</script'; ?>
><!--获取当前页导航 高亮显示标题-->
    </nav>
</header>
<!--header end-->
<?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
