<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nvisor
 */

?>


<a href="blog-details.html"><?php the_post_thumbnail('nvisor-blog-standard'); ?></a>
<span class="date1 text-uppercase"> By: <?php echo get_the_author_link() ?> / <?php the_time(get_option('date_format')) ?></span>
<p class="blog-des">
    <?php the_content(); ?>
</p>
<?php wp_link_pages(); ?>
<?php if(has_tag()) { ?>
<!-- Start Post Tags-->
<div class="footer-entry">
    <div class="tags">
        <h4><?php echo esc_html__( 'Tags', 'nvisor' ); ?></h4>
        <?php the_tags('','',''); ?>
    </div>
</div>
<!-- End Post Tags -->
<?php } ?>


<div class="details-reviews-box d-flex align-items-center justify-content-between">
    <?php if (empty(get_adjacent_post(false,'',true)->ID)) {} else { ?>
    <div class="reviews-left-content">
        <a class="post" href="<?php echo get_permalink( get_adjacent_post(false,'',true)->ID ); ?>"><span class="text-uppercase"> <?php echo esc_html__( 'Previous post', 'nvisor' ); ?></span></a>
        <h5 class="post-title"><?php echo get_the_title( get_adjacent_post(false,'',true)->ID ); ?></h5>
    </div>
    <?php } ?>
    <?php if (empty(get_adjacent_post(false,'',false)->ID)) {} else { ?>
    <div class="reviews-left-content text-end">
        <a class="post" href="<?php echo get_permalink( get_adjacent_post(false,'',false)->ID );  ?>"><span class="text-uppercase"> <?php echo esc_html__( 'Next Post', 'nvisor' ); ?></span></a>
        <h5 class="post-title"><?php echo get_the_title( get_adjacent_post(false,'',false)->ID ); ?></h5>
    </div>
    <?php } ?>
</div>

