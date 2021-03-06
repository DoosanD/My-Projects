<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Movers_Development
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
        <header id="masthead" class="site-header">
            <div class="container section-container">
                <div class="before-header">
                    <a href="https://testcrosscountrymovers.moverdev.com/free-estimate/">Free Estimate<img src="/wp-content/uploads/2022/07/read-more-arrow-1.svg" alt="check mark" /></a>
                </div>
                <div class="header-content">

                    <div class="site-branding">
                        <?php the_custom_logo(); ?>
                    </div><!-- .site-branding -->

                    <nav id="site-navigation" class="md-navigation navbar-default navbar">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed md-x-collapse" data-toggle="collapse" data-target="#md-collapse-menu">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="md-collapse-menu">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                            ));
                            ?>
                        </div>
                    </nav><!-- #site-navigation -->
                </div>
            </div>
        </header><!-- #masthead -->