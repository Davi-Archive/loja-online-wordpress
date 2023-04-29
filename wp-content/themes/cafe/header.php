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

<header id="header" class="tf_box pagewidth tf_clearfix" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
    <div class="header-bar tf_box">
        <div id="site-logo"><a href="https://themify.org/ultra-coffee" title="Coffee"><span>Coffee</span></a></div>
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
                    <li class="menu-item-page-60 menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-60 current_page_item menu-item-76"><a href="https://themify.org/ultra-coffee/">Home</a> </li>
                    <li class="menu-item-page-62 menu-item menu-item-type-post_type menu-item-object-page menu-item-75"><a href="https://themify.org/ultra-coffee/about/">About</a> </li>
                    <li class="menu-item-page-8 menu-item menu-item-type-post_type menu-item-object-page menu-item-74"><a href="https://themify.org/ultra-coffee/shop/">Shop</a> </li>
                    <li class="menu-item-page-61 menu-item menu-item-type-post_type menu-item-object-page menu-item-73"><a href="https://themify.org/ultra-coffee/contact/">Contact</a> </li>
                </ul>
            </nav>
        </div><a id="menu-icon-close" aria-label="Close menu" class="tf_close tf_hide" href="https://themify.org/ultra-coffee/#"><span class="screen-reader-text">Close Menu</span></a>
    </div>
    <div id="slide-cart" class="sidemenu sidemenu-off tf_scrollbar"><a href="https://themify.org/ultra-coffee/#" id="cart-icon-close" class="tf_close"><span class="screen-reader-text">Close Cart</span></a>
        <div id="shopdock-ultra">

            Your cart is empty. Go to <a href="https://themify.org/ultra-coffee/shop/">Shop</a>.

        </div>
        <!-- /#shopdock -->
    </div>
</header>