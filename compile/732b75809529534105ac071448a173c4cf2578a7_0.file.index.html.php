<?php
/* Smarty version 3.1.30, created on 2017-03-17 18:34:32
  from "D:\wampserver\wamp\www\moni-mvc\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cc1e2894c563_37823147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '732b75809529534105ac071448a173c4cf2578a7' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\moni-mvc\\template\\index\\index.html',
      1 => 1489772071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58cc1e2894c563_37823147 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\wampserver\\wamp\\www\\moni-mvc\\libs\\smarty-3.1.30\\libs\\plugins\\modifier.truncate.php';
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="mainbody">
    <div class="blank"></div>

    <div class="blogs">

        <ul style="float: left" class="bloglist">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li>
                <div class="arrow_box">
                    <div class="ti"></div>
                    <!--三角形-->
                    <div class="ci"></div>
                    <!--圆形-->
                    <h2 class="title"><a href="index.php?m=index&f=art&a=artshow&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a></h2>
                    <ul class="textinfo">
                        <a href="javascript:;"><img src="<?php echo IMG_PATH;?>
/01.jpg"></a>
                        <p>
                            <a href="index.php?m=index&f=art&a=artshow&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value["scon"],100,'',true);?>
</a>
                        </p>
                    </ul>
                    <ul class="details">
                        <li class="likes"><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value["good"];?>
</a></li>
                        <li class="comments"><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value["hits"];?>
</a></li>
                        <li class="icon-time"><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>
</a></li>
                    </ul>
                </div>
                <!--arrow_box end-->
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <li>
                <div style="background: #ccc;width: 100px;height: 30px;border-radius: 4px;box-shadow: 10px 10px 10px #282828 inset,-10px -10px 10px #282828 inset;margin-left:200px;text-align: center">
                    <a href="index.php?m=index&f=index&a=xiang" style="color:white;line-height: 30px;text-align: center">点击查看更多</a>
                </div>
            </li>
        </ul>

        <!--bloglist end-->

        <aside>
            <div class="tuijian">
                <h2>推荐文章</h2>
                <ol>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hitslist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li><strong style="color:orange">~</strong><a href="index.php?m=index&f=art&a=artshow&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ol>
            </div>
            <div class="toppic">
                <h2>热门文章</h2>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lovelist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li><a href="index.php?m=index&f=art&a=artshow&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
            <div class="clicks">
                <h2>热门点击</h2>
                <ol>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hitslist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li><a href="index.php?m=index&f=art&a=artshow&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ol>
            </div>
            <div class="search">
                <form class="searchform" method="get" action="#">
                    <input type="text" name="s" value="Search" onfocus="this.value=''" onblur="this.value='Search'">
                </form>
            </div>
        </aside>
    </div>
    <!--blogs end-->
</div>
<!--mainbody end-->
<footer>
    <div class="footer-mid">
        <div class="links">
            <h2>友情链接</h2>
            <ul>
                <li><a href="javascript:;">王小辉个人博客</a></li>
                <li><a href="http://www.3dst.com">3DST技术服务中心</a></li>
            </ul>
        </div>
        <div class="visitors">
            <h2>最新评论</h2>
            <dl>
                <dt><img src="<?php echo IMG_PATH;?>
/s8.jpg">
                <dt>
                <dd>DanceSmile
                    <time>49分钟前</time>
                </dd>
                <dd>在 <a href="javascript:;" class="title">如果要学习web前端开发，需要学习什么？ </a>中评论：</dd>
                <dd>文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</dd>
            </dl>
            <dl>
                <dt><img src="<?php echo IMG_PATH;?>
/s7.jpg">
                <dt>
                <dd>yisa
                    <time>2小时前</time>
                </dd>
                <dd>在 <a href="javascript:;" class="title">芭蕾女孩的心事儿</a>中评论：</dd>
                <dd>我手机里面也有这样一个号码存在</dd>
            </dl>
            <dl>
                <dt><img src="<?php echo IMG_PATH;?>
/s6.jpg">
                <dt>
                <dd>小林博客
                    <time>8月7日</time>
                </dd>
                <dd>在 <a href="javascript:;" class="title">如果个人博客网站再没有价值，你还会坚持吗？ </a>中评论：</dd>
                <dd>博客色彩丰富，很是好看</dd>
            </dl>
        </div>
        <section class="flickr">
            <h2>摄影作品</h2>
            <ul>
                <li><a href="javascript:;"><img src="<?php echo IMG_PATH;?>
/01.jpg"></a></li>
                <li><a href="javascript:;"><img src="<?php echo IMG_PATH;?>
/02.jpg"></a></li>
                <li><a href="javascript:;"><img src="<?php echo IMG_PATH;?>
/03.jpg"></a></li>
                <li><a href="javascript:;"><img src="<?php echo IMG_PATH;?>
/04.jpg"></a></li>
                <li><a href="javascript:;"><img src="<?php echo IMG_PATH;?>
/05.jpg"></a></li>
                <li><a href="javascript:;"><img src="<?php echo IMG_PATH;?>
/06.jpg"></a></li>
                <li><a href="javascript:;"><img src="<?php echo IMG_PATH;?>
/07.jpg"></a></li>
                <li><a href="javascript:;"><img src="<?php echo IMG_PATH;?>
/08.jpg"></a></li>
                <li><a href="javascript:;"><img src="<?php echo IMG_PATH;?>
/09.jpg"></a></li>
            </ul>
        </section>
    </div>
    <div class="footer-bottom">
        <p>Copyright 2013 Design by <a href="">DanceSmile</a></p>
    </div>
</footer>
<!-- jQuery仿腾讯回顶部和建议 代码开始 -->
<div id="tbox"> <a id="togbook" href=""></a> </div>

</body>
</html><?php }
}
