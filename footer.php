<footer id="footer">
    <div class="footer-main container">
        &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
        Powered by <?php _e('<a href="https://typecho.org">Typecho</a> '); ?>
        主题:<?php _e('<a href="https://github.com/chenjunlinabc/concise_orange">concise_orange</a> '); ?>
       <div>
            <?php _e("加载耗时") ?>
            <span><?php echo timer_stop();?></span>
            <?php _e("全站字数") ?>
            <span><?php echo allOfCharacters(); ?></span>
       </div>
    </div>
</footer>
    <script charset="utf-8" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js" defer="defer"></script>
    <script charset="utf-8" src="https://cdn.jsdelivr.net/npm/jquery-pjax@2.0.1/jquery.pjax.min.js" defer="defer"></script>
    <script charset="utf-8" src="<?php $this->options->themeUrl('main.js'); ?>" defer="defer"></script>

</body>
</html>
