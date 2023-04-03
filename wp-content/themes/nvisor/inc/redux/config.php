<?php

if (!class_exists('Redux'))
    {
    return;
    }
function newIconFont() 
    { 
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/fontawesome-all.css' );
    }

add_action( 'redux/page/nvisor_options/enqueue', 'newIconFont' );

$opt_name = "nvisor_options";
$theme    = wp_get_theme();
$args = array(
    'opt_name' => $opt_name,
    'display_name' => $theme->get('Name') ,
    'display_version' => $theme->get('Version') ,
    'menu_type' => 'menu',
    'allow_sub_menu' => true,
    'menu_title'        => esc_html__( 'Nvisor Options', 'nvisor' ),
    'google_api_key' => '',
    'google_update_weekly' => false,
    'async_typography' => true,
    'admin_bar' => false,
    'admin_bar_icon' => '',
    'admin_bar_priority' => 50,
    'global_variable' => $opt_name,
    'dev_mode' => false,
    'update_notice' => false,
    'customizer' => false,
    'page_priority' => 3,
    'page_parent' => 'themes.php',
    'page_permissions' => 'manage_options',
    'menu_icon' => '',
    'last_tab' => '',
    'page_icon' => 'icon-themes',
    'page_slug' => 'themeoptions',
    'save_defaults' => true,
    'default_show' => false,
    'default_mark' => '',
    'show_import_export' => true
);
Redux::setArgs( $opt_name, $args );

Redux::setSection($opt_name, array(
    'title' => esc_html__('Top Bar', 'nvisor') ,
    'id' => esc_html__('topbar', 'nvisor') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'fields' => array(

        array(
            'title'     => esc_html__( 'Section 1', 'nvisor' ),
            'id'        => 't_1',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Image', 'nvisor' ),
            'id'        => 't_img1',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/sources/img/mail.svg'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'nvisor' ),
            'id'        => 't_text1',
            'type'      => 'text',
            'default'   => esc_html__( 'wordpressriver@gmail.com', 'nvisor' ),
            'indent'    => true
        ),


        array(
            'title'     => esc_html__( 'Section 2', 'nvisor' ),
            'id'        => 't_2',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Image', 'nvisor' ),
            'id'        => 't_img2',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/sources/img/phone.svg'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'nvisor' ),
            'id'        => 't_text2',
            'type'      => 'text',
            'default'   => esc_html__( '+123 - 987458741', 'nvisor' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Button Section', 'nvisor' ),
            'id'        => 't_3',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Button Text', 'nvisor' ),
            'id'        => 't_text3',
            'type'      => 'text',
            'default'   => esc_html__( 'Get In Touch', 'nvisor' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Button Link', 'nvisor' ),
            'id'        => 't_link3',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'nvisor' ),
            'indent'    => true
        ),

        
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Header', 'nvisor') ,
    'id' => esc_html__('header', 'nvisor') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'fields' => array(

        array(
            'title'     => esc_html__( 'Favicon', 'nvisor' ),
            'id'        => 'favicon',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/sources/img/favicon.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Logo', 'nvisor' ),
            'id'        => 'logo_start',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Logo', 'nvisor' ),
            'id'        => 'logo',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/sources/img/white-log.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Logo Version Two', 'nvisor' ),
            'id'        => 'sticky-logo',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/sources/img/logo-top.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon', 'nvisor' ),
            'id'        => 'headerv1_icon',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/sources/img/mail-1.svg'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'nvisor' ),
            'id'        => 'headerv1_title',
            'type'      => 'textarea',
            'default'   => esc_html__( 'Call Us', 'nvisor' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'nvisor' ),
            'id'        => 'headerv1_text',
            'type'      => 'textarea',
            'default'   => esc_html__( '+123 456 789', 'nvisor' ),
            'indent'    => true
        ),


    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Canvas', 'nvisor') ,
    'id' => esc_html__('canvasheader', 'nvisor') ,
    'icon' => 'fas fa-times-square',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Description', 'nvisor' ),
            'id'        => 'canvas_des',
            'type'      => 'textarea',
            'default'   => esc_html__( 'Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.', 'nvisor'),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 1', 'nvisor' ),
            'id'        => 'canvas_s1',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'nvisor' ),
            'id'        => 'canvas_title1',
            'type'      => 'text',
            'default'   => esc_html__( 'Address', 'nvisor' ),
            'indent'    => true
        ),
        
        array(
            'title'     => esc_html__( 'Text', 'nvisor' ),
            'id'        => 'canvas_text1',
            'type'      => 'textarea',
            'default'   => esc_html__( 'California, TX 70240', 'nvisor'),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 2', 'nvisor' ),
            'id'        => 'canvas_s2',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'nvisor' ),
            'id'        => 'canvas_title2',
            'type'      => 'text',
            'default'   => esc_html__( 'Email', 'nvisor' ),
            'indent'    => true
        ),
        
        array(
            'title'     => esc_html__( 'Text', 'nvisor' ),
            'id'        => 'canvas_text2',
            'type'      => 'textarea',
            'default'   => esc_html__( 'wordpressriver@gmail.com', 'nvisor'),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 3', 'nvisor' ),
            'id'        => 'canvas_s3',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'nvisor' ),
            'id'        => 'canvas_title3',
            'type'      => 'text',
            'default'   => esc_html__( 'Contact', 'nvisor' ),
            'indent'    => true
        ),
        
        array(
            'title'     => esc_html__( 'Text', 'nvisor' ),
            'id'        => 'canvas_text3',
            'type'      => 'textarea',
            'default'   => esc_html__( '+44-20-7328-4499', 'nvisor'),
            'indent'    => true
        ),

    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Footer', 'nvisor') ,
    'id' => esc_html__('footer', 'nvisor') ,
    'icon' => 'far fa-arrow-alt-circle-down',
    'fields' => array(

        array(
            'title'     => esc_html__( 'Footer Logo Title', 'nvisor' ),
            'id'        => 'footerlogo_title',
            'type'      => 'textarea',
            'default'   => esc_html__( 'NVISOR', 'nvisor' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Footer Logo', 'nvisor' ),
            'id'        => 'footerlogo',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/sources/img/main-logo.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Description', 'nvisor' ),
            'id'        => 'footerdes',
            'type'      => 'textarea',
            'default'   => ' Gleams steal into the inner sanctuary<br>throw myself down among thetall grass<br>by the trickling', 'nvisor',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'CopyRight Text', 'nvisor' ),
            'id'        => 'copyright',
            'type'      => 'textarea',
            'default'   => esc_html__( '&copy; Copyright 2023. Nvisor WordPress Theme By WordPressRiver', 'nvisor' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Menu Location', 'nvisor' ),
            'id'        => 'footermenu',
            'type'      => 'text',
            'default'   => esc_html__( 'Footer Menu', 'nvisor' ),
            'readonly' => true,
            'indent'    => true
        ),

    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Social Icons', 'nvisor') ,
    'id' => esc_html__('socialicons', 'nvisor') ,
    'icon' => 'fas fa-heading',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Section One', 'nvisor' ),
            'id'        => 'se1',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'nvisor' ),
            'id'        => 'sicon1',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'nvisor' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fab fa-facebook-f', 'nvisor' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Link', 'nvisor' ),
            'id'        => 'sl1',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'nvisor' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section Two', 'nvisor' ),
            'id'        => 'se2',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'nvisor' ),
            'id'        => 'sicon2',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'nvisor' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fab fa-twitter', 'nvisor' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Link', 'nvisor' ),
            'id'        => 'sl2',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'nvisor' ),
            'indent'    => true
        ),

         array(
            'title'     => esc_html__( 'Section Three', 'nvisor' ),
            'id'        => 'se3',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'nvisor' ),
            'id'        => 'sicon3',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'nvisor' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fab fa-instagram', 'nvisor' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Link', 'nvisor' ),
            'id'        => 'sl3',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'nvisor' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'nvisor' ),
            'id'        => 'sicon4',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'nvisor' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fab fa-linkedin-in', 'nvisor' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Link', 'nvisor' ),
            'id'        => 'sl4',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'nvisor' ),
            'indent'    => true
        ),


        
    )
));


Redux::setSection($opt_name, array(
    'title' => esc_html__('Footer Links 1', 'nvisor') ,
    'id' => esc_html__('companylinkshead', 'nvisor') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'nvisor' ),
            'id'        => 'footermenu1',
            'type'      => 'text',
            'default'   => esc_html__( 'Usefull Link', 'nvisor' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Menu Location', 'nvisor' ),
            'id'        => 'c1',
            'type'      => 'text',
            'default'   => esc_html__( 'Usefull Links', 'nvisor' ),
            'readonly' => true,
            'indent'    => true
        ),

    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Footer Links 2', 'nvisor') ,
    'id' => esc_html__('solutionlinkshead', 'nvisor') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'nvisor' ),
            'id'        => 'footermenu2',
            'type'      => 'text',
            'default'   => esc_html__( 'Solution Links', 'nvisor' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Menu Location', 'nvisor' ),
            'id'        => 'sol1',
            'type'      => 'text',
            'default'   => esc_html__( 'Solution Links', 'nvisor' ),
            'readonly' => true,
            'indent'    => true
        ),

    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Contact Info', 'nvisor') ,
    'id' => esc_html__('contactinfofooter', 'nvisor') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'nvisor' ),
            'id'        => 'contactinfo1',
            'type'      => 'text',
            'default'   => esc_html__( 'Contacts', 'nvisor' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 1', 'nvisor' ),
            'id'        => 'c_1',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'nvisor' ),
            'id'        => 'footericon1',
            'type'      => 'text',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'nvisor' ),
            'default'   => esc_html__( 'fas fa-map-marker-alt', 'nvisor' ),
            'indent'    => true
        ),
        
        array(
            'title'     => esc_html__( 'Text', 'nvisor' ),
            'id'        => 'footertext1',
            'type'      => 'textarea',
            'default'   => esc_html__( '22/1 Dirstrck zip 9100, Melborn Australia', 'nvisor'),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 2', 'nvisor' ),
            'id'        => 'c_2',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'nvisor' ),
            'id'        => 'footericon2',
            'type'      => 'text',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'nvisor' ),
            'default'   => esc_html__( 'fa fa-comment-alt', 'nvisor' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'nvisor' ),
            'id'        => 'footertext2',
            'type'      => 'textarea',
            'default'   => esc_html__( '+123 456 789', 'nvisor' ),
            'indent'    => true
        ),

        
        array(
            'title'     => esc_html__( 'Section 3', 'nvisor' ),
            'id'        => 'c_3',
            'type'      => 'section',
            'indent'    => true
        ),
        
        array(
            'title'     => esc_html__( 'Icon Class', 'nvisor' ),
            'id'        => 'footericon3',
            'type'      => 'text',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'nvisor' ),
            'default'   => esc_html__( 'fa fa-envelope-open', 'nvisor' ),
            'indent'    => true
        ),
        
        array(
            'title'     => esc_html__( 'Text', 'nvisor' ),
            'id'        => 'footertext3',
            'type'      => 'textarea',
            'default'   => esc_html__( 'wordpressriver@gmail.com', 'nvisor' ),
            'indent'    => true
        ),


    )
));


Redux::setSection($opt_name, array(
    'title' => esc_html__('Styling', 'nvisor') ,
    'id' => esc_html__('nvisor_color', 'nvisor') ,
    'icon' => 'fas fa-edit',
    'fields' => array(
    array(
            'id'        => 'main_color_nvisor',
            'title'     => esc_html__( 'Main Theme Color', 'nvisor' ),
            'subtitle'  => esc_html__( 'The main color of the site.', 'nvisor' ),
            'type'      => 'select',
            'options'   => array(
                '2'     => esc_html__( 'Strong Blue', 'nvisor' ),
                '1'     => esc_html__( 'Default Colour', 'nvisor' ),
                '3'     => esc_html__( 'Sky Blue', 'nvisor' ),
                '4'     => esc_html__( 'Pink', 'nvisor' ),
                '5'     => esc_html__( 'Green', 'nvisor' ),
                '6'     => esc_html__( 'Purple', 'nvisor' ),
                '7'     => esc_html__( 'Custom Colors', 'nvisor' ),
            ),
            'default'   => '1',
            'indent'    => true,
        ),

    array(
            'title'     => esc_html__( 'Custom Color Option', 'nvisor' ),
            'id'        => 'customcolors',
            'type'      => 'section',
            'indent'    => true,
            'required'  => array( 'main_color_nvisor', 'equals', '7' ),
        ),

    array(
            'title'     => esc_html__( 'Choose Main Theme Color', 'nvisor' ),
            'id'        => 'colorcode',
            'type'      => 'color',
            'default'  => '#086AD8',
            'validate' => 'color',
            'transparent' => false,
            'required'  => array( 'main_color_nvisor', 'equals', '7' ),
        ),

    array(
        'title'     => esc_html__( 'Choose Theme Gradient Color', 'nvisor' ),
        'id'       => 'color-gra',
        'type'     => 'color_gradient',
        'default'  => array(
            'from' => 'rgba(9,70,139,1)',
            'to'   => 'rgba(30,132,246,1)', 
        ),
    'transparent' => false,
    'required'  => array( 'main_color_nvisor', 'equals', '7' ),
    ),
)
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('BreadCrumb', 'nvisor') ,
    'id' => esc_html__('breadcrumg', 'nvisor') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'fields' => array(

        array(
            'title'     => esc_html__( 'Background Image', 'nvisor' ),
            'id'        => 'breadimg',
            'type'      => 'media',
            'indent'    => true
        ),
        
    )
));