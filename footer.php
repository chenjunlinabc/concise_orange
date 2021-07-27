<footer id="footer">
    <div class="footer-main container">
        &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
        Powered by <?php _e('<a href="https://typecho.org">Typecho</a> '); ?>
        
       <div>
            <?php _e("加载耗时") ?>
            <span><?php echo timer_stop();?></span>
            <?php _e("全站字数") ?>
            <span><?php echo allOfCharacters(); ?></span>
       </div>
    </div>
</footer>

<div style="display:none; z-index:999; background-color: #ccc; position:fixed; top:0px; width:100%; height:100vh;" class="pjax_main">
</div>
<script>
    $(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])',{
        fragment:'#body', timeout: 10000
    }); 
    $(document).on('pjax:send', function() { 
        $(".pjax_main").css("display", "block");
        // ajax触发时显示遮罩层
    });
    $(document).on('pjax:complete', function() { 
        $(".pjax_main").css("display", "none");
        // ajax加载完毕结束遮罩层
    });
</script>



<script charset="utf-8" src="<?php $this->options->themeUrl('main.js'); ?>"></script>


</body>
</html>
