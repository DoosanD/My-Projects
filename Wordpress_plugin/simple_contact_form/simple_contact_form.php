<?php

/**
 * Plugin Name: Simple Contact Form
 * Description: Simple Contact Form Tutorial
 * Author: Dusan Davic
 * Author URI: https://www.linkedin.com/in/du%C5%A1an-davi%C4%87/
 * Version: 1.0.4
 * Text Domain: simple_contact_form
 * 
 */

if (!defined('ABSPATH')) {

   echo 'What are you looking for?';
   exit;
}

class SIMPLE_CONTACT_FORM
{
   public function __construct()
   {
      // Create custom post type
      add_action('init', array($this, 'CREATE_CUSTOM_POST_TYPE'));

      // Add assets (js, css, etc)
      add_action('wp_enqueue_scripts', array($this, 'load_assets'));

      // Add Shortcode
      add_shortcode('contact-form', array($this, 'load_shortcode'));

      // Load javascript
      add_action('wp_footer', array($this, 'load_scripts'));

      // Register API
      add_action('rest_api_init', array($this, 'register_rest_api'));
   }

   public function CREATE_CUSTOM_POST_TYPE()
   {
      $args = array(

         'public' => true,
         'has_archive' => true,
         'supports' => array('title'),
         'exclude_from_search' => true,
         'publicly_queryable' => false,
         'capabilaty' => 'manage_options',
         'labels' => array(
            'name' => 'Contact Form',
            'singular_name' => 'Contact Form Entry',
         ),
         'menu_icon' => 'dashicons-media-text',

      );

      register_post_type('simple_contact_form', $args);
   }

   public function load_assets()
   {
      wp_enqueue_style(
         'simple-contact-form',
         plugin_dir_url(__FILE__) . 'css/simple-contact-form.css',
         array(),
         1,
         'all'
      );

      wp_enqueue_script(
         'simple-contact-form',
         plugin_dir_url(__FILE__) . 'js/simple-contact-form.js',
         array('jquery'),
         1,
         true
      );
   }

   public function load_shortcode()
   { ?>
      <div class="simple-contact-form">
         <form action="" id="simple-contact-form__form">
            <h2>Send us an Email</h2>
            <p>Enter your information:</p>
            <input name="name" type="text" placeholder="Name" class="form-control">
            <input name="email" type="email" placeholder="Email" class="form-control">
            <input name="number" type="tel" placeholder="Phone Number" class="form-control">
            <textarea name="message" placeholder="Type your message" class="form-control"></textarea>
            <button type="submit" class="btn">Send Message!</button>
         </form>
      </div>
   <?php }

   public function load_scripts()
   { ?>
      <script>
         var nonce = '<?php echo wp_create_nonce('wp_rest'); ?>';

         (function($) {

            $('#simple-contact-form__form').submit(function(event) {
               event.preventDefault();
               var form = $(this).serialize();
               console.log(form);
               $.ajax({
                  method: 'post',
                  url: '<?php echo get_rest_url(null, 'simple-contact-form/v1/send-email'); ?>',
                  headers: {
                     'X-WP-Nonce': nonce
                  },
                  data: form
               })
            });

         })(jQuery);
      </script>
<?php }

   public function register_rest_api()
   {
      register_rest_route('simple-contact-form/v1', 'send-email', array(
         'methods' => 'POST',
         'callback' => array($this, 'handle_contact_form')
      ));
   }

   public function handle_contact_form($data)
   {
      $headers = $data->get_headers();
      $params = $data->get_params();
      $nonce = $headers['x_wp_nonce'][0];

      if (!wp_verify_nonce($nonce, 'wp_rest')) {

         return new WP_REST_Response('Message not sent!', 422);
      }

      $post_id = wp_insert_post([

         'post_type' => 'simple_contact_form',
         'post_title' => 'Contact enquiry',
         'post_status' => 'publish'

      ]);

      if ($post_id) {
         return new WP_REST_Response('Thank you for your email', 200);
      }
   }
}

new SIMPLE_CONTACT_FORM;
