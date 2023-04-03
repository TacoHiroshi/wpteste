<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor case Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_case_Widget extends \Elementor\Widget_Base {

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
        return 'case';
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
        return esc_html__( 'Case Section', 'nvisor-core' );
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
            'content_section1',
            [
                'label' => esc_html__( 'Case Section', 'nvisor-core' ),
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

        $this->end_controls_section();

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__( 'Case Section', 'nvisor-core' ),
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

        $this->add_control(
            'list1',
            [
                'label'     => esc_html__( 'Case', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add Case', 'nvisor-core' ),
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

        $case_output = $this->get_settings_for_display(); ?>

    <!--  Case Section Start  -->
<section class="<?php echo esc_attr($case_output['class']);?>">
    <div class="container-fluid p-0">
        <?php if(!empty($case_output['title'] || $case_output['sub'] )): ?>
        <div class="case-text text-center">
            <h5 class="st-subtitle2"><?php echo $case_output['title'];?></h5>
            <h2 class="st-title"><?php echo $case_output['sub'];?></h2>
        </div>
        <?php endif;?>
        <div class="case-slider-area">
            <div class="case-carousel">
                <?php 
                if(!empty($case_output['list1'])):
                foreach ($case_output['list1'] as $case_slide):?>
                <div class="case-carousel-item overlay-box">
                    <div class="inner-box">
                        <div class="content-box">
                            <figure class="img-box">
                                <img src="<?php echo esc_url($case_slide['heroimg']['url']);?>" alt="" />
                            </figure>
                            <div class="text">
                                <div class="btn-box">
                                    <a href="<?php echo esc_url($case_slide['bt_link']['url']);?>"><h4 class="case-title"><?php echo esc_html($case_slide['title1']);?></h4></a>
                                    <p><?php echo $case_slide['des1'];?></p>
                                    <a class="theme-btn-one case-btn" href="<?php echo esc_url($case_slide['bt_link']['url']);?>"
                                        ><span><?php echo esc_html($case_slide['bt_text']);?></span>
                                        <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.44 10.3095L17.25 5.49945L12.44 0.689453L11.6315 1.49793L15.0614 4.92782L0.127308 4.92782L0.127308 6.07115L15.0613 6.07116L11.6315 9.50097L12.44 10.3095Z"
                                                fill="#C1C1C1"
                                            /></svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif;?>
            </div>
        </div>
    </div>
</section>
<!--  Case Section End  -->
    <?php }

}