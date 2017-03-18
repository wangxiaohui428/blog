<?php
/* Smarty version 3.1.30, created on 2017-03-17 18:32:38
  from "D:\wampserver\wamp\www\moni-mvc\template\index\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cc1db6591f37_71193106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60c5dd8d726adc2091ed0c7f8ee824ed1f94cadc' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\moni-mvc\\template\\index\\home.html',
      1 => 1489771957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58cc1db6591f37_71193106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/public.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/home.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/home.js"><?php echo '</script'; ?>
>
<style>
    *{
        color:white;
    }
    .imgbox{
        margin-left:400px;
    }
    .leftbox h3{
        margin-left: 400px;
        border:0;
    }
    .leftbox h3 a{
        margin-left: 10px;
    }
    .add_touxiang{
        width: 400px;
        height: 400px;
        position:fixed;
        top:90px;
        left:800px;
    }
    .add_touxiang{
        display: none;
    }
</style>
<div class="content">
    <div class="topbox">
        <div class="imgbox">
            <img src="<?php echo $_smarty_tpl->tpl_vars['touxiang']->value;?>
" alt="">
        </div>
        <div class="leftbox">
            <h3><?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
<a href="javascript:;" class="edit">编辑个人资料</a></h3>
            <ul class="info">
                <li>
                    <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['guanzhu']->value;?>
<br/>关注</a>
                </li>
                <li>
                    <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['be_guanzhu']->value;?>
<br/>粉丝</a>
                </li>
                <li>
                    <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['love']->value;?>
<br/>收藏</a>
                </li>
                <li>
                    <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['be_love']->value;?>
<br/>被收藏</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="content">
        <h3>发表文章</h3>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stitles']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li><span>[<?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
]</span><a href="index.php?m=index&f=art&a=artshow&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['stitle'];?>
</a></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>

    <div class="add_touxiang">
        <form action="index.php?m=admin&f=upload&a=addtouxiangInfo" method="post">
            添加图片：<input type="file"  name="file" id="img_file"><br/>
            <div class="box">
                <div class="img"><img src="" alt=""></div>
                <div class="img_progress"></div>
            </div>
            <input type="hidden" name="imgurl" id="imgurl">
            <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
            <input type="submit" class="btn btn-default select" id="imgurl_btn" value="确认上传" style="color:black">
        </form>
    </div>

</div>
<?php echo '<script'; ?>
>
    $(".edit").click(function () {
        $(".add_touxiang").css("display","block");
    })
    $("#imgurl_btn").click(function () {
        $(".add_touxiang").css("display","none");
    })
<?php echo '</script'; ?>
>
</body>
</html>














<?php }
}
