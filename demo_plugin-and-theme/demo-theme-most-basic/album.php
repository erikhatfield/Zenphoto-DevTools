<?php
/** 
 * This page is almost identical to index.php. Standard theme page for sub level album list and/or the thumbnail overview of images within an album
 */
	if (!defined('WEBPATH')) die();
	
	include 'library/lolcat/head.inc';
?>
	<nav>
		<h1><?php printAlbumTitle();?></h1>
		<h2><?php printAlbumDesc(); ?></h2>
		<ul>
			<li><a href="/" title="<?php echo gettext('Albums Index'); ?>">Home</a></li>
			<li><?php printParentBreadcrumb(); ?></li>
		</ul>
	</nav>
	<section>
		<?php while (next_album()): // the loop of the sub albums within the album ?>
		<section>
			<a href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext('View album:'); ?> <?php echo getAnnotatedAlbumTitle();?>">
				<?php printAlbumThumbImage(getAnnotatedAlbumTitle()); ?>
			
				<?php printAlbumTitle(); ?>
				<?php printAlbumDate(""); ?>
			</a>
		</section>
		<section>
			<?php printAlbumDesc(); // the album description?>
		</section>
		<?php endwhile; ?>
	</section>
	<section>
		<?php while (next_image()): // the loop of the image within the album ?>
			<a href="<?php echo html_encode(getImageLinkURL());?>" title="<?php echo getBareImageTitle();?>"><?php printImageThumb(getAnnotatedImageTitle()); ?></a>

		<?php 
			endwhile; 
			printPageListWithNav("« ".gettext("prev"), gettext("next")." »"); 
			printTags('links', gettext('<strong>Tags:</strong>').' ', 'taglist', '');

		?>
	</section>
<?php
 /** 
  * foot - houses ending body,html elements.
  */
	include 'library/lolcat/foot.inc';
?>