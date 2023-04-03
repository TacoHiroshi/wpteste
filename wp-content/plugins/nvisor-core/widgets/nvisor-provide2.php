<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor provide2 Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_provide2_Widget extends \Elementor\Widget_Base {

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
        return 'provide2';
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
        return esc_html__( 'Provide Two Section', 'nvisor-core' );
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
                'label' => esc_html__( 'Provide Section', 'nvisor-core' ),
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
            'ytlink',
            [
                'label'         => esc_html__( ' Youtube Link', 'nvisor-core' ),
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

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'p_title', [
                'label'         => esc_html__( 'Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'p_des', [
                'label'         => esc_html__( 'Description', 'nvisor-core' ),
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

        $provide2_output = $this->get_settings_for_display(); ?>

<!--  Provide Section Start  -->
<section class="provide-section provide-style-two">
    <div class="container-fluid p-0">
        <div class="provide-area">
            <div class="provide-content">
                <h2 class="st-title"><?php echo esc_html($provide2_output['title']); ?></h2>
                 <p><?php echo esc_html($provide2_output['des']); ?></p>
            <?php 
            if(!empty($provide2_output['list1'])):
            foreach ($provide2_output['list1'] as $provide2_slider):?>   
                <div class="provide-check-list">
                    <div class="provide-check">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.8232 0H16.2813C16.0652 0 15.86 0.0943542 15.7277 0.255805L6.63318 11.2072L2.27233 5.9548C2.20636 5.87519 2.12227 5.81081 2.02638 5.76651C1.93049 5.7222 1.82529 5.69912 1.71867 5.699H0.17682C0.0290322 5.699 -0.0525823 5.86045 0.0378553 5.96948L6.07953 13.2452C6.36187 13.5849 6.90449 13.5849 7.18904 13.2452L17.9621 0.268386C18.0526 0.161451 17.971 0 17.8232 0Z"
                                fill="#DF2E2E"
                            />
                        </svg>
                    </div>
                    <div class="provide-text">
                        <h4><?php echo esc_html($provide2_slider['p_title']); ?></h4>
                        <p><?php echo esc_html($provide2_slider['p_des']); ?></p>
                    </div>
                </div>
                <?php endforeach; endif;?>
                <?php if(!empty($service2_output['bttext'] )): ?>
                <div class="provide-button">
                     <a class="theme-btn-one" href="<?php echo esc_url($provide2_output['btlink']['url']); ?>"><span><?php echo esc_html($provide2_output['bttext']); ?></span></a>
                </div>
                <?php endif;?>
            </div>
            <div class="video-section">
                <img class="video-image" src="<?php echo esc_url($provide2_output['bgimg']['url']); ?>" alt="" />
                <div class="video-iconarea">
                    <a class="venobox popup-videos-button" data-autoplay="true" data-vbtype="video" href="<?php echo esc_url($provide2_output['ytlink']['url']); ?>">
                        <svg width="37" height="43" viewBox="0 0 37 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.75 2.88045L34 21.5L1.75 40.1195L1.75 2.88045Z" stroke="#DF2E2E" stroke-width="3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Provide Section End  -->

    <?php }

}