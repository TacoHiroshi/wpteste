<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor about2 Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_about2_Widget extends \Elementor\Widget_Base {

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
        return 'about2';
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
        return esc_html__( 'About Two Section', 'nvisor-core' );
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
            'content_section',
            [
                'label' => esc_html__( 'About Left Section', 'nvisor-core' ),
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

        $this->end_controls_section();

        $this->start_controls_section(
            'content_section1',
            [
                'label' => esc_html__( 'About Middle Section', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title1', [
                'label'         => esc_html__( 'Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'sub1', [
                'label'         => esc_html__( 'Sub Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'des1', [
                'label'         => esc_html__( 'Description', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'quote', [
                'label'         => esc_html__( 'Quote', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'quoteimg',
            [
                'label'     => esc_html__( 'Quote Img', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'content_section2',
            [
                'label' => esc_html__( 'About Counter Section', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater1 = new \Elementor\Repeater();

        $repeater1->add_control(
            'c_title',
            [
                'label'         => esc_html__( 'Title','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater1->add_control(
            'c_no',
            [
                'label'         => esc_html__( 'Number','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'list2',
            [
                'label'     => esc_html__( 'Counter', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater1->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add counter', 'nvisor-core' ),
                    ],
                ],
                'title_field' => '{{{ c_title }}}',
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

        $about2_output = $this->get_settings_for_display(); ?>

<!--  About Section Start  -->
<section class="about-section about-style-two">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 pt-esm-0">
                <div class="about-content about-content1">
                    <h5 class="st-subtitle2 text-uppercase"><?php echo esc_html($about2_output['title']); ?></h5>
                    <h2 class="st-title"><?php echo esc_html($about2_output['sub']); ?></h2>
                    <p class="ab-des"><?php echo esc_html($about2_output['des']); ?></p>
                    <div class="ab-check-list">
                        <ul>
                            <?php 
                            if(!empty($about2_output['list1'])):
                            foreach ($about2_output['list1'] as $about2_slider):?>       
                            <li><i class="<?php echo esc_attr($about2_slider['c_icon']); ?>"></i> <?php echo esc_html($about2_slider['c_title']); ?></li>
                            <?php endforeach; endif;?>
                        </ul>
                    </div>
                    <?php if(!empty($about2_output['btlink']['url'] )): ?>
                    <div class="ab-button">
                        <a class="theme-btn-one" href="<?php echo esc_url($about2_output['btlink']['url']); ?>"><span><?php echo esc_html($about2_output['bttext']); ?></span></a>
                    </div>
                    <?php endif;?>
                </div>
            </div>


            <div class="col-lg-5 pt-md-5 pt-sm-5 pt-esm-5">
                <div class="intro-content">
                    <h4><?php echo esc_html($about2_output['title1']); ?></h4>
                    <a><?php echo esc_html($about2_output['sub1']); ?></a>
                    <p class="intro-des">
                        <?php echo esc_html($about2_output['des1']); ?>
                    </p>
                    <?php if(!empty($about2_output['quote'] )): ?>
                    <div class="ab-quote-text d-flex align-items-center">
                        <div class="quote-image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/sources/img/quote-img.png'); ?>" alt="Quote">
                        </div>
                        <div class="quote-text">
                            <p class="quote-p"><?php echo esc_html($about2_output['quote']); ?></p>
                        </div>
                    </div>
                    <figure><img class="intro-auother" src="<?php echo esc_url($about2_output['quoteimg']['url']); ?>" alt="" /></figure>
                    <?php endif;?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="counter-area">
                    <div id="counter-section">
                         <?php 
            if(!empty($about2_output['list2'])):
            foreach ($about2_output['list2'] as $about2_slider1):?>
                        <div class="sc-counter">
                            <div class="sc-count"><span class="odometer" data-count="<?php echo esc_attr($about2_slider1['c_no']); ?>">0</span></div>
                            <span class="sub-title"><?php echo esc_html($about2_slider1['c_title']); ?></span>
                        </div>
                        <?php endforeach; endif;?>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--  About Section End  -->

    <?php }

}