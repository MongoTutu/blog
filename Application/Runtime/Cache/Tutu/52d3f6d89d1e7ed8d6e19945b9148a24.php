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
        <div class="main">
            <form action="<?php echo U('alter_joke');?>" method="post">
            <input type="hidden" name="id" value="<?php echo ($art["id"]); ?>">
            <div class="addBlog">
                <div class="textDv">
                    <input type="text" class="text_box" name="title" placeholder="标题" value="<?php echo ($art["title"]); ?>">
                </div>
                <div class="textDv">
                    <textarea id="editor" name="content"><?php echo ($art["content"]); ?></textarea>
                </div>
                <div class="textDv">
                    <input type="submit" class="submit_btn bgg" value="提 交">
                </div>
            </div>
            </form>
        </div>
    </div>

</body>
<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/simditor/scripts/module.js"></script>
<script type="text/javascript" src="/Public/simditor/scripts/hotkeys.js"></script>
<script type="text/javascript" src="/Public/simditor/scripts/uploader.js"></script>
<script type="text/javascript" src="/Public/simditor/scripts/simditor.js"></script>
<script type="text/javascript">
$(function() {
    var editor, toolbar;
    toolbar = ['title', 'bold', 'italic', 'underline', 'strikethrough', 'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link', 'image', 'hr', '|', 'indent', 'outdent', '|', 'source'];
    return editor = new Simditor({
        textarea: $('#editor'),
        placeholder: '文章正文...',
        toolbar: toolbar,
        pasteImage: true,
    });
});
</script>
</html>