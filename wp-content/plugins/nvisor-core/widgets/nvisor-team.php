<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor team Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_team_Widget extends \Elementor\Widget_Base {

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
        return 'team';
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
        return esc_html__( 'team Section', 'nvisor-core' );
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
                'label' => esc_html__( 'Team Section', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'class',
            [
                'label'         => esc_html__( 'Class','nvisor-core' ),
                'default'         => esc_html__( 'team-section','nvisor-core' ),
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

        $this->add_control(
            'des',
            [
                'label'         => esc_html__( 'Description','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
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
            'class',
            [
                'label'         => esc_html__( 'Class','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

       $repeater->add_control(
            'name',
            [
                'label'         => esc_html__( 'Name','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'job',
            [
                'label'         => esc_html__( 'Job','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'list1',
            [
                'label'     => esc_html__( 'team', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add Team', 'nvisor-core' ),
                    ],
                ],
                'title_field' => '{{{ name }}}',
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

        $team_output = $this->get_settings_for_display(); ?>

        <!-- Team Section Start-->
<section class="<?php echo esc_html($team_output['class']);?>">
    <?php if(!empty($team_output['title'] || $team_output['sub'] )): ?>
    <div class="container">
        <h5 class="st-subtitle2 text-uppercase"><?php echo esc_html($team_output['title']);?></h5>
        <div class="row align-items-center team-bottom1">
            <div class="col-lg-5">
                <h2 class="st-title"><?php echo esc_html($team_output['sub']);?></h2>
            </div>
            <div class="col-lg-4">
                <p><?php echo esc_html($team_output['des']);?></p>
            </div>
            <div class="col-lg-3">
                <div class="team-button text-end">
                    <a href="<?php echo esc_url($team_output['btlink']);?>"><button class="theme-btn-one btn btn-danger more-about-btn" type="button">
                        <span><?php echo esc_html($team_output['bttext']);?></span>
                    </button></a>
                </div>
            </div>
        </div>
    </div>
    <?php endif;?>
    <div class="container team-container">
        <div class="row team-left">
            <?php 
                if(!empty($team_output['list1'])):
                foreach ($team_output['list1'] as $team_slide):?>
            <div class="col-lg-3 col-md-6 mb-sm-4 mb-esm-4">
                <div class="<?php echo esc_html($team_slide['class']);?>">
                    <div class="team-content">
                        <figure>
                            <img src="<?php echo esc_url($team_slide['heroimg']['url']);?>" alt="Team" />
                        </figure>
                        <div class="text">
                            <h3 class="team-title"><?php echo esc_html($team_slide['name']);?></h3>
                            <p class="text-uppercase"><?php echo esc_html($team_slide['job']);?></p>
                        </div>
                    </div>
                    <div class="team-overlay"></div>
                </div>
            </div>
             <?php endforeach; endif;?>
        </div>
    </div>
</section>
<!-- Team Section End-->
    <?php }

}