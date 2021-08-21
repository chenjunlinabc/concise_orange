<?php 
/**
* 链接
*
* @package custom
*/

if(!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
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
                <!--输出文章内容-->
                
                <div class="post-article">
                    <p class="article-main">
                        <?php $this->content(); ?>
                    </p>
                </div>
                
                <br>
                
                <!--输出链接-->
                <div class="post-data">
                    <ul class="links">
                        <li><a href="https://paugram.com/" target="_blank" rel="noopener noreferrer">保罗的小宇宙</a></li>
                        <li><a href="https://linxuan.fun" target="_blank" rel="noopener noreferrer">临轩</a></li>
                        <li><a href="https://yujienb.cn/" target="_blank" rel="noopener noreferrer">狱杰的博客</a></li>
                        <li><a href="https://www.kiwiape.cn/" target="_blank" rel="noopener noreferrer">猕猴の那年记忆</a></li>
                        <li><a href="https://ghser.com" target="_blank" rel="noopener noreferrer">一叶三秋</a></li>
                        <li><a href="https://www.acg19.top" target="_blank"rel="noopener noreferrer">新漫猫</a></li>
                        <li><a href="https://www.timochan.cn" target="_blank" rel="noopener noreferrer">提莫酱的博客</a></li>
                        <li><a href="https://zshmvp.com" target="_blank" rel="noopener noreferrer">zshMVP</a></li>
                        <li><a href=" https://www.abcio.cn/" target="_blank" rel="noopener noreferrer">清墨的橘</a></li>
                        <li><a href="https://www.lx-blog.cn" target="_blank" rel="noopener noreferrer">流星Aday的博客</a></li>
                        <li><a href="https://hq233.cn/" target="_blank" rel="noopener noreferrer">隔壁小胡的博客</a></li>
                        <li><a href="https://www.citrons.cn/" target="_blank" rel="noopener noreferrer">Citrons博客</a></li>
                        <li><a href="https://www.rz.sb" target="_blank" rel="noopener noreferrer">若志随笔</a></li>
                        <li><a href="https://www.m78.co/" target="_blank" rel="noopener noreferrer">星云馆</a></li>
                        <li><a href="https://jsun969.cn" target="_blank" rel="noopener noreferrer">螓首蛾眉</a></li>
                        <li><a href="https://flypig.xyz" target="_blank" rel="noopener noreferrer">阅读・阅己</a></li>
                        <li><a href="https://keymoe.com/" target="_blank" rel="noopener noreferrer">Sanakeyの小站</a></li>
                    </ul>
                    
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




















<script>
(function(){
    let a =document.getElementById("flinks");
    if(a){
        let ns = a.querySelectorAll("li");
        let nsl = ns.length;
        let str ='<div class="post-lists"><div class="post-lists-body" id ="flinksH">';
        let bgid = 0;
        const bgs =["bg-white","bg-grey","bg-deepgrey","bg-blue","bg-purple","bg-green","bg-yellow","bg-red","bg-orange"];
        for(let i = 0;i<=nsl-4;i+=4){
           bgid = Math.floor(Math.random() * 9);
            str += (`<div class="post-list-item"><div class="post-list-item-container "><div class="item-label ${bgs[bgid]}"><div class="item-title"><a href="${ns[i+1].innerText}">${ns[i].innerText}</a></div><div class="item-meta clearfix"><div class="item-meta-ico bg-ico-book"style="background: url(${ns[i+2].innerText}) no-repeat;background-size: 40px auto;"></div><div class="item-meta-date">${ns[i+3].innerText}</div></div></div></div></div>`);
        }
        str+='</div></div><style>.post-list-item{width: 50%;min-width: 300px;}</style>';
        let n1 = document.createElement("div");
        n1.innerHTML = str;
        a.parentNode.insertBefore(n1,a);
        a.style="display: none;";
    }else{
        console.log('No such id "flinksH"');
    }
}())
 </script>
