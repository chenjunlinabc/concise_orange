<?php if(!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this -> need('header.php');?>
<main>
    <article id="post-content" class="container">
        <div class="post-content-main">
            <div class="post-mains"><a href="<?php $this->options->siteUrl(); ?>">首页</a> &raquo; <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'date'      =>  _t('在 %s 发布的文章'),
            'author'    =>  _t('作者 %s 发布的文章')
            ), '', ''); ?></div>
           <div class="post-mains">
                <h3 class="post-title">
                     <a href="<?php $this->permalink() ?>">
                         <?php $this->title() ?>
                     </a>
                </h3>
                <ul class="nav post-meta">
                    <li class="nav-item"><?php $this->date(); ?></li>
                    <li class="nav-item"><?php $this->category(','); ?></li>
                    <li>
                        <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('暂无评论', '%d 条评论'); ?></a>
                    </li>
                    <li>字数统计：<?php echo art_count($this->cid); ?></li>
                </ul>
                <!--输出文章内容-->
                <div class="post-article">
                    <?php $this->content(); ?>
                    <div class="copyright">
                        注意：本站未注明转载的文章均为原创，转载请注明来源
                    </div>
                </div>
            </div>
            <div class="change post-mains">
                <div class="change-left"><?php $this->theNext('上一篇:%s','没有了'); ?></div>
                <div class="change-right"><?php $this->thePrev('下一篇:%s','没有了'); ?></div>
            </div>
            
            <?php $this->need('comments.php'); ?>
        </div>
        <?php $this -> need('sidebar.php');?>
    </article>


</main>
    <div class="go-top">
            <a href="#add">GO</a>
    </div>

<?php $this -> need('footer.php'); ?>