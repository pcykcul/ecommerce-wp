<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Botik
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="<?php echo esc_url(home_url('/')); ?>" target="_blank">
                    <strong class="blue-text"><?php bloginfo('name'); ?></strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'container' => 'ul',
                            'menu_class' => 'navbar-nav mr-auto',
                            'add_li_class' => 'nav-item',
                        )
                    );
                    ?>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item nav-item-woosearch">
                            <?php echo do_shortcode('[aws_search_form]'); ?>
                        </li>
                        <li class="nav-item">
                            <?php echo botik_woocommerce_cart_link(); ?>

                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->