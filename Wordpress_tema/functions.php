<?php

/**
 * Movers Development functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Movers_Development
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.005');
}

if (!function_exists('md_theme_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function md_theme_setup()
    {
        /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Movers Development, use a find and replace
		 * to change 'md_theme' to the name of your theme in all the template files.
		 */
        load_theme_textdomain('md_theme', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
        add_theme_support('title-tag');

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'md_theme'),
                'menu-2' => esc_html__('sidebar', 'md_theme'),
                'footer-menu' => esc_html__('Footer Menu', 'md_theme')
            )
        );

        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'md_theme_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'md_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function md_theme_content_width()
{
    $GLOBALS['content_width'] = apply_filters('md_theme_content_width', 640);
}
add_action('after_setup_theme', 'md_theme_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function md_theme_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'md_theme'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'md_theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'md_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function md_theme_scripts()
{
    $alwayssameversion = null;
    wp_enqueue_style('md_theme-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('md_theme-style', 'rtl', 'replace');

    //ENQUEUE STYLE
    if (!is_front_page()) {
        wp_enqueue_style('inner-css', get_template_directory_uri() . '/assets/css/inner.css', array(), _S_VERSION);
    }

    wp_enqueue_style('home-css', get_template_directory_uri() . '/assets/css/home.css', array(), _S_VERSION);

    wp_enqueue_style('header-footer-css', get_template_directory_uri() . '/assets/css/header-footer.css', array(), _S_VERSION);
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), _S_VERSION);
    // 	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(),$alwayssameversion );
    //ENQUEUE SCRIPTS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), $alwayssameversion, true);

    //GOOGLE MAPS API FOR AUTOCOMPLETE
    wp_enqueue_script('google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDXEGs2c759ntgYjPUSSgubE-ufFzy-WK0&libraries=places', array(), $alwayssameversion,  true);

    //IF GOOGLE MAPS FOR MAP
    wp_enqueue_script('md_google', get_template_directory_uri() . '/assets/js/google-map.js', array('google-maps-api'), true, _S_VERSION);


    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), _S_VERSION, true);

    wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap', array(), $alwayssameversion);

    //If we need click in cf7 form
    wp_enqueue_script('bedroompick-script', get_template_directory_uri() . '/assets/js/bedroompick.js', array('jquery'), _S_VERSION, true);

    // 	wp_deregister_script( 'jquery-migrate' );

    // 	if(!wp_script_is( 'jquery-migrate', 'queue')) {
    // 		wp_enqueue_script( 'jquery-migrate-front', "https://code.jquery.com/jquery-migrate-3.3.2.js", array('jquery'), '1.0', true );
    // 	}

    //DEENQUEUE
    //wp_dequeue_style( 'mywptheme' );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'md_theme_scripts');


/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require_once get_template_directory() . '/inc/template-functions.php';

//MD ADDITIONALS
/**
 * Require MD additional functions
 */
require_once get_template_directory() . '/inc/md-custom-php.php';

//TGM 
/**
 * Call TGM
 */
require_once get_template_directory() . '/inc/tgm-activate.php';

// Function for custom error msg // DD
// 
// add_filter( 'gform_validation_message', function ( $message, $form ) {
//     if ( gf_upgrade()->get_submissions_block() ) {
//         return $message;
//     }

//     $message = "<div class='validation_error'><p>TEST There was a problem with your submission. Errors have been highlighted below.</p>";
//     $message .= '<ul>';

//     foreach ( $form['fields'] as $field ) {
//         if ( $field->failed_validation ) {
//             $message .= sprintf( '<li>%s - %s</li>', GFCommon::get_label( $field ), $field->validation_message );
//         }
//     }

//     $message .= '</ul></div>';

//     return $message;
// }, 10, 2 );
// 

// function wpb_hook_javascript() {
//   if (is_single ('297')) { 
//     
?>
 <script type="text/javascript">
    // 			  const addClass = () => {
    // 				var element = document.getElementById("secondary");
    // 				element.classList.add("container");
    // 				  alert("test");
    // 		     };
    // 				 addClass();
    // 				 document.getElementById("secondary").classList.add("container");
    // 				 alert("test")	
    //         
</script>
 <?php
//   }
// }
// add_action('wp_head', 'wpb_hook_javascript');