<?php
/* Smarty version 3.1.30, created on 2017-03-13 15:25:33
  from "D:\wampserver\wamp\www\moni-mvc\template\index\notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6abdd347d22_94153023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4604f7d7a5d81ef8bd363d0f32940402d2d300df' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\moni-mvc\\template\\index\\notice.html',
      1 => 1489317000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6abdd347d22_94153023 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    .notice-login{
        height:100%;
        width:100%;
        position:fixed;
        left:0;
        top:0;
        background: rgba(0,0,0,0.4);
        display:none;
    }
    .notice-login-text{
        padding:30px 0;
        width:200px;
        background:#000;
        opacity: 0.9;
        border-radius: 10px;
        text-align: center;
        line-height: 20px;
        position: fixed;
        left:0;top:40%;right:0;bottom: 40%;
        z-index:1000;
        margin:auto;
        color:#fff;
    }
    .notice-login-text a{
        color:#ccc;
    }
</style>

<div class="notice-login">
    <div class="notice-login-text">
        请先 <a href="index.php?m=index&f=login&a=startLogin">登陆</a>
        再进行操作<br>
        <a href="javascript:;" class="btn btn-danger quxiao" style="margin-top:5px;">取消登陆</a>
    </div>
</div><?php }
}
