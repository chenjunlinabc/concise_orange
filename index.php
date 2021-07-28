<?php

/**
 * 这是typecho系统的一套主题。你可以在<a href="https://chenjunlin.me">小陈的辣鸡屋</a>获得更多关于此的信息
 * 
 * @package concise_orange
 * @author chenjunlin
 * @version 0.0.1
 * @link https://chenjunlin.me
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<main class="main ajaxdata">
    <div class="container">
	    <article id="article" class="article">
            <?php if ($this->have()): ?> <!-- 判断是否有文章，有则输出，无则提示 -->
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
                <article class="post">
                    <h2 class="post-title">暂无文章</h2>  <!-- 没有文章提示 -->
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
