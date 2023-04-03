<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor Hero Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_hero_Widget extends \Elementor\Widget_Base {

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
        return 'hero';
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
        return esc_html__( 'Hero Section', 'nvisor-core' );
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
                'label' => esc_html__( 'Hero Section', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'heroimg',
            [
                'label'     => esc_html__( 'Hero Image', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'bgimg1',
            [
                'label'     => esc_html__( 'Bg Image 1', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'bgimg2',
            [
                'label'     => esc_html__( 'Bg Image 2', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'slider_text', [
                'label'         => esc_html__( 'Slider Text', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
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
            'des', [
                'label'         => esc_html__( 'Description', 'nvisor-core' ),
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
                'label'     => esc_html__( 'Hero Sliders', 'nvisor-core' ),
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

        $repeater1 = new \Elementor\repeater();
        
        $repeater1->add_control(
            'social_icon', [
                'label'         => esc_html__( 'Icon Class', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater1->add_control(
            'social_link',
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
            'list2',
            [
                'label'     => esc_html__( 'Social Icons', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater1->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add Icons', 'nvisor-core' ),
                    ],
                ],
                'title_field' => '{{{ social_icon }}}',
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

        $hero_output = $this->get_settings_for_display(); ?>

   <!--  Banner Section Start  -->
<section class="banner-section pb-esm-0" style="background-image: url(<?php echo esc_url($hero_output['heroimg']['url']); ?>)">
    <div class="slider-carousel">
        <?php 
            if(!empty($hero_output['list1'])):
            foreach ($hero_output['list1'] as $hero_slider):?>       
        <div class="slider-item">
            <div class="container">
                <div class="content-box">
                    <div class="tittle-text">
                        <h1 class="wow bounceInleft slider-title" data-wow-duration="4s"><?php echo esc_html($hero_slider['title']); ?></h1>
                        <p><?php echo esc_html($hero_slider['des']); ?></p>
                    </div>
                    <?php if(!empty($hero_slider['btlink1']['url'] )): ?>
                    <a class="theme-btn-two" href="<?php echo esc_url($hero_slider['btlink1']['url']); ?>"> <span><?php echo esc_html($hero_slider['bttext1']); ?></span></a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <?php endforeach; endif;?>
    </div>
    <div class="banner-shape-image">
        <img class="shape-img1" src="<?php echo esc_url($hero_output['bgimg1']['url']); ?>" alt="Shape" />
        <img class="shape-img2" src="<?php echo esc_url($hero_output['bgimg2']['url']); ?>" alt="Shape" />
    </div>
    <div class="banner-social-list">
        <ul>
            <?php 
            if(!empty($hero_output['list2'])):
            foreach ($hero_output['list2'] as $social):?>    
            <li>
                <a href="<?php echo esc_url($social['social_link']['url']); ?>"><i class="<?php echo esc_attr($social['social_icon']); ?>"></i></a>
            </li>
            <?php endforeach; endif;?>    
        </ul>
    </div>
    <div class="banner-bottom-text">
        <p><?php echo $hero_output['slider_text']; ?></p>
    </div>
</section>
<!--  Banner Section End  -->

    <?php }

}