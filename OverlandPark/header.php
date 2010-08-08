<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title><?php wp_title('//', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.3.1/build/reset-fonts-grids/reset-fonts-grids.css">

	<script type="text/javascript" src="http://yui.yahooapis.com/2.3.1/build/yahoo/yahoo-min.js" ></script>
	<script type="text/javascript" src="http://yui.yahooapis.com/2.3.1/build/event/event-min.js" ></script>
	<script type="text/javascript" src="http://yui.yahooapis.com/2.3.1/build/dom/dom-min.js" ></script>
	
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<style>
		body {
			background: url(<?php bloginfo('stylesheet_directory'); ?>/images/grid.gif);
		}

		#bd {
			background: url(<?php bloginfo('stylesheet_directory'); ?>/images/bg.png)
		}
	</style>
	<script>
		YAHOO.util.Event.addListener('cat', "change", (function(){document.location.href="http://www.rljart.com/blog/?cat=" + YAHOO.util.Dom.get('cat').value;})); 
	</script>
   <?php wp_get_archives('type=monthly&format=link'); ?>

</head>
<body>
	<div id="doc4" style="width:994px;">
	   	<div id="hd">
			<a href="http://www.rljart.com/blog/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/july10banner.png" /></a>
		</div>
