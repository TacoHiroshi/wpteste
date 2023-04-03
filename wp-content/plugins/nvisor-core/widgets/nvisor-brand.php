<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor brand Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_brand_Widget extends \Elementor\Widget_Base {

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
        return 'brand';
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
        return esc_html__( 'Brand Section', 'nvisor-core' );
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
                'label' => esc_html__( 'Brand Section', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'class',
            [
                'label'         => esc_html__( 'Class','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater = new \Elementor\Repeater();

         $repeater->add_control(
            'bgimg',
            [
                'label'     => esc_html__( 'Brand Image', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'list1',
            [
                'label'     => esc_html__( 'Brand Slider', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add Image', 'nvisor-core' ),
                    ],
                ],
                'title_field' => 'Image',
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

        $brand_output = $this->get_settings_for_display(); ?>
<!-- Brand section Start -->
<section class="<?php echo esc_attr($brand_output['class']);?>">
    <div class="container">
        <div class="row">
            <div class="brand d-flex">
                <?php 
                if(!empty($brand_output['list1'])):
                foreach ($brand_output['list1'] as $brand_slide):?>
                <div class="brand-logo">
                    <figure>
                        <a target="_blank" href="#"><img src="<?php echo esc_url($brand_slide['bgimg']['url']);?>" alt="Brand" /></a>
                    </figure>
                </div>
                <?php endforeach; endif;?>

            </div>
        </div>
    </div>
</section>
<!-- Brand section End -->
    <?php }

}