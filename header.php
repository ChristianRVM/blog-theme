<!DOCTYPE html>
<html class="no-js" <?php get_language_attributes();?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
    <?php wp_site_icon(); ?>

</head>
<body id="top">
    <section class="s-pageheader ">
        <header class="header">
            <div class="header__content row">
                <div class="header__logo">
                    <a class="logo" href="<?php echo esc_url(home_url( '/' ));?>">
                        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
                        <img src="<?php echo $image[0]; ?>" alt="Homepage">
                    </a>
                </div>
                <!--   
                <ul class="header__social">
                    <li>
                        <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </li>
                </ul> -->
                <a class="header__search-trigger" href="#"></a>
                <div class="header__search">
                    <form role="search" method="get" class="header__search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
                        <label>
                            <span class="hide-content">Buscar:</span>
                            <input type="search" class="search-field" placeholder="Buscar" value="" name="s"
                                title="Buscar por:" autocomplete="off">
                        </label>
                        <input type="submit" class="search-submit" value="Buscar">
                    </form>
                    <a href="#" title="Cerrar" class="header__overlay-close">Close</a>
                </div> <!-- end header__search -->
                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
                <nav class="header__nav-wrap">
                <?php
                    wp_nav_menu( array(
                    'theme_location'    => 'menu-principal',
                    'depth'             => 2,
                    'container'         => 'ul',
                    'container_class'   => 'header__nav',
                    'container_id'      => '',
                    'menu_class'        => 'header__nav',
                    'fallback_cb'       => '',
                    'walker'            => '',
                    ));
                ?> 
                <a href="#" title="Close Menu" class="header__overlay-close close-mobile-menu">Cerrar</a>
                </nav> <!-- end header__nav-wrap -->
            </div> <!-- header-content -->
        </header> <!-- header -->
    </section> <!-- end s-pageheader -->