<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor banner Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_banner_Widget extends \Elementor\Widget_Base {

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
        return 'banner';
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
        return esc_html__( 'Banner Section', 'nvisor-core' );
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
                'label' => esc_html__( 'Banner Section', 'nvisor-core' ),
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
            'title',
            [
                'label'         => esc_html__( 'Title','nvisor-core' ),
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

        $this->add_control(
            'heading',
            [
                'label'         => esc_html__( 'Heading','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'l_des',
            [
                'label'         => esc_html__( 'List','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'list1',
            [
                'label'     => esc_html__( 'List', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add List', 'nvisor-core' ),
                    ],
                ],
                'title_field' => '{{{ l_des }}}',
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'content_section1',
            [
                'label' => esc_html__( 'Button One', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'bttext1',
            [
                'label'         => esc_html__( 'Button Text','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'btlink1',
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
        
        $this->end_controls_section();

        $this->start_controls_section(
            'content_section2',
            [
                'label' => esc_html__( 'Button Two', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'bttext2',
            [
                'label'         => esc_html__( 'Button Text','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'btlink2',
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

        $banner_output = $this->get_settings_for_display(); ?>
<!-- Benefit Section Start-->
<section class="benefit-section">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6 pt-lg-5 pt-md-5">
                <div class="benefit-content">
                    <div class="benefit-text">
                        <h2 class="st-title">
                            <?php echo $banner_output['title'];?>
                        </h2>
                        <p><?php echo esc_html($banner_output['des']);?></p>
                        <h4><?php echo esc_html($banner_output['heading']);?></h4>
                        <ul>
                            <?php 
                if(!empty($banner_output['list1'])):
                foreach ($banner_output['list1'] as $banner_slide):?>
                            <li>
                                <svg width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.97974 7.99316L7.97974 13.9932L17.9797 1.99316"
                                        stroke="#2FE84D"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                                <p><?php echo esc_html($banner_slide['l_des']);?></p>
                            </li>
                            <?php endforeach; endif;?>
                        </ul>
                    </div>
                    <div class="benefit-button">
                        <?php if(!empty($banner_output['bttext1'] || $banner_output['btlink1'['url']] )): ?>
                        <a class="theme-btn-two1 theme-white-btn" href="<?php echo esc_url($banner_output['btlink1']['url']);?>"><span><?php echo esc_html($banner_output['bttext1']);?></span></a>
                        <?php endif;?>
                        <?php if(!empty($banner_output['bttext2'] || $banner_output['btlink2'['url']] )): ?>
                        <a class="theme-btn-two" href="<?php echo esc_url($banner_output['btlink2']['url']);?>"><span><?php echo esc_html($banner_output['bttext2']);?></span></a>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="benefit-shape">
        <img src="<?php echo esc_url($banner_output['bgimg']['url']);?>" alt="shape" />
    </div>
</section>
<!-- Benefit Section End-->
    <?php }

}