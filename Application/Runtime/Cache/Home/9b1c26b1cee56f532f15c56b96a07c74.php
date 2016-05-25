<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>堆客开源客服系统</title>
    <link id="zuithumb" href="/Public/dist/css/zui.css" rel="stylesheet">
    <link href="/Public/dist/css/home.css" rel="stylesheet">
    <script src="/Public/dist/lib/jquery/jquery.js"></script>
    <script src="/Public/dist/js/zui.min.js"></script>
</head>
<body>
<!--[if lt IE 9]>
<div class="alert alert-danger">您正在使用 <strong>过时的</strong> 浏览器. 是时候 <a href="http://browsehappy.com/">更换一个更好的浏览器</a> 来提升用户体验.</div>
<![endif]-->
<div class="header">
    <div class="top">
        <div class="w1000 clearfix">
            <span class="pull-left"><i class="icon-volume-up"></i> 小贴士 ：本站可以免费发布广告</span>
            <span class="pull-right">快速搭建自己的WEB客服系统平台 | 拿走直接用 <i class="icon-hand-left"></i></span>
        </div>
    </div>
    <div class="subtop">
        <div class="w1000 clearfix">
            <div class="logo pull-left"><a href="/"><img src="/Public/img/logo.png" alt="logo"></a></div>
            <div class="bignav pull-right"><ul><li><a href="">首页</a></li><li><a href="">产品介绍</a></li><li><a href="">开源博客</a></li><li><a href="">问题与需求</a></li><li><a href="/index.php?s=Manage/Login/index.html" target="_blank">Alpha体验中心</a></li></ul></div>
        </div>
    </div>
</div>
<div class="banner">

</div>
<div class="footer">
    <div class="w1000">
        <p></p>
        <p class="copyright">&copy;2016&nbsp;堆客开源客服系统 版权所有 豫ICP备15007166号-1</p>
    </div>
</div>
<script>
    $(function(){
        $("<link>").attr({ rel: "stylesheet",type: "text/css",href: "/Public/dist/css/zui-green-theme.css"}).insertAfter("#zuithumb");
    });
</script>
</body>
</html>