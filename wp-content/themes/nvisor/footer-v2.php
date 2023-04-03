<?php
global $nvisor_options;
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nvisor
 */
?>

<!--  Footer Section Start  -->
<footer class="footer-section footer-section-two">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget logo-widget">
                        <figure class="footer-logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($nvisor_options['footerlogo']['url']); ?>" title="footer-logo-two" alt="footer-logo-two" /></a>
                        </figure>
                        <h3 class="text-uppercase"><?php echo esc_html($nvisor_options['footerlogo_title']); ?></h3>
                        <div class="text">
                            <p>
                               <?php echo sprintf($nvisor_options['footerdes']); ?>
                            </p>
                        </div>
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
                <div class="col-lg-4 mt-sm-5 mt-esm-5">
                    <div class="footer-widget links-widget">
                        <div class="row">
                            <div class="col-lg-6 col-lg-4">
                                <div class="widget-title">
                                    <h3><?php echo esc_html($nvisor_options['footermenu1']); ?></h3>
                                </div>
                                <div class="widget-content">
                                    <?php 
                                wp_nav_menu( array(
                                'theme_location'  => 'footer-menu1',
                                ) );
                            ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-lg-4">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                    <h3><?php echo esc_html($nvisor_options['footermenu2']); ?></h3>
                                </div>
                                    <div class="widget-content">
                                        <?php 
                                wp_nav_menu( array(
                                'theme_location'  => 'footer-menu2',
                                ) );
                            ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-5 mt-esm-5">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3><?php echo esc_html($nvisor_options['contactinfo1']); ?></h3>
                        </div>
                        <div class="widget-content">
                            <ul class="contact-widget">
                                <li><i class="<?php echo esc_attr($nvisor_options['footericon1']); ?>"></i><a><?php echo esc_html($nvisor_options['footertext1']); ?></a></li>
                                <li><i class="<?php echo esc_attr($nvisor_options['footericon2']); ?>"></i><a class="border-bottom" href="tel:<?php echo rawurlencode($nvisor_options['footertext2']); ?>"><?php echo esc_html($nvisor_options['footertext2']); ?></a></li>
                                <li><i class="<?php echo esc_attr($nvisor_options['footericon3']); ?>"></i><a class="border-bottom" href="mailto:<?php echo rawurlencode($nvisor_options['footertext3']); ?>"><?php echo esc_html($nvisor_options['footertext3']); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer-bottom -->
    <div class="footer-bottom">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-bottom-right text-center">
                    <ul>
                        <?php 
                                wp_nav_menu( array(
                                'theme_location'  => 'footer-menu',
                                ) );
                            ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right padding-bottom-c text-center">
        <p><?php echo sprintf($nvisor_options['copyright']); ?></p>
    </div>
</footer>
<!--Sc footer Section End-->

<!-- start scrollUp  -->
<div id="scrollUp">
    <div class="scrollUp-icon">
        <i class="fas fa-arrow-up"></i>
    </div>
</div>
<!-- End scrollUp  -->

<?php wp_footer(); ?>
</body>
</html>