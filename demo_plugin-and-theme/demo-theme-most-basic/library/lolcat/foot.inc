</div><?php /*	END DIV#main
				opening div for #main in head.inc */ ?>
<footer>
<?php /*
		<?php printZenphotoLink(); ?>
		<?php zp_apply_filter('theme_body_close'); ?>
*/ ?>
</footer>
<script src="<?php echo $_zp_themeroot; ?>/library/js/vendor/jquery-1.11.1.min.js"></script>
<script src="<?php echo $_zp_themeroot; ?>/library/js/plugins.js"></script>
<script src="<?php echo $_zp_themeroot; ?>/library/js/main.js"></script>
<aside id="search">
	<?php
		if (getOption('Allow_search')) {
			printSearchForm("","search","",gettext("Search gallery"));
		}
	?>
</aside>
</body>
</html>