<?php if(!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this -> need('header.php');?>
<main class="ajaxdata">
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
                    <li><?php $this->author();?></li>
                    <li class="nav-item"><?php $this->date(); ?></li>
                    <li class="nav-item"><?php $this->category(','); ?></li>
                    <li>
                        <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('暂无评论', '%d 条评论'); ?></a>
                    </li>
                    <li>字数统计：<?php echo art_count($this->cid); ?></li>
                    <li>标签：<?php $this->tags('，', true, 'none'); ?></li>
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
     <div class="go-top">
            <a href="javascript:window.scrollTo(0,0)">
                <svg t="1628425563723" class="icon go" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3790" width="32" height="32"><path d="M624.401067 601.463467L512 489.0624l-112.401067 112.401067-48.264533-48.264534L512 392.533333l160.6656 160.6656-48.264533 48.264534zM512 819.2a307.2 307.2 0 1 0 0-614.4 307.2 307.2 0 0 0 0 614.4z m0 68.266667C304.64 887.466667 136.533333 719.36 136.533333 512S304.64 136.533333 512 136.533333s375.466667 168.106667 375.466667 375.466667-168.106667 375.466667-375.466667 375.466667z" p-id="3791" fill="#1296db"></path></svg>
            </a>
    </div>

</main>
   

<?php $this -> need('footer.php'); ?>