<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor faq Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_faq_Widget extends \Elementor\Widget_Base {

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
        return 'faq';
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
        return esc_html__( 'Faq Section', 'nvisor-core' );
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
                'label' => esc_html__( 'Faq Section', 'nvisor-core' ),
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
            'des',
            [
                'label'         => esc_html__( 'Description','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
            ]
        );
        
       $repeater = new \Elementor\Repeater();

       $repeater->add_control(
            'faq_id',
            [
                'label'         => esc_html__( 'Faq ID','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'faq_id1',
            [
                'label'         => esc_html__( 'Collapse ID','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'faq_class',
            [
                'label'         => esc_html__( 'Active Class','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'faq_bt_class',
            [
                'label'         => esc_html__( 'Button Class','nvisor-core' ),
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

        $this->add_control(
            'list1',
            [
                'label'     => esc_html__( 'Faq', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add faq', 'nvisor-core' ),
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

        $faq_output = $this->get_settings_for_display(); ?>

        <!-- Provide Section Start-->
<section class="<?php echo esc_attr($faq_output['class']);?>">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="provide-left-image">
                    <img src="<?php echo esc_url($faq_output['bgimg1']['url']);?>" alt="Provide" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="provide-accordion-box">
                    <div class="provide-accordion-text">
                        <h5 class="st-subtitle2"><?php echo esc_html($faq_output['title']);?></h5>
                        <h2 class="st-title"><?php echo esc_html($faq_output['sub']);?></h2>
                        <p><?php echo esc_html($faq_output['des']);?></p>
                    </div>
                    <div class="provide-content-two provide-content-two1 service-content-accordion service-content-accordion1">
                        <div id="accordion">
                            <div class="accordion" id="accordionExample">
                                <?php 
                if(!empty($faq_output['list1'])):
                foreach ($faq_output['list1'] as $faq_slide):?>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="<?php echo esc_attr($faq_slide['faq_id']);?>">
                                        <button
                                            class="<?php echo esc_attr($faq_slide['faq_bt_class']);?>"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#<?php echo esc_attr($faq_slide['faq_id1']);?>"
                                            aria-expanded="true"
                                            aria-controls="<?php echo esc_attr($faq_slide['faq_id1']);?>"
                                        >
                                            <?php echo esc_attr($faq_slide['title1']);?>
                                        </button>
                                    </h2>
                                    <div id="<?php echo esc_attr($faq_slide['faq_id1']);?>" class="accordion-collapse collapse <?php echo esc_attr($faq_slide['faq_class']);?>" aria-labelledby="<?php echo esc_attr($faq_slide['faq_id']);?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong
                                                ><?php echo esc_attr($faq_slide['des1']);?>
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; endif;?>                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Provide Section End-->
    <?php }

}