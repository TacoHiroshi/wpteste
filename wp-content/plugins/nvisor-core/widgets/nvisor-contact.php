<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor contact Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_contact_Widget extends \Elementor\Widget_Base {

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
        return 'contact';
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
        return esc_html__( 'Contact Section', 'nvisor-core' );
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
                'label' => esc_html__( 'Contact Section', 'nvisor-core' ),
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
            'contact_shortcode',
            [
                'label'         => esc_html__( 'Contact Form Shortcode', 'dustra-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'rows'          => 2,
                'placeholder'   => esc_html__( 'Put your shortcode Here', 'dustra-core' ),
            ]

        );


        $this->add_control(
            'iframe_src',
            [
                'label'         => esc_html__( 'Contact Form Shortcode', 'dustra-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'rows'          => 2,
                'placeholder'   => esc_html__( 'Put your IFRAM SRC Here', 'dustra-core' ),
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
            'title1',
            [
                'label'         => esc_html__( 'Title','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'text',
            [
                'label'         => esc_html__( 'Text','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'text_link',
            [
                'label'         => esc_html__( 'Text Link','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'list1',
            [
                'label'     => esc_html__( 'Contact', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add contact', 'nvisor-core' ),
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

        $contact_output = $this->get_settings_for_display(); ?>

<!-- Page Contact Section Start -->
<section class="page-contact-section">
    <div class="container contact-container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-content-box">
                    <div class="page-text">
                        <h5 class="st-subtitle2 text-uppercase"><?php echo esc_html($contact_output['title']);?></h5>
                        <h2 class="st-title"><?php echo esc_html($contact_output['sub']);?></h2>
                        <p><?php echo esc_html($contact_output['des']);?></p>
                    </div>
                     <?php 
                if(!empty($contact_output['list1'])):
                foreach ($contact_output['list1'] as $contact_slide):?>
                    <div class="contact-list d-flex">
                        <div class="contact-icon">
                           <img src="<?php echo esc_url($contact_slide['heroimg']['url']);?>" alt="" /> 
                        </div>
                        <div class="contact-text">
                            <h4><?php echo esc_html($contact_slide['title1']);?></h4>
                            <span><a href="<?php echo $contact_slide['text_link'];?>"><?php echo esc_html($contact_slide['text']);?></a></span>
                        </div>
                    </div>
                   <?php endforeach; endif;?>
            </div>
                    </div>
            <div class="col-lg-7">
            <?php echo do_shortcode($contact_output['contact_shortcode']);?>
        </div>
                </div>
            </div>
        </section>
        <!-- Page Contact Section Start -->

<!-- Contact Map Section Start -->
<div class="contact-map-area">
    <div class="container-fluid">
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 611px">
            <iframe src="<?php echo $contact_output['iframe_src'];?>"></iframe>
        </div>
    </div>
</div>
<!-- Contact Map Section End -->

    <?php }

}