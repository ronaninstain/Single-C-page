<?php
add_action('wp_enqueue_scripts', 'wplms_child_theme_enqueue_styles');
function wplms_child_theme_enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}


function e_learning_solution_child_enqueue_styles()
{
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('single', get_theme_file_uri('/css/single-course.css'), false, time(), 'all');
}
add_action('wp_enqueue_scripts', 'e_learning_solution_child_enqueue_styles');
