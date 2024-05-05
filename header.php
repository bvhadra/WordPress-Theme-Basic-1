<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="site-title"><?php bloginfo('name'); ?></div>
        <div class="site-tagline"><?php bloginfo('description'); ?></div>
    </header>

        <nav>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'primary-menu'
                ));
            ?>
        </nav>

<!--
        <div class="sidebar">
            <?php // dynamic_sidebar('blog-sidebar'); ?>
        </div>
-->
