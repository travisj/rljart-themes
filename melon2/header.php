<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
	</script>
	<script type="text/javascript">
	_uacct = "UA-93850-3";
	urchinTracker();
	</script>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	
	<script src="http://www.rljart.com/blog/wp-content/themes/melon2/javascripts/YAHOO.js" type="text/javascript"></script>
	<script src="http://www.rljart.com/blog/wp-content/themes/melon2/javascripts/connection.js" type="text/javascript"></script>
	<script src="http://www.rljart.com/blog/wp-content/themes/melon2/javascripts/tagboard.js" type="text/javascript"></script>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link REL="SHORTCUT ICON" HREF="/rachel/favicon.ico" type="image/x-icon">

	<style type="text/css" media="screen">
	
		/* BEGIN IMAGE CSS */
			/*	To accomodate differing install paths of WordPress, images are referred only here,
				and not in the wp-layout.css file. If you prefer to use only CSS for colors and what
				not, then go right ahead and delete the following lines, and the image files. */
			
			body	 	{ background: url("<?php bloginfo('stylesheet_directory'); ?>/images/melon2bgcolor.jpg"); }	<?php /* Checks to see whether it needs a sidebar or not */ if ((! $withcomments) && (! is_single()) && (! is_page())) { ?>
			#page		{ background: url("<?php bloginfo('stylesheet_directory'); ?>/images/melon2bg.jpg") repeat-y top; border: none; } <?php } else { // No sidebar ?>
			#page		{ background: url("<?php bloginfo('stylesheet_directory'); ?>/images/melon2bgwide.jpg") repeat-y top; border: none; } <?php } ?>
			#header 	{ background: url("<?php bloginfo('stylesheet_directory'); ?>/images/melon2header.jpg") no-repeat bottom center; }
			#footer 	{ background: url("<?php bloginfo('stylesheet_directory'); ?>/images/melon2footer.jpg") no-repeat bottom; border: none;}
			
			
			/*	Because the template is slightly different, size-wise, with images, this needs to be set here
				If you don't want to use the template's images, you can also delete the following two lines. */
			
			#header 	{ margin: 0 !important; margin: 0 0 0 10px; padding: 1px; height: 145px; width: 758px; }
			#headerimg 	{ margin: 0px 0px 0 10px; height: 150px; width: 740px; } 
		/* END IMAGE CSS */
		
	
		/* 	To ease the insertion of a personal header image, I have done it in such a way,
			that you simply drop in an image called 'personalheader.jpg' into your /images/
			directory. Dimensions should be at least 760px x 200px. Anything above that will
			get cropped off of the image. */
		
		/*
		#headerimg 	{ background: url('<?php bloginfo('stylesheet_directory'); ?>/images/personalheader.jpg') no-repeat top;}
		*/

	</style>

	<?php wp_get_archives('type=monthly&format=link'); ?>

	<?php wp_head(); ?>
	

</head>
<body>

<div id="page">


<div id="header"><a href="http://www.rljart.com/blog/">
	<div id="headerimg">
<!--
		<h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
-->
	</div></a>
</div>
<hr />
