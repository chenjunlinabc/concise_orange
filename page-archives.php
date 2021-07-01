<?php
/**
 * 归档
 *
 * @package custom
 */
?>
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
                <!--输出文章内容-->
                <div class="post-article">
                    <p class="articles-main">
                        <?php
                            $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
                            $year=0; $mon=0; $i=0; $j=0;   
                            $output = '<div class="archives">';   
                            while($archives->next()):
                                $year_tmp = date('Y',$archives->created);   
                                $mon_tmp = date('m',$archives->created);   
                                $y=$year; $m=$mon;   
                                if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';   
                                if ($year != $year_tmp && $year > 0) $output .= '</ul>';   
                                if ($year != $year_tmp) {   
                                    $year = $year_tmp;   
                                    $output .= '<h3 class="archive_year">'. $year .' 年</h3><ul class="archive_year_list">'; //输出年份   
                                }   
                                if ($mon != $mon_tmp) {   
                                    $mon = $mon_tmp;   
                                    $output .= '<li><span class="article_month">'. $mon .' 月</span><ul class="article_month_list">'; //输出月份   
                                }   
                                $output .= '<li>'.date('d日',$archives->created).'<a href="'.$archives->permalink .'">'. $archives->title .'</a></li>'; //输出文章日期和标题   
                                endwhile;   
                                $output .= '</ul></li></ul></div>';
                                echo $output;
                        ?>
                    </p>
                </div>
                
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