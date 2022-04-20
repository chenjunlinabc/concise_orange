<footer id="footer">
    <div class="footer-main container">
        &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>. All Rights Reserved.
        由<?php _e('<a href="https://typecho.org">Typecho</a> '); ?>强力驱动
        Theme By <?php _e('<a href="https://github.com/chenjunlinabc/concise_orange">concise_orange</a> '); ?>
    </div>
</footer>
    <script charset="utf-8" src="<?php $this->options->themeUrl('jquery.min.js'); ?>" defer="defer"></script>
    <script charset="utf-8" src="<?php $this->options->themeUrl('jquery.pjax.min.js'); ?>" defer="defer"></script>
    <script charset="utf-8" src="<?php $this->options->themeUrl('main.js'); ?>" defer="defer"></script>
    <script src="https://ssl.captcha.qq.com/TCaptcha.js"></script>

</body>
</html>