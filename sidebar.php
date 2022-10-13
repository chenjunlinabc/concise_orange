<?php if(!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<aside id="aside" class="aside">
    
    <section class="sidebar-main">
        <form method="post" class="post-nav">
            <input type="text" name="s" class="aside-control form-nav" placeholder="搜索一下"/>
            <input type="submit" class="aside-submit" value="搜索">
        </form>
    </section>
    
    <section class="sidebar-main">
        <h3><?php _e("博客信息")?></h3>
        <ul>
            <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
            <li>文章总数：<?php $stat->publishedPostsNum() ?>篇</li>
            <li>评论总数：<?php $stat->publishedCommentsNum() ?>条</li>
            <li>
                运行天数：<?php getBuildTime(); ?>
            </li>
            <li>
                全站字数：<?php echo AllarticlesNum(); ?>字
            </li>
        </ul>
    </section>
    <section class="sidebar-main">
        <h3><?php _e("最热文章")?></h3>
        <ul>
            <?php getHotComments('10');?>
        </ul>
    </section>
    <section class="sidebar-main">
        <h3><?php _e("文章分类")?></h3>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=sidebar-class'); ?>
    </section>
    
    <section class="sidebar-main">
        <h3><?php _e("友情链接")?></h3>
        <ul class="links">
            <li><a href="https://paugram.com/" target="_blank" rel="noopener noreferrer">保罗的小宇宙</a></li>
            <li><a href="https://linxuan.fun" target="_blank" rel="noopener noreferrer">临轩</a></li>
            <li><a href="https://yujienb.cn/" target="_blank" rel="noopener noreferrer">狱杰的屋敷</a></li>
            <li><a href="https://www.kiwiape.cn/" target="_blank" rel="noopener noreferrer">猕猴の那年记忆</a></li>
            <li><a href="https://ghser.com" target="_blank" rel="noopener noreferrer">一叶三秋</a></li>
            <li><a href="https://www.acg19.top" target="_blank" rel="noopener noreferrer">新漫猫</a></li>
            <li><a href="https://www.timochan.cn" target="_blank" rel="noopener noreferrer">TimochanのBlog</a></li>
            <li><a href="https://zshmvp.com" target="_blank" rel="noopener noreferrer">zshMVP</a></li>
            <li><a href="https://www.abcio.cn/" target="_blank" rel="noopener noreferrer">清墨的橘</a></li>
            <li><a href="https://www.lx-blog.cn" target="_blank" rel="noopener noreferrer">流星Aday的博客</a></li>
            <li><a href="https://hq233.cn/" target="_blank" rel="noopener noreferrer">隔壁小胡的博客</a></li>
            <li><a href="https://www.citrons.cn/" target="_blank" rel="noopener noreferrer">Citrons博客</a></li>
            <li><a href="https://www.rz.sb" target="_blank" rel="noopener noreferrer">若志随笔</a></li>
            <li><a href="https://www.m78.co/" target="_blank" rel="noopener noreferrer">星云馆</a></li>
            <li><a href="https://jsun969.cn" target="_blank" rel="noopener noreferrer">螓首蛾眉</a></li>
            <li><a href="https://flypig.xyz" target="_blank" rel="noopener noreferrer">阅读・阅己</a></li>
            <li><a href="https://blog.beixibaobao.com" target="_blank" rel="noopener noreferrer">北熙宝宝</a></li>
            <li><a href="https://keymoe.com/" target="_blank" rel="noopener noreferrer">Sanakeyの小站</a></li>
            <li><a href="https://innei.ren/" target="_blank" rel="noopener noreferrer">静かな森</a></li>
            <li><a href="https://blog.meta-code.top/" target="_blank" rel="noopener noreferrer">百里飞洋の博客</a></li>
            <li><a href="https://dyfa.top" target="_blank" rel="noopener noreferrer">itsNekoDeng</a></li>
             <li><a href="https://www.miaoer.xyz/" target="_blank" rel="noopener noreferrer">喵二の小博客</a></li>

        </ul>
    </section>
    <section class="sidebar-main">
        <h3><?php _e("其它")?></h3>
        <ul>
            <li>
                <a href="<?php $this->options->siteUrl(); ?>sitemap.xml"><?php _e('网站地图'); ?></a>
            </li>
            <li>
                <a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a> 
                <!-- 文章的RSS地址连接 -->
            </li>
            <li>
                <a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a>
                <!-- 评论的RSS地址连接 -->
            </li>
        </ul>
    </section>

       
</aside>