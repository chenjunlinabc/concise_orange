<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?>
    </title>
    <meta name="google" content="notranslate"/>
    <meta name="keywords" content="typecho,php,blog,chenjunlin,chenjunlin.me,小陈的辣鸡屋,小陈,陈俊霖">
    <meta name="description" content="小陈的辣鸡屋chenjunlin.me">
    <link rel="Shortcut Icon" href="https://chenjunlin.me/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <script charset="utf-8" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
   
    <!--百度统计-->
    <script>
        var _hmt = _hmt || [];
        (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?626bf8c65e4659fe458caf20874057d9";
        var s = document.getElementsByTagName("script")[0]; 
        s.parentNode.insertBefore(hm, s);
        })();
    </script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RYV15F0XZV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-RYV15F0XZV');
    </script>

</head>
<body class="body" id="body">
    
    <div style="display:none; z-index:999; background-color: #ccc; position:fixed; top:0px; width:100%; height:100vh;" class="pjax_main">
    </div>

<a id="add"></a>
<header id="header" class="header">
    <div id="nav" class="container">
        <div class="logo-main">
                <h3 id="logo">
                    <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                </h3>
                
                 <div class="nav-svg">
                    <svg t="1628233870517" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="6617" width="32" height="32"><path d="M789.333333 576v85.333333h85.333334v64h-85.333334v85.333334h-64v-85.333334h-85.333333v-64h85.333333v-85.333333h64z m-533.333333 158.101333v64H170.666667v-64h85.333333z m341.333333 0v64H298.666667v-64h298.666666zM256 493.162667v64H170.666667v-64h85.333333z m426.666667 0v64H298.666667v-64h384zM256 252.224v64H170.666667v-64h85.333333z m597.333333 0v64H298.666667v-64h554.666666z" p-id="6618" fill="#4e6ef2"></path></svg>
                </div>
                
            </div>
        <nav class="navbar">
            <ul class="nav-menu">
                <li class="menu-li">
                    <a class="menu-link" href="<?php $this->options->siteUrl(); ?>">首页</a>
                </li>
                <li class="menu-li">
                    <a class="classify">
                        <?php echo $this->options->CategoryText ? $this->options->CategoryText : '分类' ?>
                    </a>
                     <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
                </li>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages);?>
                <?php while($pages->next()): ?>
                <li class="menu-li">
                    <a class="menu-link" <?php if($this->is('page', $pages->slug)): ?>  <?php endif;?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
                        <?php $pages->title();?>
                    </a>
                </li>
                <?php endwhile;?>
                
                <li class="menu-li control">
                    <span class="menu-control">
                        <form method="post" class="post-nav">
                            <input type="text" name="s" class="form-control form-nav" placeholder="搜索一下"/>
                            <input type="submit" class="menu-submit" value="搜索">
                        </form>
                    </span>
                </li>
                
                <li class="menu-li">
                    <svg t="1628233761921" class="icon control-svg" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2271" width="32" height="32"><path d="M854.3 887.3c-9.3 0-18.1-3.6-24.8-10.3L628 675.5l-3.5 2.7c-21 16.5-44.1 30.1-68.8 40.6-37.4 15.8-77.1 23.8-118 23.8-40.9 0-80.6-8-118-23.8-36.1-15.3-68.5-37.1-96.3-64.9-27.8-27.8-49.7-60.2-64.9-96.3-15.8-37.4-23.8-77.1-23.8-118s8-80.6 23.8-118c15.3-36.1 37.1-68.5 64.9-96.3 27.8-27.8 60.2-49.7 96.3-64.9 37.4-15.8 77.1-23.8 118-23.8 40.9 0 80.6 8 118 23.8 36.1 15.3 68.5 37.1 96.3 64.9 27.8 27.8 49.7 60.2 64.9 96.3 15.8 37.4 23.8 77.1 23.8 118s-8 80.6-23.8 118c-9.7 23-22.2 44.7-37.2 64.5l-2.6 3.5 202 202c6.6 6.6 10.3 15.4 10.3 24.7 0 9.4-3.6 18.1-10.3 24.7-6.7 6.7-15.5 10.3-24.8 10.3zM437.7 206.7c-62.2 0-120.7 24.2-164.8 68.2-44 44-68.2 102.5-68.2 164.8 0 62.2 24.2 120.7 68.2 164.8 44 44 102.5 68.2 164.8 68.2 62.2 0 120.7-24.2 164.8-68.2 44-44 68.2-102.5 68.2-164.8S646.5 319 602.5 274.9c-44-44-102.5-68.2-164.8-68.2z" p-id="2272" fill="#4e6ef2"></path></svg>
                    
                </li>
            </ul>
        </nav>
    </div>
    
    
</header>
    
    
    
    
    
