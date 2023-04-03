<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor nvisor Hero Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_nvisor_servicesingle_Widget extends \Elementor\Widget_Base {

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
        return 'servicesingle';
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
        return esc_html__( 'Service Single Section', 'nvisor-core' );
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
                'label' => esc_html__( 'Service Single Sidebar', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'sidebar_heading', [
                'label'         => esc_html__( 'Sidebar Heading', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );


        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'sidebar_title', [
                'label'         => esc_html__( 'Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'sidebar_link',
            [
                'label'         => esc_html__( 'Link', 'nvisor-core' ),
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
            'list',
            [
                'label'     => esc_html__( 'Sidebar List', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add List', 'nvisor-core' ),
                    ],
                ],
                'title_field' => '{{{ sidebar_title }}}',
            ]
        );

        $this->add_control(
            'sidebar_download_heading', [
                'label'         => esc_html__( 'Sidebar Heading Two', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'sidebar_download_text', [
                'label'         => esc_html__( 'Sidebar Help Text', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'sidebar_download_link',
            [
                'label'         => esc_html__( 'Link', 'nvisor-core' ),
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
            'sidebar_help_heading', [
                'label'         => esc_html__( 'Sidebar Heading Three', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'sidebar_help_des', [
                'label'         => esc_html__( 'Description', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'sidebar_help_bttext', [
                'label'         => esc_html__( 'Button Text', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'sidebar_help_btlink',
            [
                'label'         => esc_html__( 'Link', 'nvisor-core' ),
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
            'content_section1',
            [
                'label' => esc_html__( 'Service Single Section', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'img1',
            [
                'label'     => esc_html__( 'Image One', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'service_heading1', [
                'label'         => esc_html__( 'Service Heading', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'service_des1', [
                'label'         => esc_html__( 'Service Description', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'img2',
            [
                'label'     => esc_html__( 'Image Two', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'service_heading2', [
                'label'         => esc_html__( 'Service Heading Two', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'service_des2', [
                'label'         => esc_html__( 'Service Description Two', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
            ]
        );

        $repeater1 = new \Elementor\Repeater();

        $repeater1->add_control(
            'benefit_title', [
                'label'         => esc_html__( 'Title', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater1->add_control(
            'benefit_no', [
                'label'         => esc_html__( 'Number', 'nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'list1',
            [
                'label'     => esc_html__( 'Benefit List', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater1->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add Benefit', 'nvisor-core' ),
                    ],
                ],
                'title_field' => '{{{ benefit_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'content_section3',
            [
                'label' => esc_html__( 'Faq Section', 'nvisor-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
       $repeater2 = new \Elementor\Repeater();

       $repeater2->add_control(
            'faq_id',
            [
                'label'         => esc_html__( 'Faq ID','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater2->add_control(
            'faq_id1',
            [
                'label'         => esc_html__( 'Collapse ID','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater2->add_control(
            'faq_class',
            [
                'label'         => esc_html__( 'Active Class','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater2->add_control(
            'faq_btclass',
            [
                'label'         => esc_html__( 'Button Class','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater2->add_control(
            'faq_title1',
            [
                'label'         => esc_html__( 'Title','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater2->add_control(
            'faq_des1',
            [
                'label'         => esc_html__( 'Description','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'list2',
            [
                'label'     => esc_html__( 'Faq', 'nvisor-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater2->get_controls(),
                'default'   => [
                    [
                        'list_title' => esc_html__( 'Add faq', 'nvisor-core' ),
                    ],
                ],
                'title_field' => '{{{ faq_title1 }}}',
            ]
        );

        $this->add_control(
            'faq_bttext',
            [
                'label'         => esc_html__( 'Button Text','nvisor-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'faq_btlink',
            [
                'label'         => esc_html__( 'Link', 'nvisor-core' ),
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

        $servicesingle_output = $this->get_settings_for_display(); ?>

        <!-- Page Section Start -->
<section class="page-service-single-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-service-single-wrapper">
                    <div class="wrapper-services-list">
                        <h4 class="service-title"><?php echo esc_html($servicesingle_output['sidebar_heading']);?></h4>
                        <ul>
                            <?php 
            if(!empty($servicesingle_output['list'])):
            foreach ($servicesingle_output['list'] as $servicesingle_sidebar):?>
                            <li>
                                <a href="<?php echo esc_url($servicesingle_sidebar['sidebar_link']['url']);?>"
                                    ><svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.93854 8.147L0.792541 0.999999L1.49954 0.292999L9.35254 8.147L1.49854 16L0.791539 15.293L7.93854 8.147Z" fill="black" />
                                    </svg>
                                   <?php echo esc_html($servicesingle_sidebar['sidebar_title']);?></a
                                >
                            </li>
                            <?php endforeach; endif;?>
                        </ul>
                    </div>
                    <div class="download-content-box">
                        <h5 class="down-title"><?php echo esc_html($servicesingle_output['sidebar_download_heading']);?></h5>
                        <div class="download-text d-flex align-items-center">
                            <div class="down-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.28479 18.636C8.49479 18.513 8.72429 18.393 8.97329 18.279C8.76294 18.5926 8.53768 18.896 8.29829 19.188C7.87829 19.6935 7.55129 19.962 7.34579 20.046C7.32873 20.0532 7.31119 20.0592 7.29329 20.064C7.27832 20.0432 7.26526 20.0211 7.25429 19.998C7.17029 19.833 7.17329 19.674 7.31429 19.458C7.47329 19.2105 7.79279 18.927 8.28479 18.636ZM11.9673 16.1655C11.7888 16.203 11.6118 16.2405 11.4333 16.2825C11.6977 15.7645 11.9478 15.2393 12.1833 14.7075C12.4204 15.1469 12.6756 15.5763 12.9483 15.9945C12.6228 16.0425 12.2943 16.0995 11.9673 16.1655ZM15.7548 17.574C15.5218 17.3861 15.3037 17.1805 15.1023 16.959C15.4443 16.9665 15.7533 16.992 16.0203 17.04C16.4958 17.1255 16.7193 17.2605 16.7973 17.3535C16.8219 17.3795 16.8358 17.4137 16.8363 17.4495C16.831 17.5553 16.8001 17.6583 16.7463 17.7495C16.716 17.8226 16.6675 17.8866 16.6053 17.9355C16.5743 17.9545 16.5378 17.9624 16.5018 17.958C16.3668 17.9535 16.1148 17.859 15.7548 17.574ZM12.4173 10.455C12.3573 10.821 12.2553 11.241 12.1173 11.6985C12.0664 11.5272 12.0219 11.3541 11.9838 11.1795C11.8698 10.65 11.8533 10.2345 11.9148 9.94651C11.9718 9.68101 12.0798 9.57451 12.2088 9.52201C12.278 9.49151 12.3513 9.4713 12.4263 9.46201C12.4458 9.50701 12.4683 9.60001 12.4743 9.75901C12.4818 9.94201 12.4638 10.1745 12.4173 10.4565V10.455Z"
                                        fill="white"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M6 0H13.9395C14.3373 8.49561e-05 14.7188 0.158176 15 0.4395L20.5605 6C20.8418 6.28124 20.9999 6.66271 21 7.0605V21C21 21.7956 20.6839 22.5587 20.1213 23.1213C19.5587 23.6839 18.7956 24 18 24H6C5.20435 24 4.44129 23.6839 3.87868 23.1213C3.31607 22.5587 3 21.7956 3 21V3C3 2.20435 3.31607 1.44129 3.87868 0.87868C4.44129 0.316071 5.20435 0 6 0V0ZM14.25 2.25V5.25C14.25 5.64782 14.408 6.02936 14.6893 6.31066C14.9706 6.59196 15.3522 6.75 15.75 6.75H18.75L14.25 2.25ZM6.2475 20.502C6.3825 20.772 6.5925 21.0165 6.9045 21.1305C7.215 21.243 7.5225 21.1905 7.7745 21.0855C8.2515 20.8905 8.727 20.4315 9.1635 19.9065C9.663 19.305 10.188 18.516 10.695 17.6415C11.6738 17.3514 12.6761 17.1476 13.6905 17.0325C14.1405 17.607 14.6055 18.102 15.0555 18.4575C15.4755 18.7875 15.96 19.062 16.4565 19.083C16.7269 19.0964 16.9947 19.0239 17.2215 18.876C17.454 18.7245 17.6265 18.5055 17.7525 18.252C17.8875 17.9805 17.97 17.697 17.9595 17.4075C17.95 17.1221 17.8443 16.8482 17.6595 16.6305C17.3205 16.2255 16.7655 16.0305 16.2195 15.933C15.5572 15.8304 14.8851 15.8052 14.217 15.858C13.6528 15.0604 13.1608 14.214 12.747 13.329C13.122 12.339 13.4025 11.403 13.527 10.638C13.581 10.311 13.6095 9.999 13.599 9.717C13.5971 9.43708 13.532 9.1612 13.4085 8.91C13.3373 8.77137 13.2362 8.65031 13.1125 8.55561C12.9887 8.46091 12.8454 8.39495 12.693 8.3625C12.39 8.298 12.078 8.3625 11.7915 8.478C11.226 8.703 10.9275 9.183 10.815 9.7125C10.7055 10.2225 10.755 10.8165 10.884 11.4165C11.016 12.0255 11.241 12.6885 11.529 13.359C11.0683 14.5047 10.5363 15.6204 9.936 16.6995C9.16296 16.9427 8.41782 17.267 7.713 17.667C7.158 17.997 6.6645 18.387 6.3675 18.8475C6.0525 19.3365 5.955 19.9185 6.2475 20.502Z"
                                        fill="white"
                                    />
                                </svg>
                            </div>
                            <div class="down-text">
                                <a href="<?php echo esc_url($servicesingle_output['sidebar_download_link']['url']);?>"><h4 class="load-title"><?php echo esc_html($servicesingle_output['sidebar_download_text']);?></h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="services-contact-box">
                        <h4 class="contact-title"><?php echo esc_html($servicesingle_output['sidebar_help_heading']);?></h4>
                        <p><?php echo esc_html($servicesingle_output['sidebar_help_des']);?></p>
                        <div class="contact-button">
                            <a class="theme-btn-two2" href="<?php echo esc_url($servicesingle_output['sidebar_help_btlink']['url']);?>"><span><?php echo esc_html($servicesingle_output['sidebar_help_bttext']);?></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="page-service-content-area">
                    <div class="page-service-box">
                        <img src="<?php echo esc_url($servicesingle_output['img1']['url']);?>" alt="Services" />
                        <h3 class="service-title"><?php echo esc_html($servicesingle_output['service_heading1']);?></h3>
                        <p class="service-des">
                            <?php echo esc_html($servicesingle_output['service_des1']);?>
                        </p>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="service-image">
                                <h4 class="ser-title"><?php echo esc_html($servicesingle_output['service_heading2']);?></h4>
                                <img src="<?php echo esc_url($servicesingle_output['img2']['url']);?>" alt="Service" />
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <?php 
            if(!empty($servicesingle_output['list1'])):
            foreach ($servicesingle_output['list1'] as $servicesingle_benefit):?>
                            <div class="service-text">
                                <span class="nm-list"><?php echo esc_html($servicesingle_benefit['benefit_no']);?></span>
                                <h5 class="nm-title">
                                   <?php echo $servicesingle_benefit['benefit_title'];?>
                                </h5>
                            </div>
                            <?php endforeach; endif;?>
                        </div>
                        <p class="service-des1">
                            <?php echo esc_html($servicesingle_output['service_des2']);?>
                        </p>
                    </div>
                    <div class="provide-content-two service-content-accordion service-content-accordion1">
                        <div id="accordion">
                            <div class="accordion" id="accordionExample">
                                <?php 
                if(!empty($servicesingle_output['list2'])):
                foreach ($servicesingle_output['list2'] as $faq_slide):?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="<?php echo esc_attr($faq_slide['faq_id']);?>">
                                        <button
                                            class="<?php echo esc_attr($faq_slide['faq_btclass']);?>"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#<?php echo esc_attr($faq_slide['faq_id1']);?>"
                                            aria-expanded="true"
                                            aria-controls="<?php echo esc_attr($faq_slide['faq_id1']);?>"
                                        >
                                            <?php echo esc_attr($faq_slide['faq_title1']);?>
                                        </button>
                                    </h2>
                                    <div id="<?php echo esc_attr($faq_slide['faq_id1']);?>" class="accordion-collapse collapse <?php echo esc_attr($faq_slide['faq_class']);?>" aria-labelledby="<?php echo esc_attr($faq_slide['faq_id']);?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong
                                                ><?php echo esc_attr($faq_slide['faq_des1']);?></strong
                                            >
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; endif;?>                     
                            </div>
                        </div>
                    </div>
                    <div class="service-button">
                        <a class="theme-btn-two" href="<?php echo esc_url($servicesingle_output['faq_btlink']['url']);?>"><span><?php echo esc_html($servicesingle_output['faq_bttext']);?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Section End -->

    <?php }

}