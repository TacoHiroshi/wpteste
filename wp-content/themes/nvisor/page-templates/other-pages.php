<?php
global $nvisor_options;
/*
 * Template Name: Other Pages
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
                    <span><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e( 'Home', 'nvisor' )?></a> <?php the_title(); ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>
<!-- Bread Section End -->

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
  the_content(); // displays whatever you wrote in the wordpress editor
  endwhile; endif; //ends the loop
 ?>

<?php get_footer('v2'); ?>