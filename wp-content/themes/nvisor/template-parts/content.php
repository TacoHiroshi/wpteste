<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nvisor
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="page-blog-box">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('nvisor-blog-standard'); ?></a>
    <h3><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <span class="text-uppercase blog-date"> By: <?php echo get_the_author_link() ?> / <?php the_time(get_option('date_format')) ?></span>
    <p>
        <?php the_excerpt(); ?>
    </p>
    <a class="readmore" href="<?php the_permalink(); ?>"
        >Read More
        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M0 4.50063C0 4.36802 0.0526784 4.24085 0.146447 4.14708C0.240215 4.05331 0.367392 4.00063 0.5 4.00063H12.293L9.146 0.854632C9.05211 0.760745 8.99937 0.633407 8.99937 0.500632C8.99937 0.367856 9.05211 0.240518 9.146 0.146631C9.23989 0.0527448 9.36722 3.1283e-09 9.5 0C9.63278 -3.1283e-09 9.76011 0.0527449 9.854 0.146631L13.854 4.14663C13.9006 4.19308 13.9375 4.24825 13.9627 4.309C13.9879 4.36974 14.0009 4.43486 14.0009 4.50063C14.0009 4.5664 13.9879 4.63152 13.9627 4.69226C13.9375 4.75301 13.9006 4.80819 13.854 4.85463L9.854 8.85463C9.76011 8.94852 9.63278 9.00126 9.5 9.00126C9.36722 9.00126 9.23989 8.94852 9.146 8.85463C9.05211 8.76075 8.99937 8.63341 8.99937 8.50063C8.99937 8.36786 9.05211 8.24052 9.146 8.14663L12.293 5.00063H0.5C0.367392 5.00063 0.240215 4.94795 0.146447 4.85419C0.0526784 4.76042 0 4.63324 0 4.50063Z"
                fill="black"
            /></svg></a>
</div>
</div>