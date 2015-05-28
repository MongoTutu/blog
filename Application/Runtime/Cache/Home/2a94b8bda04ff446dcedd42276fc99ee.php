<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content ="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="blank" />
<meta name="format-detection" content="telephone=no" />
<title>Blog</title>
<link rel="stylesheet" href="/Public/css/style.css">
<link href="/favicon.ico" type="image/x-icon" rel=icon>
<link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">
</head>
<body>
    <div class="header">
    <div class="menubar">
        <a class="menubar_link" href="javascript:void(0);"><img src="/Public/img/menu.png" alt=""></a>
    </div>
    <div class="menubar_Dv">
        <div class="logo">
            <a class="logo_link" href="<?php echo U('/');?>">Tu</a>
        </div>
        <div class="nav">
            <ul class="nav_ul">
                <a href="<?php echo U('/');?>"><li class="nav_list">首页</li></a>
                <a href="<?php echo U('/blog');?>"><li class="nav_list">博客</li></a>
                <a href="<?php echo U('/share');?>"><li class="nav_list">分享</li></a>
                <a href="<?php echo U('/joke');?>"><li class="nav_list">笑话</li></a>
                <a href="<?php echo U('/');?>"><li class="nav_list">关于</li></a>
            </ul>
        </div>
    </div>
</div>
<div class="header_p"></div>


    <div class="article wraper">
        <h1>Hello World</h1>
    </div>

    <div class="footer">
        POWER BY KS_Tutu
    </div>
</body>
<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/js/tu.js"></script>
</html>