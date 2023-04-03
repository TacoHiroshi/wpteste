<?php
/**
 * Plugin Name: Nvisor Core
 * Description: Nvisor Core Plugin Contains Elementor Widgets Specifically created for nvisor WordPress Theme.
 * Plugin URI:  wordpressriverthemes.com/nvisor-elem
 * Version:     1.2
 * Author:      WordPressRiver
 * Author URI:  https://themeforest.net/user/wordpressriver/portfolio
 * Text Domain: nvisor-core
 *
 * Elementor tested up to: 3.5.0
 * Elementor Pro tested up to: 3.5.0
 */


if ( !defined('ABSPATH') )
    die('-1');

// Make sure the same class is not loaded twice in free/premium versions.
if ( !class_exists( 'nvisor_core' ) ) {
	/**
	 * Main nvisor Core Class
	 *
	 * The main class that initiates and runs the nvisor Core plugin.
	 *
	 * @since 1.7.0
	 */
	final class nvisor_core {
		/**
		 * nvisor Core Version
		 *
		 * Holds the version of the plugin.
		 *
		 * @since 1.7.0
		 * @since 1.7.1 Moved from property with that name to a constant.
		 *
		 * @var string The plugin version.
		 */
		const VERSION = '1.0' ;
		/**
		 * Minimum Elementor Version
		 *
		 * Holds the minimum Elementor version required to run the plugin.
		 *
		 * @since 1.7.0
		 * @since 1.7.1 Moved from property with that name to a constant.
		 *
		 * @var string Minimum Elementor version required to run the plugin.
		 */
		const MINIMUM_ELEMENTOR_VERSION = '1.7.0';
		/**
		 * Minimum PHP Version
		 *
		 * Holds the minimum PHP version required to run the plugin.
		 *
		 * @since 1.7.0
		 * @since 1.7.1 Moved from property with that name to a constant.
		 *
		 * @var string Minimum PHP version required to run the plugin.
		 */
		const  MINIMUM_PHP_VERSION = '5.4' ;
        /**
         * Plugin's directory paths
         * @since 1.0
         */
        const CSS = null;
        const JS = null;
        const IMG = null;
        const VEND = null;

		/**
		 * Instance
		 *
		 * Holds a single instance of the `nvisor_core` class.
		 *
		 * @since 1.7.0
		 *
		 * @access private
		 * @static
		 *
		 * @var nvisor_core A single instance of the class.
		 */
		private static  $_instance = null ;
		/**
		 * Instance
		 *
		 * Ensures only one instance of the class is loaded or can be loaded.
		 *
		 * @since 1.7.0
		 *
		 * @access public
		 * @static
		 *
		 * @return nvisor_core An instance of the class.
		 */
		public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
			}
			return self::$_instance;
		}

		/**
		 * Clone
		 *
		 * Disable class cloning.
		 *
		 * @since 1.7.0
		 *
		 * @access protected
		 *
		 * @return void
		 */
		public function __clone() {
			// Cloning instances of the class is forbidden
			_doing_it_wrong( __FUNCTION__, esc_html__( 'Cheatin&#8217; huh?', 'nvisor-core' ), '1.7.0' );
		}

		/**
		 * Wakeup
		 *
		 * Disable unserializing the class.
		 *
		 * @since 1.7.0
		 *
		 * @access protected
		 *
		 * @return void
		 */
		public function __wakeup() {
			// Unserializing instances of the class is forbidden.
			_doing_it_wrong( __FUNCTION__, esc_html__( 'Cheatin&#8217; huh?', 'nvisor-core' ), '1.7.0' );
		}

		/**
		 * Constructor
		 *
		 * Initialize the nvisor Core plugins.
		 *
		 * @since 1.7.0
		 *
		 * @access public
		 */
		public function __construct() {
			$this->core_includes();
			$this->init_hooks();
			do_action( 'nvisor_core_loaded' );
		}

		/**
		 * Include Files
		 *
		 * Load core files required to run the plugin.
		 *
		 * @since 1.7.0
		 *
		 * @access public
		 */
		public function core_includes() {
		
		}

		/**
		 * Init Hooks
		 *
		 * Hook into actions and filters.
		 *
		 * @since 1.7.0
		 *
		 * @access private
		 */
		private function init_hooks() {
			add_action( 'init', [ $this, 'i18n' ] );
			add_action( 'plugins_loaded', [ $this, 'init' ] );
		}

		/**
		 * Load Textdomain
		 *
		 * Load plugin localization files.
		 *
		 * @since 1.7.0
		 *
		 * @access public
		 */
		public function i18n() {
			load_plugin_textdomain( 'nvisor-core', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
		}



		/**
		 * Init nvisor Core
		 *
		 * Load the plugin after Elementor (and other plugins) are loaded.
		 *
		 * @since 1.0.0
		 * @since 1.7.0 The logic moved from a snvisorlone function to this class method.
		 *
		 * @access public
		 */
		public function init() {

			if ( !did_action( 'elementor/loaded' ) ) {
				add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
				return;
			}

			// Check for required Elementor version

			if ( !version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
				add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
				return;
			}

			// Check for required PHP version

			if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
				add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
				return;
			}

			// Add new Elementor Categories
			add_action( 'elementor/init', [ $this, 'add_elementor_category' ] );

			// Register Widget Styles
			add_action( 'elementor/frontend/after_enqueue_styles', [ $this, 'enqueue_widget_styles' ] );
			add_action( 'elementor/editor/before_enqueue_scripts', [ $this, 'enqueue_widget_styles' ] );

			// Register Widget Scripts
			add_action( 'elementor/frontend/after_register_scripts', [ $this,'register_widget_scripts' ] );
			add_action( 'elementor/editor/before_enqueue_scripts', [ $this, 'register_widget_scripts' ] );

			// Register New Widgets
			add_action( 'elementor/widgets/widgets_registered', [ $this, 'on_widgets_registered' ] );
		}

		/**
		 * Admin notice
		 *
		 * Warning when the site doesn't have Elementor installed or activated.
		 *
		 * @since 1.1.0
		 * @since 1.7.0 Moved from a snvisorlone function to a class method.
		 *
		 * @access public
		 */
		public function admin_notice_missing_main_plugin() {
			$message = sprintf(
			/* translators: 1: nvisor Core 2: Elementor */
				esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'nvisor-core' ),
				'<strong>' . esc_html__( 'nvisor core', 'nvisor-core' ) . '</strong>',
				'<strong>' . esc_html__( 'Elementor', 'nvisor-core' ) . '</strong>'
			);
			printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
		}

		/**
		 * Admin notice
		 *
		 * Warning when the site doesn't have a minimum required Elementor version.
		 *
		 * @since 1.1.0
		 * @since 1.7.0 Moved from a snvisorlone function to a class method.
		 *
		 * @access public
		 */
		public function admin_notice_minimum_elementor_version() {
			$message = sprintf(
			/* translators: 1: nvisor Core 2: Elementor 3: Required Elementor version */
				esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'nvisor-core' ),
				'<strong>' . esc_html__( 'nvisor Core', 'nvisor-core' ) . '</strong>',
				'<strong>' . esc_html__( 'Elementor', 'nvisor-core' ) . '</strong>',
				self::MINIMUM_ELEMENTOR_VERSION
			);
			printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
		}

		/**
		 * Admin notice
		 *
		 * Warning when the site doesn't have a minimum required PHP version.
		 *
		 * @since 1.7.0
		 *
		 * @access public
		 */
		public function admin_notice_minimum_php_version() {
			$message = sprintf(
			/* translators: 1: nvisor Core 2: PHP 3: Required PHP version */
				esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'nvisor-core' ),
				'<strong>' . esc_html__( 'nvisor Core', 'nvisor-core' ) . '</strong>',
				'<strong>' . esc_html__( 'PHP', 'nvisor-core' ) . '</strong>',
				self::MINIMUM_PHP_VERSION
			);
			printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
		}

		/**
		 * Add new Elementor Categories
		 *
		 * Register new widget categories for nvisor Core widgets.
		 *
		 * @since 1.0.0
		 * @since 1.7.1 The method moved to this class.
		 *
		 * @access public
		 */
		public function add_elementor_category() {
			\Elementor\Plugin::instance()->elements_manager->add_category( 'nvisor', [
				'title' => __( 'nvisor Elements', 'nvisor-core' ),
			], 1 );
		}


		/**
		 * Register Widget Scripts
		 *
		 * Register custom scripts required to run Saasland Core.
		 *
		 * @since 1.6.0
		 * @since 1.7.1 The method moved to this class.
		 *
		 * @access public
		 */
		public function register_widget_scripts() {
			wp_register_script( 'main', plugins_url( '/assets/js/main.js', __FILE__ ), array( 'jquery' ), false, true );
		}




		/**
		 * Register Widget Styles
		 *
		 * Register custom styles required to run Saasland Core.
		 *
		 * @since 1.7.0
		 * @since 1.7.1 The method moved to this class.
		 *
		 * @access public
		 */
		
		public function enqueue_widget_styles() {

		}

		/**
		 * Register New Widgets
		 *
		 * Include nvisor Core widgets files and register them in Elementor.
		 *
		 * @since 1.0.0
		 * @since 1.7.1 The method moved to this class.
		 *
		 * @access public
		 */
		public function on_widgets_registered() {
			$this->include_widgets();
			$this->register_widgets();
		}

		/**
		 * Include Widgets Files
		 *
		 * Load nvisor Core widgets files.
		 *
		 * @since 1.0.0
		 * @since 1.7.1 The method moved to this class.
		 *
		 * @access private
		 */
		private function include_widgets() {
		    
		    // Home 1
					
			require_once( __DIR__ . '/widgets/nvisor-hero.php' );

			require_once( __DIR__ . '/widgets/nvisor-about.php' );

			require_once( __DIR__ . '/widgets/nvisor-service.php' );

			require_once( __DIR__ . '/widgets/nvisor-faq.php' );

			require_once( __DIR__ . '/widgets/nvisor-counter.php' );

			require_once( __DIR__ . '/widgets/nvisor-team.php' );

			require_once( __DIR__ . '/widgets/nvisor-banner.php' );

			require_once( __DIR__ . '/widgets/nvisor-testimonial.php' );

			require_once( __DIR__ . '/widgets/nvisor-blog.php' );

			// Home Version Two

			require_once( __DIR__ . '/widgets/nvisor-hero2.php' );

			require_once( __DIR__ . '/widgets/nvisor-about2.php' );

			require_once( __DIR__ . '/widgets/nvisor-service2.php' );

			require_once( __DIR__ . '/widgets/nvisor-provide.php' );

			require_once( __DIR__ . '/widgets/nvisor-case.php' );

			require_once( __DIR__ . '/widgets/nvisor-testimonial2.php' );

			require_once( __DIR__ . '/widgets/nvisor-business.php' );

			require_once( __DIR__ . '/widgets/nvisor-brand.php' );

			// About Page

			require_once( __DIR__ . '/widgets/nvisor-about3.php' );

			require_once( __DIR__ . '/widgets/nvisor-corporate.php' );

			require_once( __DIR__ . '/widgets/nvisor-survey.php' );

			require_once( __DIR__ . '/widgets/nvisor-provide2.php' );

			// Other Pages

			require_once( __DIR__ . '/widgets/nvisor-case2.php' );

			require_once( __DIR__ . '/widgets/nvisor-contact.php' );

			require_once( __DIR__ . '/widgets/nvisor-servicesingle.php' );

			require_once( __DIR__ . '/widgets/nvisor-casesingle.php' );


        }
			
		/**
		 * Register Widgets
		 *
		 * Register nvisor Core widgets.
		 *
		 * @since 1.0.0
		 * @since 1.7.1 The method moved to this class.
		 *
		 * @access private
		 */
		private function register_widgets() {

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_hero_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_about_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_service_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_faq_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_counter_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_team_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_banner_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_testimonial_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_blog_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_hero2_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_about2_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_service2_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_provide_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_case_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_testimonial2_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_business_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_brand_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_about3_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_corporate_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_survey_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_provide2_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_casesingle_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_case2_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_contact_Widget() );

			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_nvisor_servicesingle_Widget() );
			
			
		}
	}
} 
// Make sure the same function is not loaded twice in free/premium versions.

if ( !function_exists( 'nvisor_core_load' ) ) {
	/**
	 * Load nvisor Core
	 *
	 * Main instance of nvisor_core.
	 *
	 * @since 1.0.0
	 * @since 1.7.0 The logic moved from this function to a class method.
	 */
	function nvisor_core_load() {
		return nvisor_core::instance();
	}

	// Run nvisor Core
    nvisor_core_load();
}