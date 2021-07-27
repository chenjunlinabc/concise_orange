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
    <meta name="keywords" content="typecho,php,blog">
    <meta name="description" content="Typecho 1.1/17.10.30">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <script charset="utf-8" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script charset="utf-8" src="https://cdn.jsdelivr.net/npm/jquery-pjax@2.0.1/jquery.pjax.min.js"></script>
</head>
<body class="body" id="body">
<a id="add"></a>
<header id="header" class="header">
    <div id="nav" class="container">
        <div class="logo-main">
                <h3 id="logo">
                    <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                </h3>
                
                 <div class="nav-svg">
                    <svg t="1624027716295" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="6571" width="30" height="30"><path d="M789.333333 576v85.333333h85.333334v64h-85.333334v85.333334h-64v-85.333334h-85.333333v-64h85.333333v-85.333333h64z m-533.333333 158.101333v64H170.666667v-64h85.333333z m341.333333 0v64H298.666667v-64h298.666666zM256 493.162667v64H170.666667v-64h85.333333z m426.666667 0v64H298.666667v-64h384zM256 252.224v64H170.666667v-64h85.333333z m597.333333 0v64H298.666667v-64h554.666666z" p-id="6572"></path></svg>
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
                    <svg t="1624525274543" class="icon control-svg" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4590" width="32" height="32"><path d="M790.63 745.37L682.25 637C717.1 592.29 736 537.6 736 480c0-68.38-26.63-132.67-74.98-181.02C612.67 250.63 548.38 224 480 224c-68.38 0-132.67 26.63-181.02 74.98C250.63 347.33 224 411.62 224 480c0 68.38 26.63 132.67 74.98 181.02C347.33 709.37 411.62 736 480 736c57.6 0 112.29-18.9 157-53.75l108.37 108.37c6.25 6.25 14.44 9.37 22.63 9.37s16.38-3.12 22.63-9.37c12.49-12.49 12.49-32.75 0-45.25zM288 480c0-105.87 86.13-192 192-192s192 86.13 192 192-86.13 192-192 192-192-86.13-192-192z" p-id="4591"></path></svg>
                </li>
            </ul>
        </nav>
    </div>
    
    
</header>
    
    
    
    
    
