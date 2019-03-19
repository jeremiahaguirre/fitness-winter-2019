<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes($classes)
{
	// Adds a class of group-blog to blogs with more than 1 published author.
	if (is_multi_author()) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter('body_class', 'red_starter_body_classes');

function intrafitness_shortcode_atts_wpcf7_filter($out, $pairs, $atts)
{
	$my_attr = 'selected-plan';

	if (isset($atts[$my_attr])) {
		$out[$my_attr] = $atts[$my_attr];
	}

	return $out;
}

add_filter('shortcode_atts_wpcf7', 'intrafitness_shortcode_atts_wpcf7_filter', 10, 3);

function add_to_nav($items, $args)
{
	if ($args->theme_location == 'primary') {
		$testing = '<a class="trial" href="' . get_site_url() . '/?page_id=112" >Try 7-Day <span>Free Trial</span></a>';
		$items = $testing . $items;
		$items .= '<div class="social-media">'
			. '<a href="https://www.facebook.com/intrafitness/" target="_blank"><i class="fab fa-facebook"></i></a>'
			. '<a href="https://www.instagram.com/intrafitness/" target="_blank"><i class="fab fa-instagram"></i></a>'
			. '<a href="https://twitter.com/search?q=Paul%20Wadsworth&src=typd" target="_blank"><i class="fab fa-twitter"></i></a>'
			. '</div>';
	}

	return $items;
}
add_filter('wp_nav_menu_items', 'add_to_nav', 10, 2);
