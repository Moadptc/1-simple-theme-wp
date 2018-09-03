<?php

require 'class/WordpressUikitMenuWalker.php';

function my_setup_theme()
{
	// Featured image support
	add_theme_support('post-thumbnails');

	// Menus
	register_nav_menus(array(
		'primary' => __('Primary Menu')
	));
}
add_action('after_setup_theme','my_setup_theme');


function my_excerpt_length()
{
	// limit of words in a post
	return 25;
}
add_filter('excerpt_length','my_excerpt_length');


