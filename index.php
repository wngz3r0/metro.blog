<?php
/**
 * @package WordPress
 * @subpackage metro
 */

get_header(); ?>
<script type="text/javascript" src="<?php print_template_file("mainpage.js")?>"></script>

<?php if ( have_posts() ) : ?>
	<div id="canvas-div">
		<canvas id="article-selector"></canvas>
	</div>
<?php endif; ?>
<?php get_footer(); ?>