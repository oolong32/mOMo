<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	
	<!-- less/css -->
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/styles.less">
	<script src="<?php bloginfo('stylesheet_directory'); ?>/less/less.js" type="text/javascript"></script>
	
	<!-- <style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style> -->
	
	<!-- Lightbox Javascript -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lightbox/js/prototype.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lightbox/js/scriptaculous.js?load=effects,builder"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lightbox/js/lightbox.js"></script>
	
	<!-- Lightbox CSS -->	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/lightbox/css/lightbox.css" type="text/css" media="screen" />
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	
	<link rel="Shortcut Icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico?v=2" type="image/x-icon" />	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
</head>

<body>
	<div id="rap">	
		<div id="header">
			<a href="<?php bloginfo('url'); ?>/">
				<!-- <img id="himage" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_140.png" /> motoguzzi-logo-->
				<h1><h1>m<span class="om-sign">&#x950;</span>o</h1><!-- <?php bloginfo('name'); ?> --></h1>
			</a>
		</div>
		<!-- end header -->
		<?php get_sidebar(); ?>
		<div id="content">