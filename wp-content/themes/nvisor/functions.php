<?php

/**
 * nvisor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nvisor
 */

/**
 * Required Files
 */

require_once get_template_directory() . '/inc/nvisor-class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/inc/nvisor-class-wp-bootstrap-navwalker1.php';

require_once get_template_directory() . '/inc/redux/config.php';
require_once get_template_directory() . '/inc/redux/color.php';

// // /*TGM PLUGIN*/
require_once get_template_directory() . '/tgm-plugin/recommend_plugins.php';

/**
 * Enqueue Google Fonts
 */

function nvisor_fonts_url() {
    $font_url = '';
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'nvisor' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Mulish:400,500,600,700&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
        }
    return $font_url;
}

/**
 * Register and Enqueue Styles.
 */

function nvisor_register_styles() {
    
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/sources/css/bootstrap.min.css' );

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/sources/css/font-awesome.min.css' );

    wp_enqueue_style( 'remixicon', get_template_directory_uri() . '/sources/fonts/remixicon.css' );

    wp_enqueue_style( 'slick', get_template_directory_uri() . '/sources/css/slick.css' );

    wp_enqueue_style( 'animate', get_template_directory_uri() . '/sources/css/animate.css' );

    wp_enqueue_style( 'venobox', get_template_directory_uri() . '/sources/css/venobox.css' );

    wp_enqueue_style( 'nvisor-style', get_template_directory_uri() . '/sources/css/style.css' );

    wp_enqueue_style( 'nvisor-stylesheet', get_template_directory_uri() . '/sources/fonts/stylesheet.css' );

    wp_enqueue_style( 'nvisor-unittest', get_template_directory_uri() . '/sources/css/unit-test.css' );

    wp_enqueue_style( 'nvisor-responsive', get_template_directory_uri() . '/sources/css/responsive.css' );

    wp_enqueue_style( 'odometer', get_template_directory_uri() . '/sources/css/odometer.min.css' );

    wp_enqueue_style( 'sal', get_template_directory_uri() . '/sources/css/sal.css' );

    wp_enqueue_style( 'nvisor-fonts', nvisor_fonts_url(), array(), '1.0.0' );

    if( class_exists( 'ReduxFrameworkPlugin' ) ) { 

    global $nvisor_options; 

    if ($nvisor_options['main_color_nvisor'] == 1) {
    
    }

    elseif ($nvisor_options['main_color_nvisor'] == 2) {
    wp_enqueue_style( 'nvisor-color', get_template_directory_uri() . '/sources/css/theme-color/color-2.css' );
    } 

    elseif ($nvisor_options['main_color_nvisor'] == 3) {
    wp_enqueue_style( 'nvisor-color', get_template_directory_uri() . '/sources/css/theme-color/color-3.css' );
    } 

    elseif ($nvisor_options['main_color_nvisor'] == 4) {
    wp_enqueue_style( 'nvisor-color', get_template_directory_uri() . '/sources/css/theme-color/color-4.css' );
    } 

    elseif ($nvisor_options['main_color_nvisor'] == 5) {
    wp_enqueue_style( 'nvisor-color', get_template_directory_uri() . '/sources/css/theme-color/color-5.css' );
    } 

    elseif ($nvisor_options['main_color_nvisor'] == 6) {
    wp_enqueue_style( 'nvisor-color', get_template_directory_uri() . '/sources/css/theme-color/color-6.css' );
    } 

    } 

}
add_action( 'wp_enqueue_scripts', 'nvisor_register_styles' );


/**
 * Register and Enqueue Scripts.
 */

function nvisor_register_scripts() {

    wp_enqueue_script(
        'bootstrap',
        get_template_directory_uri() . '/sources/js/bootstrap.min.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'font-awesome',
        get_template_directory_uri() . '/sources/js/font-awesome.min.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'slick',
        get_template_directory_uri() . '/sources/js/slick.min.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'wow',
        get_template_directory_uri() . '/sources/js/wow.min.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'venobox',
        get_template_directory_uri() . '/sources/js/venobox.min.js',
        array( 'jquery' ),
        '',
        true
    );


   wp_enqueue_script(
        'jquery-waypoints',
        get_template_directory_uri() . '/sources/js/jquery.waypoints.min.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'jquery-counterup',
        get_template_directory_uri() . '/sources/js/jquery.counterup.min.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'nvisor-script',
        get_template_directory_uri() . '/sources/js/script.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'jquery-appear',
        get_template_directory_uri() . '/sources/js/jquery.appear.min.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'odometer',
        get_template_directory_uri() . '/sources/js/odometer.min.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'sal',
        get_template_directory_uri() . '/sources/js/sal.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'nvisor-color',
        get_template_directory_uri() . '/sources/js/color.js',
        array( 'jquery' ),
        '',
        true
    );

}

add_action( 'wp_enqueue_scripts', 'nvisor_register_scripts' );

/**
 * nvisor Theme Configuration
 */

function nvisor_theme_config(){

    // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        add_image_size( 'nvisor-blog', 403, 503, true);
        add_image_size( 'nvisor-blog-snvisorrd', 1500, 750, false);
        add_image_size( 'nvisor-blog-sidebar', 730, 400, false);

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',

        ) );

    if ( ! isset( $content_width ) ) $content_width = 900;

    $nvisor_lang = get_template_directory_uri() . '/languages';
    load_theme_textdomain('nvisor', $nvisor_lang);

    if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
            register_nav_menus(
                array(
                'main-menu' => esc_html__( 'Main Menu', 'nvisor' ),
                'main-menu-left' => esc_html__( 'Main Menu Left', 'nvisor' ),
                'main-menu-right' => esc_html__( 'Main Menu Right', 'nvisor' ),
                'footer-menu' => esc_html__( 'Footer Menu', 'nvisor' ),
                'footer-menu1' => esc_html__( 'Usefull Links', 'nvisor' ),
                'footer-menu2' => esc_html__( 'Solution Links', 'nvisor' ),
                )
            ); 
        } else
        {
            register_nav_menus(
                array(
                'main-menu' => esc_html__( 'Main Menu', 'nvisor' ),
                
                )
            ); 
        }

    

}

add_action( 'after_setup_theme', 'nvisor_theme_config' , 0 );

function nvisor_pagination() {

global $wp_query;

if ( $wp_query->max_num_pages <= 1 ) return; 

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
        'prev_text' => wp_specialchars_decode('<i class="fas fa-angle-double-left"></i>',ENT_QUOTES),
        'next_text' => wp_specialchars_decode('<i class="fas fa-angle-double-right"></i>',ENT_QUOTES),
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<nav aria-label="navigation"><ul class="pagination">';
        foreach ( $pages as $page ) {
                echo "<li class='page-item'>$page</li>";
        }
       echo '</ul></nav>';
        }
}

add_filter( 'widget_tag_cloud_args', 'nvisor_change_tag_cloud_font_sizes');
function nvisor_change_tag_cloud_font_sizes( array $args ) {
    $args['default'] = '13';
    $args['smallest'] = '13';
    $args['largest'] = '13';
    $args['unit'] = 'px';

    return $args;
}

/**
 * nvisor Register Widgets
 */

add_action( 'widgets_init', 'nvisor_widgets_init' );
function nvisor_widgets_init() {

        register_sidebar( array(
        'name' => esc_html__( 'Main Sidebar', 'nvisor' ),
        'id' => 'main-sidebar',
        'description' => esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'nvisor' ),
        'before_widget' => '<div id="%1$s" class="blog-category-item %2$s">',
    'after_widget'  => '</div>',
        'before_title'  => '<h3 class="title">',
        'after_title'   => '</h3>',
    ) );
}

// nvisor Comments Display

function nvisor_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment;
   $gravatar = get_avatar($comment,$size='100' ); ?>
    <div class="comment-auother-box d-flex align-items-center">
    <div class="author-image">
        <?php echo get_avatar($comment,$size='80' ); ?>
    </div>
    <div class="comment-text">
        <h5 class="auo-title"><?php printf( get_comment_author_link()) ?></h5>
        <span class="date text-uppercase"><?php the_time('F j, Y'); ?></span>
        <p class="des-comment">
            <?php comment_text() ?> 
        </p>
        <?php comment_reply_link(array_merge( $args, array('reply_text' => '<span>Reply</span>' , 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </div>
</div>
<?php
}

/**
 * nvisor PreDefined Imports
 */

function nvisor_import_files() {
    return array(
        array(
            'import_file_name'           => 'Home Version One',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'http://wordpressriverthemes.com/nvisor/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://wordpressriverthemes.com/nvisor/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://wordpressriverthemes.com/nvisor/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://wordpressriverthemes.com/nvisor/themeforest/Demo/redux.json',
                    'option_name' => 'nvisor_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/nvisor/themeforest/index-1.jpg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'nvisor' ),
            'preview_url'                => 'https://wordpressriverthemes.com/nvisor/',
        ),

        array(
            'import_file_name'           => 'Home Version Two',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'http://wordpressriverthemes.com/nvisor/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://wordpressriverthemes.com/nvisor/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://wordpressriverthemes.com/nvisor/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://wordpressriverthemes.com/nvisor/themeforest/Demo/redux.json',
                    'option_name' => 'nvisor_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/nvisor/themeforest/index-2.jpg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'nvisor' ),
            'preview_url'                => 'https://wordpressriverthemes.com/nvisor/home-version-two/',
        ),

        array(
            'import_file_name'           => 'OnePage Version One',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'http://wordpressriverthemes.com/nvisor/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://wordpressriverthemes.com/nvisor/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://wordpressriverthemes.com/nvisor/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://wordpressriverthemes.com/nvisor/themeforest/Demo/redux.json',
                    'option_name' => 'nvisor_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/nvisor/themeforest/index-1.jpg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'nvisor' ),
            'preview_url'                => 'https://wordpressriverthemes.com/nvisor/onepage-one/',
        ),

        array(
            'import_file_name'           => 'OnePage Version Two',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'http://wordpressriverthemes.com/nvisor/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'http://wordpressriverthemes.com/nvisor/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'http://wordpressriverthemes.com/nvisor/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'http://wordpressriverthemes.com/nvisor/themeforest/Demo/redux.json',
                    'option_name' => 'nvisor_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/nvisor/themeforest/index-2.jpg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'nvisor' ),
            'preview_url'                => 'https://wordpressriverthemes.com/nvisor/onepage-two/',
        ),

    );
}
add_filter( 'pt-ocdi/import_files', 'nvisor_import_files' );

function nvisor_ocdi_after_import( $selected_import ) {

    if ( 'Home Version One' === $selected_import['import_file_name'] ) {

        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        $main_menu_left = get_term_by( 'name', 'Main Menu Left', 'nav_menu' );
        $main_menu_right = get_term_by( 'name', 'Main Menu Right', 'nav_menu' );

        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version One' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }


    elseif ( 'Home Version Two' === $selected_import['import_file_name'] ) {

        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        $main_menu_left = get_term_by( 'name', 'Main Menu Left', 'nav_menu' );
        $main_menu_right = get_term_by( 'name', 'Main Menu Right', 'nav_menu' );

        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Two' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'OnePage Version One' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu_left = get_term_by( 'name', 'OnePage One Left', 'nav_menu' );
        $main_menu_right = get_term_by( 'name', 'OnePage One Right', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage One' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'OnePage Version Two' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Two', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Two' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    // Assign menus to their locations.
    $footer_menu = get_term_by( 'name', 'Footer Menu', 'nav_menu' );
    $solution_menu = get_term_by( 'name', 'Solution Links', 'nav_menu' );
    $usefull_menu = get_term_by( 'name', 'Usefull Links', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'main-menu' => $main_menu->term_id,
            'main-menu-left' => $main_menu_left->term_id,
            'main-menu-right' => $main_menu_right->term_id,
            'footer-menu' => $footer_menu->term_id,
            'footer-menu1' => $usefull_menu->term_id,
            'footer-menu2' => $solution_menu->term_id,
        )
    );
}
add_action( 'pt-ocdi/after_import', 'nvisor_ocdi_after_import' );