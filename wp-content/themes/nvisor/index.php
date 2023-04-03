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
                    <h3><?php esc_html_e('Blog','nvisor' ); ?></h3>
                    <span><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e( 'Home', 'nvisor' )?></a> <?php esc_html_e( 'Blog', 'nvisor' )?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>
<!-- Bread Section End -->

<!-- Page Section Start -->
<section class="page-blog-section">
    <div class="container">
        <div class="row">
            <?php if ( is_active_sidebar( 'main-sidebar' ) ) : { ?>
            <div class="col-lg-8">
                <?php } else : ?>
                <div class="col-lg-12">
                <?php endif; ?>
                <div class="blog-page-content-area">

                    <?php 
                        if ( have_posts() ) : 
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', 'single' );

                        endwhile; 
                        endif; 
                    ?>
                  
                    <div class="blog-navigation d-flex align-items-center">
                        <div class="navigation-list">
                            <?php echo nvisor_pagination(); ?>
                        </div>
                    </div>

                </div>
            </div>

            <?php if ( is_active_sidebar( 'main-sidebar' ) ) : { ?>
            <div class="col-lg-4">
                <div class="page-blog-wrapper">
                    <?php get_sidebar(); ?>
                </div>
            </div>
            <?php } else : ?>
        <?php endif; ?>
        </div>
    </div>
</section>
<!-- Page Section End -->

<?php get_footer(); ?>