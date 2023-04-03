<?php
global $nvisor_options;
/**
 * Header file for the nvisor WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nvisor
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <!-- Author Name Meta Tag -->
        <meta name="author" content="iqbalhossan99" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Template Name Meta Tag -->
        <meta name="description" content="Example - HTML Template" />
        <!-- Keywoords Meta Tag -->
        <meta name="keywords" content="business agency, corporate agency" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo esc_url($nvisor_options['logo']['url']); ?>" type="image/x-icon" />
        <!-- CSS Start -->
       
    </head>
<?php wp_head(); ?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- page preloader -->
        <div id="loading-area">
            <div class="loader-col">
                <div class="loader" id="loader"></div>
            </div>
        </div>
        <!-- end loading -->

<!--Sc Offcanvas Area Start-->
<div id="sc-overlay-bg2" class="sc-overlay-bg2"></div>
<div class="sc-product-offcanvas-area">
<div class="sc-offcanvas-header d-flex align-items-center justify-content-between">
    <div class="sticky-logo logo-area text-center">
        <a href="index.html"><img src="<?php echo esc_url($nvisor_options['logo']['url']); ?>" alt="Logo" /></a>
    </div>
    <div class="offcanvas-icon">
        <a id="canva_close" href="#"><i class="fas fa-times"></i></a>
    </div>
</div>

<!-- Canvas Mobile Menu start -->
<?php 
    wp_nav_menu( array(
    'theme_location'  => 'main-menu',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'nav',
    'container_class' => 'right_menu_togle mobile-navbar-menu',
    'container_id' => 'mobile-navbar-menu',
    'menu_class'      => 'nav-menu',
    ) );
?>
</div>
<!--Sc Offcanvas Area End-->

<!--Sc Offcanvas Two Area Start-->
<div id="sc-overlay-bg2" class="sc-overlay-bg2"></div>
<div class="sc-product-offcanvas-area2 nvisor-info">
    <div class="sc-offcanvas-header d-flex align-items-center justify-content-between">
        <div class="sticky-logo logo-area text-center">
            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($nvisor_options['sticky-logo']['url']); ?>" alt="Logo"></a>
        </div>
        <div class="offcanvas-icon">
            <a id="canva_close2" href="#"><i class="fas fa-times"></i></a>
        </div>
    </div>
        <div class="widget">
            <p>
                <?php echo esc_html($nvisor_options['canvas_des']); ?>
            </p>
        </div>
        <div class="widget address">
            <div>
                <ul>
                    <li>
                        <div class="content">
                            <p><?php echo esc_html($nvisor_options['canvas_title1']); ?></p> 
                            <strong><?php echo esc_html($nvisor_options['canvas_text1']); ?></strong>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <p><?php echo esc_html($nvisor_options['canvas_title2']); ?></p> 
                            <strong><?php echo esc_html($nvisor_options['canvas_text2']); ?></strong>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                             <p><?php echo esc_html($nvisor_options['canvas_title3']); ?></p> 
                            <strong><?php echo esc_html($nvisor_options['canvas_text3']); ?></strong>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-top">
       <ul class="social-links">
                    <li>
                        <a href="<?php echo esc_url($nvisor_options['sl1']); ?>"><i class="<?php echo esc_attr($nvisor_options['sicon1']); ?>"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url($nvisor_options['sl2']); ?>"><i class="<?php echo esc_attr($nvisor_options['sicon2']); ?>"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url($nvisor_options['sl3']); ?>"><i class="<?php echo esc_attr($nvisor_options['sicon3']); ?>"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url($nvisor_options['sl4']); ?>"><i class="<?php echo esc_attr($nvisor_options['sicon4']); ?>"></i></a>
                    </li>
                </ul>
            </div>
   
</div>
<!--Sc Offcanvas Two Area End-->


<!-- Main header Start -->
<header class="main-header main-header-two" id="sc-header-sticky">
    <!--  upper-header  -->
    <div class="upper-header style-two">
        <div class="header-inner-area">

            <div class="sc-canvas-inner">
                <div class="menu-navbar area">
                    <a id="canva_expander2" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                        <svg width="36" height="24" viewBox="0 0 36 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="36" height="1" fill="white" />
                            <rect y="12" width="29" height="1" fill="white" />
                            <rect y="23" width="21" height="1" fill="white" /></svg>
                    </a>
                </div>
            </div>

            <div class="menu-navbar area d-none">
                <a id="canva_expander" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    ><svg width="36" height="24" viewBox="0 0 36 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="36" height="1" fill="white" />
                        <rect y="12" width="29" height="1" fill="white" />
                        <rect y="23" width="21" height="1" fill="white" /></svg></a>
            </div>

            <div class="sc-menu-inner">
                <div class="sc-main-menu d-flex justify-content-center">
                    <div class="main-menu-list">
                        <?php 
            wp_nav_menu( array(
            'theme_location'  => 'main-menu-left',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'main-menu-list',
            'menu_class'      => 'main-menu',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'items_wrap'      => '<ul data-in="#" data-out="#" class="%2$s" id="%1$s">%3$s</ul>',
            'walker'          => new Nvisor_Bootstrap_Navwalker(),
            ) );
        ?>
                    </div>
                    <div class="menu-img">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/sources/img/white-log.png'); ?>" alt="Logo" /></a>
                    </div>
                    <div class="sc-main-menu">
                        <div class="main-menu-list">
                            <?php 
            wp_nav_menu( array(
            'theme_location'  => 'main-menu-right',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'main-menu-list',
            'menu_class'      => 'main-menu',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'items_wrap'      => '<ul data-in="#" data-out="#" class="%2$s" id="%1$s">%3$s</ul>',
            'walker'          => new Nvisor_Bootstrap_Navwalker(),
            ) );
        ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sc-search-inner">
                <div class="search-form sc-header-content-box d-flex align-content-center justify-content-end">
                    <div class="sc-header-content d-flex align-items-center">
                        <div class="sc-icon">
                            <img class="phone-img2" src="<?php echo esc_url($nvisor_options['headerv1_icon']['url']); ?>" alt="phone-img1">
                        </div>
                        <div class="contact">
                            <ul>
                                <li><a class="test-uppercase"><?php echo esc_html($nvisor_options['headerv1_title']); ?></a></li>
                                <li><a href="tel:<?php echo rawurlencode($nvisor_options['headerv1_text']); ?>"><?php echo esc_html($nvisor_options['headerv1_text']); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main header End -->