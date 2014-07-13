<!DOCTYPE html>
<html class="no-js">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="<?php echo LOCAL_CHARSET; ?>">
	<?php /*
	<?php zp_apply_filter('theme_head'); ?>
	<?php printHeadTitle(); ?>
	*/ ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/library/css/master.css" type="text/css" />
	<script src="<?php echo $_zp_themeroot; ?>/library/js/vendor/modernizr-2.8.0.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<?php /*zp_apply_filter('theme_body_open');*/ ?>
<header>
	<a href="/" id="logo"><?php printGalleryTitle(); ?></a>


</header>
<div id="main"><?php /* closing div for #main in foot.inc */ ?>