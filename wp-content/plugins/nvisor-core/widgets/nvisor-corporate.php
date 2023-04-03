<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor corporate Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_corporate_Widget extends \Elementor\Widget_Base {

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
        return 'corporate';
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
        return esc_html__( 'Corporate Section', 'nvisor-core' );
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
                'label' => esc_html__( 'Corporate Section Left', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'bgimg',
            [
                'label'     => esc_html__( 'BG Image', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'heroimg1',
            [
                'label'     => esc_html__( 'Hero Image One', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->add_control(
            'heroimg2',
            [
                'label'     => esc_html__( 'Hero Image One', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'ytlink',
            [
                'label'         => esc_html__( 'Youtube Link', 'nvisor-core' ),
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

        $this->end_controls_section();

        $this->start_controls_section(
            'content_section2',
            [
                'label' => esc_html__( 'Corporate Section Right', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
            'des', [
                'label'         => esc_html__( 'Description', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'bttext', [
                'label'         => esc_html__( 'Button Text', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'btlink',
            [
                'label'         => esc_html__( 'Button Link', 'nvisor-core' ),
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

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'c_title', [
                'label'         => esc_html__( 'Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'list1',
            [
                'label'     => esc_html__( 'Check List', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add List', 'nvisor-core' ),
                    ],
                ],
                'title_field' => '{{{ c_title }}}',
            ]
        );

        $repeater1 = new \Elementor\repeater();
        
        $repeater1->add_control(
            'p_title', [
                'label'         => esc_html__( 'Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater1->add_control(
            'p_no',
            [
                'label'         => esc_html__( 'Number', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'list2',
            [
                'label'     => esc_html__( 'Progress Bar', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater1->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add Bar', 'nvisor-core' ),
                    ],
                ],
                'title_field' => '{{{ p_title }}}',
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

        $corporate_output = $this->get_settings_for_display(); ?>

<!-- Corporate Section Start-->
<section class="corporate-section about-section about-section-style-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="video-section">
                    <div class="video-iconarea">
                        <a class="venobox popup-videos-button" data-autoplay="true" data-vbtype="video" href="https://youtu.be/XU0FYlY9_E0">
                            <i class="ri-play-fill"></i>
                        </a>
                    </div>
                    <div class="video-images">
                        <img class="corporate-group" src="<?php echo esc_url($corporate_output['heroimg1']['url']); ?>" alt="Corporate" />
                        <img class="corporate-shape1" src="<?php echo esc_url($corporate_output['heroimg2']['url']); ?>" alt="Corporate" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mt-md-5 mt-sm-5 mt-esm-5">
                <div class="about-content">
                    <h2 class="st-title"><?php echo esc_html($corporate_output['title']); ?></h2>
                    <p><?php echo esc_html($corporate_output['des']); ?></p>
                    <ul>
            <?php 
            if(!empty($corporate_output['list1'])):
            foreach ($corporate_output['list1'] as $corporate_slider):?>       
                        <li><?php echo esc_html($corporate_slider['c_title']); ?></li>
                        <?php endforeach; endif;?>
                    </ul>
                    <div class="progress-area">
                         <?php 
            if(!empty($corporate_output['list2'])):
            foreach ($corporate_output['list2'] as $corporate_slider1):?> 
                        <div class="progress-btm" style="width: 525px">
                            <label><?php echo esc_html($corporate_slider1['p_title']); ?></label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="max-width: <?php echo esc_attr($corporate_slider1['p_no']); ?>%">
                                    <span class="title"><?php echo esc_html($corporate_slider1['p_no']); ?>%</span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; endif;?>
                    </div>
                    <div class="progress-button">
                        <a class="theme-btn-one" href="<?php echo esc_url($corporate_output['btlink']['url']); ?>"> <span><?php echo esc_html($corporate_output['bttext']); ?></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="corporate-shape-image">
        <img src="<?php echo esc_url($corporate_output['bgimg']['url']); ?>" alt="Corporate" />
    </div>
</section>
<!-- Corporate Section End-->

    <?php }

}