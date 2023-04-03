<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nvisor
 */

if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
    get_header('v2');
}
else {
    get_header();
}
?>

<!-- Bread Section Start -->
<section class="bread-section">
    <div class="bread-content text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><?php esc_html_e('Error Page','nvisor' ); ?></h3>
                    <span><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e( 'Home', 'nvisor' )?></a> <?php esc_html_e( '404 Error', 'nvisor' )?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>
<!-- Bread Section End -->

 <!-- Start 404 
    ============================================= -->
    <div class="error-page-area relative text-center">
        <div class="container">
            <div class="error-box default-padding">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1><?php esc_html_e( '404', 'nvisor' )?></h1>
                    <h2><?php esc_html_e( 'SORRY PAGE WAS NOT FOUND!', 'nvisor' )?></h2>
                        <div class="sidebar-item search four-search">
<div class="sidebar-info">
    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input type='search' name="s" placeholder="<?php esc_attr_e( 'Search Here...', 'nvisor' )?>" class="form-control" id="search-box" value="<?php the_search_query(); ?>" >
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
</div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 -->

<?php get_footer(); ?>