<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div id="page">
        <a href="#content" class="skip-link screen-reader-text">
            <?php esc_html_e('Skip to content', 'yussifweb'); ?>
        </a>

        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding">
                <p class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php bloginfo('name'); ?>
                    </a>
                </p>
                <p class="site-description">
                    <?php bloginfo('description'); ?>
                </p>
            </div>
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php
                $args = [
                    'theme_location' => 'main-menu'
                ];
                wp_nav_menu($args);
                ?>
            </nav>
        </header>

        <div id="content" class="site-content">
        