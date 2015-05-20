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
<link href="favicon.ico" type="image/x-icon" rel=icon>
<link href="favicon.ico" type="image/x-icon" rel="shortcut icon">
</head>
<body>
    <div class="header">
        <div class="logo">
            <h1><a class="logo_link" href="/">Tu</a></h1>
        </div>
        <div class="nav">
            <ul>
                <li class="navList bga">
                    <a href="/"><img src="/Public/img/icon/light/24px/24_home.png" alt=""></a>
                </li>
                <li class="navList bgb">
                    <a href="javascript:void(0);"><img src="/Public/img/icon/light/24px/24_settings.png" alt=""></a>
                </li>
                <li class="navList bgc">
                    <a href="javascript:void(0);"><img src="/Public/img/icon/light/24px/24_poll.png" alt=""></a>
                </li>
                <li class="navList bgd">
                    <a href="javascript:void(0);"><img src="/Public/img/icon/light/24px/24_comments.png" alt=""></a>
                </li>
                <li class="navList bge">
                    <a href="javascript:void(0);"><img src="/Public/img/icon/light/24px/24_gallery.png" alt=""></a>
                </li>
                <li class="navList bgf">
                    <a href="javascript:void(0);"><img src="/Public/img/icon/light/24px/24_pie_graph.png" alt=""></a>
                </li>
                <li class="navList bgg">
                    <a href="javascript:void(0);"><img src="/Public/img/icon/light/24px/24_rss.png" alt=""></a>
                </li>
                <li class="navList bgh">
                    <a href="javascript:void(0);"><img src="/Public/img/icon/light/24px/24_html.png" alt=""></a>
                </li>
                <li class="navList bgi">
                    <a href="javascript:void(0);"><img src="/Public/img/icon/light/24px/24_googleplus.png" alt=""></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="article wraper">
        <div class="pageList">
            <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?><div class="page">
                <div class="page_title">
                    <h2><a href="<?php echo U('/p/'.$art['id']);?>" class="page_title_link"><?php echo ($art["title"]); ?></a></h2>
                </div>
                <div class="page_description">
                    <?php echo ($art["description"]); ?>
                </div>
                <div class="page_information">
                    <?php echo (tr_tags($art["tags"])); ?>
                    <span><?php echo (date('Y.m.d',$art["time"])); ?></span>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>

    <div class="footer">
        POWER BY KS_Tutu
    </div>
</body>
</html>