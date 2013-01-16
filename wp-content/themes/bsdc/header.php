<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php
/*
 * Print the <title> tag based on what is being viewed.
 * We filter the output of wp_title() a bit -- see
 * boilerplate_filter_wp_title() in functions.php.
 */
wp_title( '|', true, 'right' );
?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
   
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <noscript>
            <link rel="stylesheet" href="<?php echo get_bloginfo( 'wpurl' ) ?>/css/noscript.css" />
        </noscript>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <!-- Favicons
        ================================================== 
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />-->
        <?php
        /* We add some JavaScript to pages with the comment form
         * to support sites with threaded comments (when in use).
         */
        if( is_singular() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );

        /* Always have wp_head() just before the closing </head>
         * tag of your theme, or you will break many plugins, which
         * generally use this hook to add elements to <head> such
         * as styles, scripts, and meta tags.
         */
        wp_head();
        ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="headWraper">
            <header class="container container-twelve">
                <div id="logo" class="five columns">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                        <img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/big-sky-dev-con.png" alt="Big Sky Dev Con" />
                    </a>
                    <span id="tagline"> <?php bloginfo( 'description' ); ?></span>
                    <a href="#" id="mobile-menu"><img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/menu-mobile.png" alt="menu-mobile" width="38" height="25" /></a>
                    <div id="mobileNav">
                        <?php wp_nav_menu( array( 'menu' => 'main nav', 'container' => false, 'theme_location' => 'primary' ) ); ?>
                    </div><!-- #mobileNav -->
                </div><!-- #logo -->
                <nav id="mainNav" class="seven columns">
                    <?php wp_nav_menu( array( 'menu' => 'main nav', 'container' => false, 'theme_location' => 'primary' ) ); ?>
                </nav><!-- .mainNav -->
            </header>
        </div><!-- #headWraper -->

