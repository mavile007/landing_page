<!DOCTYPE html>
<html>
<head>

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<!-- podklucheniye CTYLE.CSS -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!-- -->
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- podklucheniye bootstrap -->
	
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<!-- Podklucheniye biblioteki jquery -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<!-- -->
	
	<?php wp_head(); ?>
</head>
<body>
<div id="header">
</div>
<div id="content">
</div>
<div id="footer">
</div>
</body>