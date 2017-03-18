<?php
/* Smarty version 3.1.30, created on 2017-03-17 16:03:50
  from "D:\wampserver\wamp\www\moni-mvc\template\admin\addpos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cbfad6e7b278_13302085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '421cb2bbc56cf1ab482f9a612e9a2224cd5063e8' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\moni-mvc\\template\\admin\\addpos.html',
      1 => 1489396662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cbfad6e7b278_13302085 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="index.php?m=admin&f=position&a=addposInfo" method="post">
        已有推荐位：<select name="position" id="">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['posname'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </select><br/>
        推荐位名称：<input type="text" name="posname"><br/>
        <input type="submit" value="添加">
    </form>
</body>
</html><?php }
}
