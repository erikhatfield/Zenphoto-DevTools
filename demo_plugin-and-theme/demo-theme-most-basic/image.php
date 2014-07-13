<?php
/** 
 * Theme standard page for the single (sized) image
 */
	if (!defined('WEBPATH')) die();

	include 'library/lolcat/head.inc';
?>
	<nav>
		<ul>
			<li><a href="/" title="<?php echo gettext('Albums Index'); ?>">Home</a></li>
			<li><?php printParentBreadcrumb("", " | ", " | "); ?></li>
			<li><?php printAlbumBreadcrumb("", " | "); ?></li>
			<li><?php printImageTitle(true); ?></li>
		</ul>
		
		<?php if (hasPrevImage()) { ?>
			<a href="<?php echo html_encode(getPrevImageURL());?>" title="<?php echo gettext("Previous Image"); ?>"><?php echo gettext("prev"); ?></a>
		<?php } if (hasNextImage()) { ?>
			<a href="<?php echo html_encode(getNextImageURL());?>" title="<?php echo gettext("Next Image"); ?>"><?php echo gettext("next"); ?></a>
		<?php } ?>
		
	</nav>
	
	
	
	<section>
		<a href="<?php echo html_encode(getFullImageURL());?>" title="<?php echo getBareImageTitle();?>">
			<figure><?php printDefaultSizedImage(getImageTitle()); // the single sizeed image ?>
				<figcaption><h1><?php printImageTitle(true); ?></h1></figcaption>
			</figure>
		</a>
	</section>
	<section>
		<?php 
			printImageDesc(); // the image description 
			if (getImageMetaData()) {
				printImageMetadata('', false); // the image meta data like Exif
			}
			printTags('links', gettext('<strong>Tags:</strong>').' ', 'taglist', '');

		?>
	</section>
<?php
 /** 
  * foot - houses ending body,html elements.
  */
	include 'library/lolcat/foot.inc';
?>