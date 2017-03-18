<?php
/* Smarty version 3.1.30, created on 2017-03-17 18:04:32
  from "D:\wampserver\wamp\www\moni-mvc\template\index\xiang.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cc1720f153f1_20668747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b733971d85d6327b64ced359377b6e86da771e6e' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\moni-mvc\\template\\index\\xiang.html',
      1 => 1489770271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58cc1720f153f1_20668747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
    *{
        color: #fff;
    }
.xiangshow {
    width: 1200px;
    height: auto;
    overflow: hidden;
    /*border: 1px solid #ccc;*/
    margin: 0 auto;
}
.xiangshow h1{
    font-size: 20px;
}
    .xiangtitle{
        font-size: 16px;
    }
</style>
<div class="xiangshow">
    <h1>最新文章</h1>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xiang']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <div class="xiangtitle">
        [<?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
]
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["son"], 'v1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
?>
    <div class="xiangcon">
        <a href="index.php?m=index&f=art&a=artshow&sid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v1']->value['stitle'];?>
</a>
    </div>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <hr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div><?php }
}
