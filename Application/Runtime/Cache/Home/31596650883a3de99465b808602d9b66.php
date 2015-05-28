<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content ="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="blank" />
<meta name="format-detection" content="telephone=no" />
<title>Joke</title>
<link rel="stylesheet" href="/Public/css/style.css">
<link rel="stylesheet" href="/Public/prettify/prettify.css">
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
        <?php if(is_array($joke)): $i = 0; $__LIST__ = $joke;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$j): $mod = ($i % 2 );++$i;?><div class="joke">
            <div class="joke_title"><?php echo ($j["title"]); ?></div>
            <div class="joke_content"><?php echo ($j["content"]); ?></div>
            <div class="joke_time"><?php echo (date("Y.m.d",$j["time"])); ?></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="page_think">
            <?php if($page['p'] > 1): ?><a href="<?php echo U('/joke/p/'.($page['p']-1));?>"><</a><?php endif; ?>
            <span><?php echo ($page["p"]); ?> / <?php echo ($page["pages"]); ?></span>
            <?php if($page['p'] < $page['pages']): ?><a href="<?php echo U('/joke/p/'.($page['p']+1));?>">></a><?php endif; ?>
        </div>
    </div>

    <div class="footer">
        POWER BY KS_Tutu
    </div>
</body>
<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/js/tu.js"></script>
</html>