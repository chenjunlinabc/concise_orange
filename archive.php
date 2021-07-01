<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<main>
    <div class="container">
	    <article id="article" class="article">
            <div class="post-mains"><a href="<?php $this->options->siteUrl(); ?>">首页</a> &raquo; <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'date'      =>  _t('在 %s 发布的文章'),
            'author'    =>  _t('作者 %s 发布的文章')
            ), '', ''); ?></div>
            <?php if ($this->have()): ?> <!-- 判断搜索结果是否有文章，有则输出，无则提示 -->
            <?php while($this->next()): ?> <!-- 文章循环开始 -->
            <div class="post">
                <h4 class="post-title">
                    <a href="<?php $this->permalink() ?>">
                        <?php $this->title() ?> <!-- 文章标题-->
                    </a>
                </h4>
	        	<div class="post-headermeta">
                    <span class="post-author">
                        <?php $this->author();?> <!--作者名称-->
                    </span>
                    <span class="post-date">
                        <?php $this->date();?>  <!--文章发布时间-->
                    </span>
                    <span class="post-comment">
                        <?php $this->commentsNum('%d 条评论');?>   <!--文章评论数-->
                    </span>
                </div>
                <section class="post-content">
                    <p class="post-main">
                        <?php $this->excerpt(200,"...");?>  <!--文章输出200字符，超过隐藏-->
                    </p>
                </section>
	        	<p class="post-more">
	        		<a href="<?php $this->permalink();?>" title="<?php $this->title();?>">
	        			阅读全文
	        		</a> <!--提供查看全文，地址为当前文章的详细页面-->
	        	</p>
            </div>
            <?php endwhile;?><!-- 文章循环结束 -->
            <?php else: ?>
                <article class="post-mains">
                    <h2 class="post-title">没有找到内容</h2> <!-- 搜索文章结果为空则返回 -->
                </article>
            <?php endif; ?>
	        <nav class="post-bottom">
                <?php $this->pageNav('上一页', '下一页', 1, '...', array('wrapTag' => 'div', 'wrapClass' => 'pagination', 'itemTag' => 'span', 'textTag' => 'span', 'currentClass' => 'page-item', 'prevClass' => 'page-prev', 'nextClass' => 'page-next','itemClass' => 'page-item'));?>
	        </nav>
        </article>
        <?php $this->need('sidebar.php'); ?>
    </div>
</main>
<?php $this->need('footer.php'); ?>