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
    function getBaseUrl() {
		let ishttps = 'https:' == document.location.protocol ? true : false;
		let url = window.location.host;
		if (ishttps) {
			url = 'https://' + url;
		} else {
			url = 'http://' + url;
		}
		return url;
	}
	let url = '"' + getBaseUrl() + '"';
	$(document).pjax('a[href^=' + url + ']:not(a[target="_blank"], a[no-pjax])', {
		container: '.ajaxdata',
		fragment: '.ajaxdata',
		timeout: 8000
	})
	$(document).on('pjax:start', function () { 
		$(".nav-menu").css("display","none");

	});

	$(document).on('pjax:end', function () { 

	
	});
</script>


<script charset="utf-8" src="<?php $this->options->themeUrl('main.js'); ?>"></script>


</body>
</html>
