<?php 
if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
// Output Customize CSS
function nvisor_customize_css() { 
    global $nvisor_options; if ($nvisor_options['main_color_nvisor'] == 7) {
?>
  <style>
   .upper-header .sc-main-menu .sub-menu-list li a:hover{
    color: #fff !important;
}

.theme-btn-one:after {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
    -webkit-transform: translateX(-50%) translateY(-50%) rotate(-25deg);
    transform: translateX(-50%) translateY(-50%) rotate(-25deg);
}

.theme-btn-one1:after {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
    -webkit-transform: translateX(-50%) translateY(-50%) rotate(-25deg);
    transform: translateX(-50%) translateY(-50%) rotate(-25deg);
}

.case-btn:after {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
    -webkit-transform: translateX(-50%) translateY(-50%) rotate(-25deg);
    transform: translateX(-50%) translateY(-50%) rotate(-25deg);
}

.theme-btn-two {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.theme-btn-three {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.theme-btn-four {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.theme-btn-two1:after {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
    -webkit-transform: translateX(-50%) translateY(-50%) rotate(-25deg);
    transform: translateX(-50%) translateY(-50%) rotate(-25deg);
}

.theme-btn-two2:after {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
    -webkit-transform: translateX(-50%) translateY(-50%) rotate(-25deg);
    transform: translateX(-50%) translateY(-50%) rotate(-25deg);
}


.theme-white-btn:after {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
    -webkit-transform: translateX(-50%) translateY(-50%) rotate(-25deg);
    transform: translateX(-50%) translateY(-50%) rotate(-25deg);
}

.theme-btn-header:after {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
    -webkit-transform: translateX(-50%) translateY(-50%) rotate(-25deg);
    transform: translateX(-50%) translateY(-50%) rotate(-25deg);
}

.st-subtitle {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.st-subtitle2 {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.main-header .top-right .contact-info ul li span:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.main-header .top-right .contact-info ul li .info-icon {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.main-header .top-right .contact-info ul li a .info-icon::after {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.upper-header .sc-main-menu .main-menu li a:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.upper-header .sc-main-menu .sub-menu-list {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.sc-header-content-box .sc-search i:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.about-section .about-content ul li svg {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.about-section .about-content ul li .info-icon {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?> !important;
}


.about-section .about-content .more-about-btn:hover {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.service-section.service-style-two .card:hover {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?> !important;
}

.service-item .card:hover {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.provide-section .popup-videos-button i {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.video-section svg {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.provide-content ul li .info-icon {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?> !important;
}

.case-carousel .case-carousel-item .inner-box .content-box .text .case-title:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.case-section .case-carousel .prev-arrow:hover::before {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.case-section .case-carousel .next-arrow:hover::before {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.case-content-box .case-carousel-item .inner-box .content-box .text .case-title:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}



.testimonial-section .slick-dots li button {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.testimonial-section-two .testimonial-blog .prev-arrow:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.testimonial-section-two .testimonial-blog .next-arrow:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.business-section li::after {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.business-section .business-contact:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.business-section .business-contact:hover svg path {
    fill: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.blog-item .blog-content .blog-title:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.footer-top .social-links li a:hover {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.banner-section .banner-social-list ul li i:hover {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.about-section-style-two .about-content ul li .info-icon {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?> !important;
}

.about-section-style-two .about-content .more-about-btn:hover {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.progress-bar {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.page-blog-section .popup-videos-button i {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.accordion-button:not(.collapsed):before {
    border: 1px solid <?php echo esc_html($nvisor_options['colorcode']); ?>;
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.team-member .team-content .text .team-title:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.benefit-section .benefit-content ul li .info-icon {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?> !important;
}

.benefit-section .benefit-content .find-more-btn:hover {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.page-contact-section .contact-submit button:hover {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.page-blog-section .navigation-list ul li a:hover {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.page-blog-section .navigation-list ul li span.current {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.page-blog-section .next-navigation ul li a:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.page-blog-box .title:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.page-blog-box .title1:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.page-blog-box .readmore:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.page-blog-box .readmore:hover svg path {
    fill: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.page-blog-box .details-social-area ul li a:hover {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.page-blog-section .page-blog-box .slider-carousel .slick-prev:hover::before,
.page-blog-section .page-blog-box .slider-carousel .slick-next:hover::before {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.details-auother-box .auother-text .title:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.details-comment-box .comment-text .auo-title a:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.details-comment-box .comment-text .comment-reply-link {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.details-form-box .contact-submit button:hover {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.case-single-img .slick-dots li button {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.case-text-area .case-arrow-area .case-arrow ul li a:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.page-service-single-wrapper ul li a:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.wrapper-content-box .wrapper-text a:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.blog-category-item ul li a:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.blog-tags-item .tags-list1 li a:hover,
.blog-tags-item .tags-list2 li a:hover {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.bread-section .bread-content span a:hover {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.corporate-section .video-iconarea i {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
    border: 1px solid <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.offcanvas-icon:hover #canva_close {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

#scrollUp .scrollUp-icon {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.header-top .social-links li a:hover {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.offcanvas-icon:hover #canva_close2 {
    color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.color-customizer a.opener {
  background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.color-customizer .text-theme {
  color: #<?php echo esc_html($nvisor_options['colorcode']); ?>;
}


/* Unit Test CSS */

.page-blog-section .sticky .single-item .item::after {
  background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.page-blog-section.full-blog .item .info .meta ul li i {
  color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.page-blog-section.full-blog .item .info .meta ul li a:hover {
  color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.pagi-area .pagination li span.pagination.current, 
.pagi-area .pagination li a:hover {
  background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
  border-color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.post-nav-links .current, 
.post-nav-links a:hover {
  background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
  border-color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.widget_block.widget_search form .wp-block-search__inside-wrapper button {
  background: <?php echo esc_html($nvisor_options['colorcode']); ?> !important;
}

.wp-block-group__inner-container h2::after {
  border-bottom: 2px solid <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.wp-block-calendar tbody td#today {
  background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
  border-color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}
.wp-block-calendar nav.wp-calendar-nav a:hover {
  color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.has-avatars.wp-block-latest-comments li footer time.wp-block-latest-comments__comment-date {
  color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.post-password-form input[type="submit"] {
  background: <?php echo esc_html($nvisor_options['colorcode']); ?> !important;
}

.wp-block-search .wp-block-search__button {
  background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.page-blog-section .sidebar .title h4::after {
  border-bottom: 2px solid <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.widget_tag_cloud a:hover {
  background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
  background-color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}




.bg-dark .widget_tag_cloud a:hover {
  background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
  background-color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.widget_search button[type="submit"] {
  color: <?php echo esc_html($nvisor_options['colorcode']); ?> !important;
  background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.sidebar-item.widget_rss .rss-date {
  color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.sidebar-item.widget_rss cite {
  color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.widget_recent_comments li span.comment-author-link a {
  color: <?php echo esc_html($nvisor_options['colorcode']); ?> !important;
}

.wp-calendar-table tr td a {
  color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.wp-calendar-table tbody td#today {
  background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.widget_calendar table td a {
  color: <?php echo esc_html($nvisor_options['colorcode']); ?> !important;
}

table td a {
  font-weight: 600;
  color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.widget_calendar .calendar_wrap nav.wp-calendar-nav a:hover {
  color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.page-blog-section a:hover,
.page-content a:hover {
  color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

blockquote {
  border-left: 5px solid <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.page-blog-section .info .footer-entry a:hover {
  background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}


.post-pagi-area a {
  color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.post-pagi-area a:hover {
  background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.post-pagi-area a:hover {
  color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.comments-list .commen-item .content .reply a:hover {
  background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.page-blog-section .page-blog-box blockquote::before {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>
}

.page-blog-section .page-blog-box .footer-entry .tags a:hover {
    background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.page-blog-section .blog-category-item .title::after {
    border-bottom: 2px solid <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.page-links .current, .page-links a:hover {
  background: <?php echo esc_html($nvisor_options['colorcode']); ?>;
  border-color: <?php echo esc_html($nvisor_options['colorcode']); ?>;
}

.better-two {
    background: linear-gradient(90deg, <?php echo esc_html($nvisor_options['color-gra']['from']); ?> 57%, <?php echo esc_html($nvisor_options['color-gra']['to']); ?> 100%) !important;
}

.service-section .service-item .card:hover {
  background: linear-gradient(90deg, <?php echo esc_html($nvisor_options['color-gra']['from']); ?> 57%, <?php echo esc_html($nvisor_options['color-gra']['to']); ?> 100%) !important;
}

.service-section .service-item .card:hover{
    background: linear-gradient(90deg, <?php echo esc_html($nvisor_options['color-gra']['from']); ?> 57%, <?php echo esc_html($nvisor_options['color-gra']['to']); ?> 100%) !important;
}

  </style>

<?php }
}

  
add_action('wp_head', 'nvisor_customize_css');
}
?>