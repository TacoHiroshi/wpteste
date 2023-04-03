<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor counter Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_counter_Widget extends \Elementor\Widget_Base {

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
        return 'counter';
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
        return esc_html__( 'Counter Section', 'nvisor-core' );
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
                'label' => esc_html__( 'Counter Section', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
       $repeater = new \Elementor\Repeater();

       $repeater->add_control(
            'heroimg',
            [
                'label'     => esc_html__( 'Image', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

       $repeater->add_control(
            'title',
            [
                'label'         => esc_html__( 'Title','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'no',
            [
                'label'         => esc_html__( 'Number','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'list1',
            [
                'label'     => esc_html__( 'Counter', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add counter', 'nvisor-core' ),
                    ],
                ],
                'title_field' => '{{{ title }}}',
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

        $counter_output = $this->get_settings_for_display(); ?>

        <!-- Counter Section Start-->
<div class="counter-section">
    <div class="container">
        <div class="better better-two container">
            <div class="row">
                <?php 
                if(!empty($counter_output['list1'])):
                foreach ($counter_output['list1'] as $counter_slide):?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-md-5 pb-sm-3 pb-esm-5">
                    <div class="funfact-three__single funfact-three__single1 better-item better-item-two d-flex">
                        <div class="funfact-three__counter">
                            <div class="pattern-1">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/sources/img/counter-shape.png'); ?>" alt="Counter" />
                            </div>
                            <div class="pattern-2">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/sources/img/counter-shape-two.png'); ?>" alt="Counter" />
                            </div>
                            <div class="pattern-3">
                                <img src="<?php echo esc_url($counter_slide['heroimg']['url']);?>" alt="Counter" />
                            </div>
                        </div>
                        <div class="sc-counter-box">
                            <div class="sc-count"><span class="odometer" data-count="<?php echo $counter_slide['no'];?>">0</span></div>
                            <span class="counter"><?php echo $counter_slide['title'];?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif;?>
            </div>
        </div>
    </div>
</div>
<!-- Counter Section End-->
    <?php }

}