<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nvisor
 */
$nvisor_footerlink = "https://themeforest.net/user/wordpressriver/portfolio";
?>
<!-- footer-bottom -->
<div class="copy-right text-center">
    <p><?php esc_html_e('Copyright &copy;  2022. Designed by' , 'nvisor'); ?> <a href="<?php echo esc_url($nvisor_footerlink); ?>"><?php esc_html_e('WordPressRiver' , 'nvisor'); ?></a></p>
</div>
</section>
<!-- Footer Section End-->
<?php wp_footer(); ?>
</body>
</html>