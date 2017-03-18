<?php
/* Smarty version 3.1.30, created on 2017-03-13 21:31:43
  from "D:\wampserver\wamp\www\moni-mvc\template\admin\addCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c701afd2b913_43344425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9ebbf262cd4b7b840e04373e77bb610ee66acc4' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\moni-mvc\\template\\admin\\addCategory.html',
      1 => 1488592103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c701afd2b913_43344425 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php?m=admin&f=category&a=addCategoryInfo" method="post">
    添加分类：<br/>
    已有分类：<select name="category">
    <?php echo $_smarty_tpl->tpl_vars['options']->value;?>

</select><br/>
    添加分类：<input type="text" value="" name="addcat"/><br/>
    <input type="submit" value="添加">
</form>
</body>
</html><?php }
}
