<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin</title>
<link rel="stylesheet" href="/Public/css/admin.css">
<link rel="stylesheet" type="text/css" href="/Public/simditor/styles/simditor.css" />
</head>
<body>

<div class="nav">
    <ul>
        <li class="navList bga">
            <a href="<?php echo U('index');?>"><img src="/Public/img/icon/light/48px/48_home.png" alt=""></a>
        </li>
        <li class="navList bgb">
            <a href="<?php echo U('article_list');?>"><img src="/Public/img/icon/light/48px/48_settings.png" alt=""></a>
        </li>
        <li class="navList bgc">
            <a href="javascript:void(0);"><img src="/Public/img/icon/light/48px/48_poll.png" alt=""></a>
        </li>
        <li class="navList bgd">
            <a href="<?php echo U('joke');?>"><img src="/Public/img/icon/light/48px/48_comments.png" alt=""></a>
        </li>
        <li class="navList bge">
            <a href="javascript:void(0);"><img src="/Public/img/icon/light/48px/48_gallery.png" alt=""></a>
        </li>
        <li class="navList bgf">
            <a href="javascript:void(0);"><img src="/Public/img/icon/light/48px/48_pie_graph.png" alt=""></a>
        </li>
        <li class="navList bgg">
            <a href="javascript:void(0);"><img src="/Public/img/icon/light/48px/48_rss.png" alt=""></a>
        </li>
        <li class="navList bgh">
            <a href="javascript:void(0);"><img src="/Public/img/icon/light/48px/48_html.png" alt=""></a>
        </li>
        <li class="navList bgi">
            <a href="javascript:void(0);"><img src="/Public/img/icon/light/48px/48_googleplus.png" alt=""></a>
        </li>
    </ul>
</div>


    <div class="article">
        <div class="aLists">
            <?php if(is_array($arts)): $i = 0; $__LIST__ = $arts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?><div class="aList">
                <div class="aList_h"><a href="<?php echo U('/p/'.$art['id']);?>" target="_blank"><?php echo ($art["title"]); ?></a></div>
                <div class="aList_m">
                    <div class="aList_m_item">
                        <img src="/Public/img/icon/icons-png/tag-black.png" alt="">
                        <?php echo (tr_tags($art["tags"])); ?>
                    </div>
                    <div class="aList_m_item">
                        <img src="/Public/img/icon/icons-png/clock-black.png" alt="">
                        <span>2015.05.21</span>
                    </div>
                    <div class="aList_m_item">
                        <img src="/Public/img/icon/icons-png/eye-black.png" alt="">
                        <span>12</span>
                    </div>
                </div>
                <div class="aList_f">
                    <a href="<?php echo U('edit_article',array('id'=>$art['id']));?>" title="编辑" class="aList_f_edit"></a>
                    <a href="<?php echo U('delete_article',array('id'=>$art['id']));?>" title="删除" class="aList_f_delete"></a>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>

</body>
</html>