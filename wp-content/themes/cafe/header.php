<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php bloginfo('name'); ?> <?php wp_title('-') ?> <?php // the_field('title_seo')
                                                                ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?> <?php wp_title('-') ?> <?php // the_field('description_seo')
                                                                                        ?>">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title('-') ?> <?php // the_field('title_seo')
                                                                                        ?>" />
    <meta property="og:description" content="<?php bloginfo('name'); ?><?php wp_title('-') ?> <?php // the_field('description_seo')
                                                                                                ?>" />
    <meta property="og:url" content="<?php bloginfo('url') ?>" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/banner.webp" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Header Scripts Start -->
    <?php wp_head() ?>
    <!-- Header Scripts End -->
</head>


<body class="home page-template-default page page-id-60 theme-themify-ultra skin-coffee sidebar-none full_width woocommerce-js tb_animation_on ready-view header-horizontal fixed-header-enabled footer-horizontal-left tagline-off filter-hover-none filter-featured-only slide-cart sidemenu-active fixed-header-on" style="">

    <div id="pagewrap" class="tf_box hfeed site">
        <div id="headerwrap" class="tf_box tf_w fixed-header">
            <div class="header-icons tf_hide"><a id="menu-icon" class="tf_inline_b tf_text_dec" href="https://themify.org/ultra-coffee/#mobile-menu" aria-label="Menu"><span class="menu-icon-inner tf_inline_b tf_vmiddle tf_overflow"></span><span class="screen-reader-text">Menu</span></a>
                <div class="cart-icon empty-cart">
                    <div class="cart-wrap">
                        <a class="cart-icon-link" href="https://themify.org/ultra-coffee/#slide-cart">
                            <em class="icon-shopping-cart">
                                <svg aria-label="Shop Cart" class="tf_fa tf-fas-shopping-cart" role="img">
                                    <use href="#tf-fas-shopping-cart">
                                    </use>
                                </svg>
                            </em>

                            <em class="screen-reader-text">Cart</em></a>
                    </div>
                </div>
            </div>


            <header id="header" class="tf_box pagewidth tf_clearfix" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
                <div class="header-bar tf_box">
                    <div id="site-logo"><a href="/" title="Coffee"><span>Coffee</span></a></div>
                </div>
                <div id="mobile-menu" class="sidemenu sidemenu-off tf_scrollbar">
                    <div class="navbar-wrapper tf_clearfix">
                        <div class="cart-icon empty-cart">
                            <div class="cart-wrap"><a class="cart-icon-link" href="https://themify.org/ultra-coffee/#slide-cart"><em class="icon-shopping-cart"><svg aria-label="Shop Cart" class="tf_fa tf-fas-shopping-cart" role="img">
                                            <use href="#tf-fas-shopping-cart"></use>
                                        </svg></em><span></span><em class="screen-reader-text">Cart</em></a></div>
                        </div>
                        <div class="social-widget tf_inline_b tf_vmiddle"> </div><a class="search-button tf_search_icon tf_vmiddle tf_inline_b" href="https://themify.org/ultra-coffee/#"><svg aria-label="Search" class="tf_fa tf-fas-search" role="img">
                                <use href="#tf-fas-search"></use>
                            </svg><span class="screen-reader-text">Search</span></a>
                        <nav id="main-nav-wrap" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
                            <ul id="main-nav" class="main-nav tf_clearfix tf_box" data-init="true">
                                    <?php
                                    $args = array(
                                        'menu' => 'principal',
                                        'theme_location' => 'menu_principal',
                                        'container' => false
                                    );
                                    wp_nav_menu($args);
                                    ?>
                            </ul>
                            <form role="search" method="get" id="searchform" class="" action="<?php bloginfo('url') ?>/" method="get">
                                <input type="text" name="s" id="s" title="Search" placeholder="Buscar" value="<?php the_search_query(); ?>">
                            </form>
                        </nav>
                    </div>
                    <div id="slide-cart" class="sidemenu sidemenu-off tf_scrollbar"><a href="https://themify.org/ultra-coffee/#" id="cart-icon-close" class="tf_close"><span class="screen-reader-text">Close Cart</span></a>
                        <div id="shopdock-ultra">

                            Your cart is empty. Go to <a href="https://themify.org/ultra-coffee/shop/">Shop</a>.

                        </div>
                    </div>
            </header>

        </div>