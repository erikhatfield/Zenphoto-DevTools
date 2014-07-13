<?php
/** 
 * If your theme contains this script it will be invoked whenever a page not found condition is raised by Zenphoto. 
 * Creating a script of this name allows you to control the presentaton of the page not found error. 
 */
if (!defined('WEBPATH')) die();

	include 'library/lolcat/head.inc';
?>
		<a href="<?php echo getGalleryIndexURL(); ?>">Index</a> » <?php echo gettext("Object not found"); ?>
	  <?php print404status(isset($album) ? $album : NULL, isset($image) ? $image : NULL, $obj); ?>
<?php
 /** 
  * foot - houses ending body,html elements.
  */
	include 'library/lolcat/foot.inc';
?>