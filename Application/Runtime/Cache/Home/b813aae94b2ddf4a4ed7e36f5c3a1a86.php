<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content ="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="blank" />
<meta name="format-detection" content="telephone=no" />
<title>Share</title>
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
        <div class="share_wraper">
            <div class="share">
                <div class="share_img">
                    <img src="/Public/upload/2.jpg" alt="">
                </div>
                <div class="share_content_wraper">
                    <div class="share_title">
                        <h2><a href="<?php echo U('/');?>">高清组图分享，速度来收图</a></h2>
                    </div>
                    <div class="share_info">
                        <div class="share_info_tag">
                            <a href="#">图片</a>
                            <a href="#">小清新</a>
                        </div>
                        <div class="share_info_time">
                            <p>2015.05.29</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="share">
                <div class="share_img">
                    <img src="/Public/upload/3.jpg" alt="">
                </div>
                <div class="share_content_wraper">
                    <div class="share_title">
                        <h2><a href="<?php echo U('/');?>">高清组图分享，速度来收图</a></h2>
                    </div>
                    <div class="share_info">
                        <div class="share_info_tag">
                            <a href="#">图片</a>
                            <a href="#">小清新</a>
                        </div>
                        <div class="share_info_time">
                            <p>2015.05.29</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="share">
                <div class="share_img">
                    <img src="/Public/upload/1.jpg" alt="">
                </div>
                <div class="share_content_wraper">
                    <div class="share_title">
                        <h2><a href="<?php echo U('/');?>">高清组图分享，速度来收图</a></h2>
                    </div>
                    <div class="share_info">
                        <div class="share_info_tag">
                            <a href="#">图片</a>
                            <a href="#">小清新</a>
                        </div>
                        <div class="share_info_time">
                            <p>2015.05.29</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        POWER BY KS_Tutu
    </div>
</body>
<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/js/tu.js"></script>
</html>