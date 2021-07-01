<?php if(!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php function threadedComments($comments, $options) {
    // 判断是否是作者还是访客
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
 
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
<!--自定义评论代码结构-->
<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php 
    if ($comments->levels > 0) {
        echo ' comment-child';
        $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
    } else {
        echo ' comment-parent';
    }
    $comments->alt(' comment-odd', ' comment-even');
    echo $commentClass;
    ?>">
    <div id="<?php $comments->theId(); ?>" class="<?php echo $commentLevelClass; ?>">
        <div class="comment-author">
            <!--评论头像-->
            <?php
            if(preg_match('/\d{4,13}(@qq.com)/', strtolower($comments -> mail))){
                preg_match('/\d+/', strtolower($comments -> mail), $mail_check);
                echo '<img class="avatar" src="https://q1.qlogo.cn/g?b=qq&nk=' . $mail_check[0] . '&s=100" alt="这本来是一个头像，当你在页面看到这个说明该头像炸了"/>';
            }
            else{
                $comments -> gravatar('32');
            }
            ?>
        </div>
        <div class="comment-meta">
            <span class="fn">
                <?php $comments->author(); ?> <!--评论名称-->
            </span>
            <a href="<?php $comments->permalink(); ?>"><?php $comments->date('Y年m月d日'); ?></a> <!--评论时间-->

            
        </div>
        
        
    </div>
    <div class="comments-main">
        <?php $comments->content(); ?> <!--评论内容-->
    </div>
    
    <?php if ($comments->children) { ?>
        <div class="comment-children">
            <?php $comments->threadedComments($options); ?>
        </div>
    <?php } ?>
</li>
<?php } ?>





<?php if($this->user->hasLogin()):?>

<div class="post-mains">
    <div class="form-comments">
        <!--评论表单-->
        <!--检查能否进行评论-->
        <div id="<?php $this->respondId(); ?>" class="respond">
            <h3 id="response"><?php _e('添加新评论'); ?></h3>
            <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form">
                <!-- 若当前用户已经登录 -->
                <span>
                    <textarea rows="3" name="text" id="textarea" class="textarea" placeholder="<?php _e('内容'); ?>" required ><?php $this->remember('text'); ?></textarea>
                    <button type="submit" class="submit form-submit"><?php _e('提交评论'); ?></button>
                </span>
                <?php $security = $this->widget('Widget_Security'); ?>
                <input type="hidden" name="_" value="<?php echo $security->getToken($this->request->getReferer())?>">
                <?php if($this->user->hasLogin()): ?>
                <!-- 显示当前登录用户的用户名以及登出连接 -->
                <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?></a></p>
                <!-- 输入要回复的内容 -->
             </form>
        </div>

        <?php endif; ?>
        
        
    </div>
</div>
 <?php endif; ?>
 
 <div class="post-mains">
     <div class="post-comments">
            <!--输出评论-->
            <?php $this->comments()->to($comments); ?>
            <?php if ($comments->have()): ?>
            <?php $comments->listComments(); ?>
            <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
            <?php endif; ?>
        </div>
     
     
     
 </div>
         
 
</div>