<?php
if (!is_admin())
{
	wp_enqueue_style('Metro-UI', get_template_directory_uri().'/style.less', array(), '1.0', 'screen,projection');
}