<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Botik
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function botik_body_classes($classes)
{
    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}
add_filter('body_class', 'botik_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function botik_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'botik_pingback_header');

/** Add custom class to menu li */
function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 10, 3);


add_filter('nav_menu_link_attributes', 'nav_menu_link_class', 10, 4);

function nav_menu_link_class($atts, $item, $args, $depth)
{

    $class         = 'nav-link';
    $atts['class'] = $class;

    return $atts;
}
