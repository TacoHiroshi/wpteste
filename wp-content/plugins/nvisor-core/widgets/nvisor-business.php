<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor business Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_business_Widget extends \Elementor\Widget_Base {

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
        return 'business';
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
        return esc_html__( 'Business Section', 'nvisor-core' );
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
                'label' => esc_html__( 'Business Section', 'nvisor-core' ),
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

        $this->start_controls_section(
            'content_section1',
            [
                'label' => esc_html__( 'Contact Section', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'contact_title',
            [
                'label'         => esc_html__( 'Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'contact_shortcode',
            [
                'label'         => esc_html__( 'Contact Form Shortcode', 'dustra-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'rows'          => 2,
                'placeholder'   => esc_html__( 'Put your shortcode Here', 'dustra-core' ),
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

        $business_output = $this->get_settings_for_display(); ?>

<!--  Business Section Start  -->
<section class="business-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="business-content-area">
                    <h2 class="st-title"><?php echo esc_html($business_output['title']); ?></h2>
                    <p><?php echo esc_html($business_output['des']); ?></p>
                    <div class="progress-area">
                        <?php 
            if(!empty($business_output['list2'])):
            foreach ($business_output['list2'] as $business_slider1):?> 
                        <div class="progress-btm" style="width: 525px">
                            <label><?php echo esc_html($business_slider1['p_title']); ?></label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="max-width: <?php echo esc_attr($business_slider1['p_no']); ?>%">
                                    <span class="title"><?php echo esc_attr($business_slider1['p_no']); ?>%</span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; endif;?>
                    </div>
                    <div class="business-button">
                        <a href="<?php echo esc_url($business_output['btlink']['url']); ?>" class="business-contact"
                            ><?php echo esc_html($business_output['bttext']); ?>
                            <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M0 4.50063C0 4.36802 0.0526784 4.24085 0.146447 4.14708C0.240215 4.05331 0.367392 4.00063 0.5 4.00063H12.293L9.146 0.854632C9.05211 0.760745 8.99937 0.633407 8.99937 0.500632C8.99937 0.367856 9.05211 0.240518 9.146 0.146631C9.23989 0.0527448 9.36722 3.1283e-09 9.5 0C9.63278 -3.1283e-09 9.76011 0.0527449 9.854 0.146631L13.854 4.14663C13.9006 4.19308 13.9375 4.24825 13.9627 4.309C13.9879 4.36974 14.0009 4.43486 14.0009 4.50063C14.0009 4.5664 13.9879 4.63152 13.9627 4.69226C13.9375 4.75301 13.9006 4.80819 13.854 4.85463L9.854 8.85463C9.76011 8.94852 9.63278 9.00126 9.5 9.00126C9.36722 9.00126 9.23989 8.94852 9.146 8.85463C9.05211 8.76075 8.99937 8.63341 8.99937 8.50063C8.99937 8.36786 9.05211 8.24052 9.146 8.14663L12.293 5.00063H0.5C0.367392 5.00063 0.240215 4.94795 0.146447 4.85419C0.0526784 4.76042 0 4.63324 0 4.50063Z"
                                    fill="black"
                                /></svg></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mt-md-5 mt-sm-5 mt-esm-5">
                <div class="service-form">
                    <h2><?php echo esc_html($business_output['contact_title']); ?></h2>
                    <?php echo do_shortcode($business_output['contact_shortcode']);?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Business Section End  -->

    <?php }

}