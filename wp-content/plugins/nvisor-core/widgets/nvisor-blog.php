<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor blog Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_blog_Widget extends \Elementor\Widget_Base {

    /**
     * Get widget name.
     *
     * Retrieve oEmbed widget name.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget name.
     */
    public function get_name() {
        return 'blog';
    }

    /**
     * Get widget title.
     *
     * Retrieve oEmbed widget title.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget title.
     */
    public function get_title() {
        return esc_html__( 'Blog Section', 'nvisor-core' );
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the oEmbed widget belongs to.
     *
     * @since 1.0.0
     * @access public
     * @return array Widget categories.
     */
    public function get_categories() {
        return [ 'nvisor' ];
    }

     public function get_script_depends() {
        return array('main');
    }  

    /**
     * Register oEmbed widget controls.
     *
     * Add input fields to allow the user to customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__( 'Blog Section', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'class',[
                'label'         => esc_html__( 'Class', 'nvisor-core' ),
                'default'         => esc_html__( 'blog-area content-less default-padding bottom-less', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );
        

        $this->add_control(
            'title', [
                'label'         => esc_html__( 'Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'sub', [
                'label'         => esc_html__( ' Sub Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'slug', [
                'label'         => esc_html__( 'Category Slug', 'nvisor-core' ),
                'description' => esc_html__( 'Display Three Latest Post From Category or Leave empty to display three latest post', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->end_controls_section();

    }

    /**
     * Render oEmbed widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render() {

        $blog_output = $this->get_settings_for_display(); ?>

       <!--  Blog Section Start  -->
<section class="<?php echo esc_html($blog_output['class']); ?>">
    <div class="container">
        <h5 class="st-subtitle2 text-center text-uppercase"><?php echo esc_html($blog_output['title']); ?></h5>
        <h2 class="st-title text-center">
           <?php echo $blog_output['sub']; ?>
        </h2>
        <div class="sc-blog-slider">
            <?php if (empty($blog_output['slug'])) {
        $qry_args = array(
        'posts_per_page' => 3,
        'ignore_sticky_posts' => 1,
      );
    }
            else {
        $qry_args = array(
        'posts_per_page' => 3,
        'ignore_sticky_posts' => 1,
        'category_name' => $blog_output['slug'],
    ); }

    $qry = new WP_Query( $qry_args );

    if( $qry->have_posts() ) {

                while ( $qry->have_posts() ) : $qry->the_post(); ?>

            <div class="blog-item">
                <div class="blog-content">
                    <figure>
                        <?php the_post_thumbnail('nvisor-blog'); ?>
                    </figure>
                    <div class="text">
                        <h5><?php the_time(get_option('date_format')) ?></h5>
                        <a href="<?php the_permalink(); ?>"><h2 class="blog-title"><?php the_title(); ?></h2></a>
                        <div class="btn-box">
                            <a href="<?php the_permalink(); ?>" class="link-btn">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                            <a class="theme-btn-two main-nav-one-btn" href="<?php the_permalink(); ?>"
                                ><span><?php esc_html_e ('Read More','nvisor' ); ?></span>
                                <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.44 10.3095L17.25 5.49945L12.44 0.689453L11.6315 1.49793L15.0614 4.92782L0.127308 4.92782L0.127308 6.07115L15.0613 6.07116L11.6315 9.50097L12.44 10.3095Z"
                                        fill="white"
                                    /></svg></a>
                        </div>
                    </div>
                </div>
                <div class="blog-overlay"></div>
            </div>
        <?php
                endwhile;
                
                //Reset Post Data
                wp_reset_postdata(); } ?>
        </div>
    </div>
</section>
<!--  Blog Section End  -->

    <?php }

}