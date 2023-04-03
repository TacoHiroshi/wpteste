<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor service2 Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_service2_Widget extends \Elementor\Widget_Base {

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
        return 'service2';
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
        return esc_html__( 'Service Two Section', 'nvisor-core' );
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
            'content_section1',
            [
                'label' => esc_html__( 'Service Section Defaults', 'nvisor-core' ),
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

        $this->add_control(
            'bgimg1',
            [
                'label'     => esc_html__( 'BG Image', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__( 'Service Section', 'nvisor-core' ),
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

        $this->add_control(
            'bttext',
            [
                'label'         => esc_html__( 'Button Text','nvisor-core' ),
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
            'no',
            [
                'label'         => esc_html__( 'Number','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
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
            'des1',
            [
                'label'         => esc_html__( 'Description','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'bt_text',
            [
                'label'         => esc_html__( 'Button Text','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'bt_link',
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

        $repeater->add_control(
            'nextline',
            [
                'label'         => esc_html__( 'Margin Needed ?' ,'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'list1',
            [
                'label'     => esc_html__( 'Service', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add service', 'nvisor-core' ),
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

        $service2_output = $this->get_settings_for_display(); ?>

        <!--  Service Section Start  -->
<section class="<?php echo esc_attr($service2_output['class']);?>">
    <div class="overlay-top">
        <figure>
            <img src="<?php echo esc_url($service2_output['bgimg1']['url']);?>" alt="" />
        </figure>
    </div>
    <div class="container">
        <?php if(!empty($service2_output['title'] || $service2_output['sub'] )): ?>
        <div class="ser-content-area d-flex align-items-center justify-content-between">
            <div class="sevice-text">
                <h5 class="st-subtitle2 text-uppercase"><?php echo esc_html($service2_output['title']);?></h5>
                <h2 class="st-title">
                    <?php echo $service2_output['sub'];?>
                </h2>
            </div>
            <div class="service-btn">
                <?php if(!empty($service2_output['bttext'])): ?>
                <div class="service-btn text-end">
                    <a class="theme-btn-four" href="<?php echo esc_url($service2_output['btlink']['url']);?>"><span><?php echo esc_html( $service2_output['bttext']);?></span></a>
                </div>
                <?php endif;?>
            </div>
        </div>
        <?php endif;?>
        <div class="service-content">
            <div class="service-item">
                <div class="row">
                    <?php 
                if(!empty($service2_output['list1'])):
                foreach ($service2_output['list1'] as $service2_slide):?>
                    <?php if(!empty($service2_slide['nextline'])): ?>
                    <div class="mt-4"></div>
                    <?php endif;?>
                    <div class="col-lg-3 col-md-6 pb-md-4 pb-sm-4 pb-esm-4">
                        <div class="card services-margin-bottom">
                            <div class="card-body">
                                <span><?php echo $service2_slide['no'];?></span>
                                <h4><?php echo $service2_slide['title1'];?></h4>
                                <p><?php echo $service2_slide['des1'];?></p>
                                <a href="<?php echo esc_url($service2_slide['bt_link']['url']);?>"
                                    ><?php echo esc_html($service2_slide['bt_text']);?>
                                    <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M0 4.50063C0 4.36802 0.0526784 4.24085 0.146447 4.14708C0.240215 4.05331 0.367392 4.00063 0.5 4.00063H12.293L9.146 0.854632C9.05211 0.760745 8.99937 0.633407 8.99937 0.500632C8.99937 0.367856 9.05211 0.240518 9.146 0.146631C9.23989 0.0527448 9.36722 3.1283e-09 9.5 0C9.63278 -3.1283e-09 9.76011 0.0527449 9.854 0.146631L13.854 4.14663C13.9006 4.19308 13.9375 4.24825 13.9627 4.309C13.9879 4.36974 14.0009 4.43486 14.0009 4.50063C14.0009 4.5664 13.9879 4.63152 13.9627 4.69226C13.9375 4.75301 13.9006 4.80819 13.854 4.85463L9.854 8.85463C9.76011 8.94852 9.63278 9.00126 9.5 9.00126C9.36722 9.00126 9.23989 8.94852 9.146 8.85463C9.05211 8.76074 8.99937 8.63341 8.99937 8.50063C8.99937 8.36786 9.05211 8.24052 9.146 8.14663L12.293 5.00063H0.5C0.367392 5.00063 0.240215 4.94795 0.146447 4.85419C0.0526784 4.76042 0 4.63324 0 4.50063V4.50063Z"
                                            fill="black"
                                        /></svg></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Service Section End  -->
    <?php }

}