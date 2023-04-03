<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor hero2 Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_hero2_Widget extends \Elementor\Widget_Base {

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
        return 'hero2';
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
        return esc_html__( 'Hero Two Section', 'nvisor-core' );
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
                'label' => esc_html__( 'Hero Two Banner Section', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'heroimg',
            [
                'label'     => esc_html__( 'Banner Image', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'title', [
                'label'         => esc_html__( 'Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'sub', [
                'label'         => esc_html__( 'Sub Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'bttext1', [
                'label'         => esc_html__( 'Button Text', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'btlink1',
            [
                'label'         => esc_html__( ' Button Link', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::URL,
                'placeholder'   => esc_html__( 'https://your-link.com', 'nvisor-core' ),
                'show_external' => true,
                'default'       => [
                    'url'           => '#',
                    'is_external'   => true,
                    'nofollow'      => true,
                ],
            ]
        );

        $this->add_control(
            'list1',
            [
                'label'     => esc_html__( 'Hero Two Sliders', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add Sliders', 'nvisor-core' ),
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'content_section1',
            [
                'label' => esc_html__( 'Hero Two Feature Section', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_feature',
            [
                'label' => esc_html__( 'Show Featues Box', 'nvisor-core' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'nvisor-core' ),
                'label_off' => esc_html__( 'Hide', 'nvisor-core' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $repeater1 = new \Elementor\repeater();
        
        $repeater1->add_control(
            'no', [
                'label'         => esc_html__( 'Number', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater1->add_control(
            'title1', [
                'label'         => esc_html__( 'Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'list2',
            [
                'label'     => esc_html__( 'Featues', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater1->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add Featues', 'nvisor-core' ),
                    ],
                ],
                'title_field' => '{{{ title1 }}}',
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

        $hero2_output = $this->get_settings_for_display(); ?>

        <!-- Banner Section Start-->
<section class="banner-section banner-section-two pb-esm-0">

    <div class="container-fluid p-0">
        <div class="slider-carousel banner_slider_wrap banner-sliders-image" style="background-image: url(<?php echo esc_url($hero2_output['heroimg']['url']); ?>)">
            <?php 
            if(!empty($hero2_output['list1'])):
            foreach ($hero2_output['list1'] as $hero2_slider):?>       
            <div class="slider-item text-center">
                <div class="container">
                    <div class="content-box">
                        <div class="tittle-text">
                            <h5 class="wow bounceInDown slider-subtitle text-uppercase" data-wow-duration="2s"><?php echo esc_html($hero2_slider['title']); ?></h5>
                            <h1 class="wow bounceInRight slider-title text-uppercase" data-wow-duration="4s"><?php echo esc_html($hero2_slider['sub']); ?></h1>
                        </div>
                        <?php if(!empty($hero2_slider['btlink1']['url'] )): ?>
                        <a class="theme-btn-two" href="<?php echo esc_url($hero2_slider['btlink1']['url']); ?>"><span><?php echo esc_html($hero2_slider['bttext1']); ?></span></a>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <?php endforeach; endif;?>
        </div>
    </div>
    <?php if ( 'yes' === $hero2_output['show_feature'] ) { ?>
    <div class="container">
        <div class="better">
            <div class="row">
                 <?php 
            if(!empty($hero2_output['list2'])):
            foreach ($hero2_output['list2'] as $feature):?>   
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="better-item better-border d-flex align-items-center">
                        <h3><?php echo esc_html($feature['no']); ?></h3>
                        <p><?php echo $feature['title1']; ?></p>
                    </div>
                </div>
                <?php endforeach; endif;?>    
            </div>
        </div>
    </div>
    <?php } ?>
</section>
<!-- Banner Section End-->
  

    <?php }

}