<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor testimonial2 Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_testimonial2_Widget extends \Elementor\Widget_Base {

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
        return 'testimonial2';
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
        return esc_html__( 'Testimonial Two Section', 'nvisor-core' );
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
                'label' => esc_html__( 'Testimonial Section', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label'         => esc_html__( 'Title','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'sub',
            [
                'label'         => esc_html__( 'Sub Title','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        
       $repeater = new \Elementor\Repeater();

       $repeater->add_control(
            'des',
            [
                'label'         => esc_html__( 'Description','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
            ]
        );

       $repeater->add_control(
            'name',
            [
                'label'         => esc_html__( 'Name','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'job',
            [
                'label'         => esc_html__( 'Job','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'list1',
            [
                'label'     => esc_html__( 'Testimonial', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add Testimonial', 'nvisor-core' ),
                    ],
                ],
                'title_field' => '{{{ name }}}',
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

        $testimonial2_output = $this->get_settings_for_display(); ?>
<!--  Testimonial Section Start  -->
<section class="testimonial-section testimonial-section1 text-center">
    <div class="container">
        <?php if(!empty($testimonial2_output['title'] || $testimonial2_output['sub'] )): ?>
        <h5 class="st-subtitle2 text-uppercase"><?php echo esc_html($testimonial2_output['title']);?></h5>
        <h2 class="st-title"><?php echo esc_html($testimonial2_output['sub']);?></h2>
        <?php endif;?>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="testimonial-blog-one">
                    <?php 
                if(!empty($testimonial2_output['list1'])):
                foreach ($testimonial2_output['list1'] as $testimonial2_slide):?>
                    <div class="testimonial-bg">
                        <p>
                            <?php echo esc_html($testimonial2_slide['des']);?>
                        </p>
                        <span class="text-uppercase"><?php echo esc_html($testimonial2_slide['name']);?><span class="list2"><?php echo esc_html($testimonial2_slide['job']);?></span> </span>
                    </div>
                    <?php endforeach; endif;?>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
</section>
<!--  Testimonial Section End  -->
    <?php }

}