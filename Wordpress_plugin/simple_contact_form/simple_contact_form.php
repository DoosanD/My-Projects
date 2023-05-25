<?php

/**
 * Plugin Name: Simple Contact Form
 * Description: Simple Contact Form Tutorial
 * Author: Dusan Davic
 * Author URI: http://dusand.tk
 * Version: 1.0.2
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
         <form action="" class="simple-contact-form__form">
            <h2>Send us an Email</h2>
            <p>Enter your information:</p>
            <input name="name" type="text" placeholder="Name" class="form-control">
            <input name="email" type="email" placeholder="Email" class="form-control">
            <input name="number" type="tel" placeholder="Phone Number" class="form-control">
            <textarea name="message" placeholder="Type your message" class="form-control"></textarea>
            <button class="btn">Send Message!</button>
         </form>
      </div>
<?php }
}

new SIMPLE_CONTACT_FORM;
