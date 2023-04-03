<?php
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
        <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/sources/img/benefit.png'); ?>" type="image/x-icon" />
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

<!--  Main header Start  -->
<header class="main-header main-header2">
    <div class="container header-container">
        <!-- header-top -->
        <div class="header-top">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-2 col-md-2 col-sm-3 top-left">
                    <figure class="logo-box text-sm-center">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/sources/img/logo-top.png'); ?>" alt="NVISOR" />
                        </a>
                    </figure>
                </div>
               
            </div>
        </div>
    </div>
    <!--  End header-top  -->

    <!--  upper-header  -->
    <div class="upper-header upper-header1 upper-header2">
        <div class="container header-container">
            <div class="row align-items-center">
                <div class="col-lg-10 col-md-9 col-sm-8 col-6">
                    <div class="sc-main-menu d-flex align-items-center">
                        <?php 
                    wp_nav_menu( array(
                    'theme_location'  => 'main-menu',
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
                    <div class="menu-navbar area d-none">
                        <a id="canva_expander" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            ><svg width="36" height="24" viewBox="0 0 36 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="36" height="1" fill="white" />
                                <rect y="12" width="29" height="1" fill="white" />
                                <rect y="23" width="21" height="1" fill="white" /></svg></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="search-form text-end">
                        <form class="d-flex src-form" action="<?php echo esc_url(home_url('/')); ?>">
                            <input class="form-control form-background me-2" name="s" type="text" placeholder="<?php esc_attr_e( 'Search Here...', 'nvisor' )?>" id="search-box" value="<?php the_search_query(); ?>" />
                            <button class="btn" type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--  Main header End  -->