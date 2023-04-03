<?php
/*
 * Template Name: Blog Sidebar
 */
get_header('v2'); ?>

<!-- Bread Section Start -->
<?php if(!empty($nvisor_options['breadimg']['url'] )) { ?>
<section class="bread-section" style="background-image: url(<?php echo esc_url($nvisor_options['breadimg']['url']); ?>);">
<?php } else { ?>
<section class="bread-section">
<?php } ?>
    <div class="bread-content text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><?php the_title(); ?></h3>
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
<?php $args = array(    
            'paged' => $paged,
            'post_type' => 'post',
            );
        $wp_query = new WP_Query($args);
        while (have_posts()): the_post(); 

            get_template_part( 'template-parts/content', 'single' );

    endwhile; 
     
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