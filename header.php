<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="X-UA-Compatible" content="edge" />
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<title>
			<?php bloginfo('name' );
				wp_title( '|', true, 'left');
			?>
		</title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<div id="header">
		<h1><?php bloginfo('name' ); ?></h1>
	</div> 