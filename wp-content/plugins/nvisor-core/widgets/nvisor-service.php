<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor service Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_service_Widget extends \Elementor\Widget_Base {

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
        return 'service';
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
        return esc_html__( 'Service Section', 'nvisor-core' );
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

        $this->add_control(
            'bgimg2',
            [
                'label'     => esc_html__( 'BG Image 2', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

         $this->add_control(
            'bgimg3',
            [
                'label'     => esc_html__( 'BG Image 3', 'nvisor-core' ),
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
            'service_class',
            [
                'label'         => esc_html__( 'Class','nvisor-core' ),
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

        $repeater->add_control(
            'title1',
            [
                'label'         => esc_html__( 'Title','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
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

        

        $this->add_control(
            'list1',
            [
                'label'     => esc_html__( 'service', 'nvisor-core' ),
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

        $service_output = $this->get_settings_for_display(); ?>

        <!-- Service Section Start-->
<section class="<?php echo esc_attr($service_output['class']);?>">
    <div class="service-section-overlay-top">
        <figure><img src="<?php echo esc_url($service_output['bgimg1']['url']);?>" alt="Service" /></figure>
    </div>
    <div class="service-section-overlay-bottom">
        <figure><img src="<?php echo esc_url($service_output['bgimg2']['url']);?>" alt="Service" /></figure>
    </div>
    <div class="container">
        <?php if(!empty($service_output['title'] || $service_output['sub'] )): ?>
        <div class="service-content">
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="st-subtitle1"><?php echo esc_html($service_output['title']);?></h5>
                    <h2 class="st-title"><?php echo esc_html($service_output['sub']);?></h2>
                </div>
            </div>
        </div>
        <?php endif;?>
        <div class="service-item">
            <div class="row">
                <?php 
                if(!empty($service_output['list1'])):
                foreach ($service_output['list1'] as $service_slide):?>

                <div class="col-lg-3 col-md-6">
                    <div class="<?php echo esc_attr($service_slide['service_class']);?>">
                        <div class="card-body">
                            <span><?php echo esc_attr($service_slide['no']);?></span>
                            <h3>
                               <?php echo $service_slide['title1'];?>
                            </h3>
                            <a href="<?php echo esc_url($service_slide['bt_link']['url']);?>"
                                ><?php echo esc_html($service_slide['bt_text']);?>
                                <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M0.998535 5.48891C0.998535 5.3563 1.05121 5.22913 1.14498 5.13536C1.23875 5.04159 1.36593 4.98891 1.49854 4.98891H13.2915L10.1445 1.84291C10.0506 1.74903 9.9979 1.62169 9.9979 1.48891C9.9979 1.35614 10.0506 1.2288 10.1445 1.13491C10.2384 1.04103 10.3658 0.988281 10.4985 0.988281C10.6313 0.988281 10.7586 1.04103 10.8525 1.13491L14.8525 5.13491C14.8991 5.18136 14.936 5.23653 14.9612 5.29728C14.9865 5.35802 14.9994 5.42315 14.9994 5.48891C14.9994 5.55468 14.9865 5.6198 14.9612 5.68055C14.936 5.74129 14.8991 5.79647 14.8525 5.84291L10.8525 9.84291C10.7586 9.9368 10.6313 9.98954 10.4985 9.98954C10.3658 9.98954 10.2384 9.9368 10.1445 9.84291C10.0506 9.74903 9.9979 9.62169 9.9979 9.48891C9.9979 9.35614 10.0506 9.2288 10.1445 9.13491L13.2915 5.98891H1.49854C1.36593 5.98891 1.23875 5.93623 1.14498 5.84247C1.05121 5.7487 0.998535 5.62152 0.998535 5.48891Z"
                                        fill="black"
                                    /></svg></a>
                            <img class="service-icon-coding" src="<?php echo esc_url($service_slide['heroimg']['url']);?>" alt="Icon" />
                        </div>
                    </div>
                </div>
                <?php endforeach; endif;?>
            </div>
        </div>
    </div>
    <div class="service-shape">
        <img src="<?php echo esc_url($service_output['bgimg3']['url']);?>" alt="Shape" />
    </div>
</section>
<!-- Service Section End-->
    <?php }

}