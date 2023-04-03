<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor about Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_about_Widget extends \Elementor\Widget_Base {

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
        return 'about';
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
        return esc_html__( 'About Section', 'nvisor-core' );
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
                'label' => esc_html__( 'About Section', 'nvisor-core' ),
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
            'title', [
                'label'         => esc_html__( 'Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'sub', [
                'label'         => esc_html__( 'Sub Title', 'nvisor-core' ),
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

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'c_title', [
                'label'         => esc_html__( 'Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'c_icon', [
                'label'         => esc_html__( 'Icon Class', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
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
                'title_field' => '{{{ c_icon }}}',
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

        $about_output = $this->get_settings_for_display(); ?>

<!-- About Section Start-->
<section class="about-section pl-about">
    <div class="container-fluid p-0">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <h5 class="st-subtitle"><?php echo esc_html($about_output['title']); ?></h5>
                    <h2 class="st-title"><?php echo esc_html($about_output['sub']); ?></h2>
                    <p><?php echo esc_html($about_output['des']); ?></p>
                    <div class="ab-check-list">
                        <ul>
                            <?php 
            if(!empty($about_output['list1'])):
            foreach ($about_output['list1'] as $about_slider):?>       
                            <li><i class="<?php echo esc_attr($about_slider['c_icon']); ?>"></i><?php echo esc_html($about_slider['c_title']); ?></li>
                            <?php endforeach; endif;?>
                        </ul>
                    </div>
                    <div class="progress-area">
                        <?php 
            if(!empty($about_output['list2'])):
            foreach ($about_output['list2'] as $about_slider1):?> 
                        <div class="progress-btm" style="width: 525px">
                            <label><?php echo esc_html($about_slider1['p_title']); ?></label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="max-width: <?php echo esc_attr($about_slider1['p_no']); ?>%">
                                    <span class="title"><?php echo esc_html($about_slider1['p_no']); ?>%</span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; endif;?>

                    </div>
                    <div class="about-button">
                        <a href="<?php echo esc_url($about_output['btlink']['url']); ?>">
                        <button class="theme-btn-one btn btn-danger more-about-btn" type="button">
                            <span><?php echo esc_html($about_output['bttext']); ?></span>
                        </button>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-right-img">
                    <img src="<?php echo esc_url($about_output['bgimg']['url']); ?>" alt="Shape" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End-->

    <?php }

}