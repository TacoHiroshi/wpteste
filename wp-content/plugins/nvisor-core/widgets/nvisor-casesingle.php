<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor casesingle Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_casesingle_Widget extends \Elementor\Widget_Base {

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
        return 'casesingle';
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
        return esc_html__( 'Case Single Section', 'nvisor-core' );
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
                'label' => esc_html__( 'Case Single Section', 'nvisor-core' ),
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
            'pbtlink',
            [
                'label'         => esc_html__( ' Previous Post Link', 'nvisor-core' ),
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
            'nbtlink',
            [
                'label'         => esc_html__( ' Next Post Link', 'nvisor-core' ),
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

        $repeater1 = new \Elementor\Repeater();

        $repeater1->add_control(
            'slideimg',
            [
                'label'     => esc_html__( 'Slide Image', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'list1',
            [
                'label'     => esc_html__( 'Image Slides', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater1->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add Slide Image', 'nvisor-core' ),
                    ],
                ],
                'title_field' => 'Image',
            ]
        );

        $repeater2 = new \Elementor\repeater();
        
        $repeater2->add_control(
            'text1', [
                'label'         => esc_html__( 'Text 1', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater2->add_control(
            'text2',
            [
                'label'         => esc_html__( 'Text 2', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'list2',
            [
                'label'     => esc_html__( 'Key Points', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater2->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add Key Points', 'nvisor-core' ),
                    ],
                ],
                'title_field' => '{{{ text1 }}}',
            ]
        );

        $repeater3 = new \Elementor\repeater();

        $repeater3->add_control(
            'herosvg',
            [
                'label'     => esc_html__( 'Icon Image', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater3->add_control(
            'pointt',
            [
                'label'         => esc_html__( 'Point Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'list3',
            [
                'label'     => esc_html__( 'Point Title', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater3->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add Point Title', 'nvisor-core' ),
                    ],
                ],
                'title_field' => '{{{ pointt }}}',
            ]
        );

        $repeater4 = new \Elementor\repeater();

        $repeater4->add_control(
            'cclass',
            [
                'label'         => esc_html__( 'Class', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater4->add_control(
            'ctitle',
            [
                'label'         => esc_html__( 'Case Single Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater4->add_control(
            'cdes', [
                'label'         => esc_html__( 'Case Single Description', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'list4',
            [
                'label'     => esc_html__( 'Case Single Details', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater4->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add Case Single Detail', 'nvisor-core' ),
                    ],
                ],
                'title_field' => '{{{ ctitle }}}',
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

$casesingle_output = $this->get_settings_for_display(); ?>

<!-- Page Case Section Start -->
        <section class="page-case-single-section">
            <div class="container">
                <div class="row">
                    <div class="case-content-area">
                        <div class="case-bg-image text-center">
                            <div class="case-single-img">
                                <!-- r1 -->
            <?php 
            if(!empty($casesingle_output['list1'])):
            foreach ($casesingle_output['list1'] as $casesingle_slider):?>
                                <div class="case-slider-images">
                                    <img src="<?php echo esc_url($casesingle_slider['slideimg']['url']); ?>" alt="Case" />
                                </div><?php endforeach; endif;?>
                            </div>
                            <div class="case-text-list text-center">
                                <ul><?php 
            if(!empty($casesingle_output['list2'])):
            foreach ($casesingle_output['list2'] as $casesingle_points):?>
                                    <li><span><?php echo esc_html($casesingle_points['text1']); ?> </span> <?php echo esc_html($casesingle_points['text2']); ?></li><?php endforeach; endif;?>
                                </ul>
                            </div>
                        </div>
                        <div class="case-text-area">
                            <div class="case-text-content">
                                <h3 class="case-title"><?php echo esc_html($casesingle_output['title']); ?></h3>
                                <p class="case-des">
                                    <?php echo esc_html($casesingle_output['des']); ?>
                                </p>
                            </div>
                            <div class="case-tags-list d-flex align-items-center">
                                <!-- r2 -->
                                <?php 
            if(!empty($casesingle_output['list3'])):
            foreach ($casesingle_output['list3'] as $casesingle_svg):?>
                                <div class="tags-list d-flex align-items-center">
                                    <div class="tags-img">
                                        <img src="<?php echo esc_url($casesingle_svg['herosvg']['url']); ?>" alt="Case-single-icon" />
                                    </div>
                                    <div class="tags-text">
                                        <h5 class="case1-title">
                                            <?php echo $casesingle_svg['pointt']; ?>
                                        </h5>
                                    </div>
                                </div><?php endforeach; endif;?>
                            </div>
                            <!-- r3 -->
                            <?php 
            if(!empty($casesingle_output['list4'])):
            foreach ($casesingle_output['list4'] as $casesingle_text):?>
                            <div class="<?php echo esc_html($casesingle_text['cclass']); ?>">
                                <h4 class="title"><?php echo esc_html($casesingle_text['ctitle']); ?></h4>
                                <p>
                                    <?php echo esc_html($casesingle_text['cdes']); ?>
                                </p>
                            </div><?php endforeach; endif;?>
                            <div class="case-arrow-area d-flex align-items-center justify-content-between">
                                <div class="case-arrow">
                                    <ul>
                                        <li>
                                            <a href="<?php echo esc_url($casesingle_output['pbtlink']['url']); ?>"><i class="ri-arrow-left-line"></i> Prev</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="case-arrow">
                                    <ul>
                                        <li>
                                            <a href="<?php echo esc_url($casesingle_output['nbtlink']['url']); ?>">Next <i class="ri-arrow-right-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Case Section End -->

    <?php }

}