<?php
 /** 
  * The gallery index (home page) of a theme. Usually prints the top level albums
  */
	if (!defined('WEBPATH')) die();
	
	include 'library/lolcat/head.inc';
?>

	<h1><?php printGalleryDesc(); // the main gallery description ?></h1>
	<?php while (next_album()): // the loop of the top level albums ?>
	<section>
		<a href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext('View album:'); ?> <?php echo getAnnotatedAlbumTitle();?>">
			<figure>
				<?php printAlbumThumbImage(getAnnotatedAlbumTitle()); ?>
				<figcaption>
					<h2><?php printAlbumTitle(); ?></h2>
					<time><?php printAlbumDate(""); ?></time>
					<h3><?php printAlbumDesc(); ?></h3>
				</figcaption>
			</figure>
		</a>
	</section>
	<?php endwhile; ?>
<?php
 /** 
  * foot - houses ending body,html elements.
  */
	include 'library/lolcat/foot.inc';
?>