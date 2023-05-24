<?php

/**
 * Plugin Name: Simple Contact Form
 * Description: Simple Contact Form Tutorial
 * Author: Dusan Davic
 * Author URI: http://dusand.tk
 * Version: 1.0.0
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
      add_action('init', array($this, 'CREATE_CUSTOM_POST_TYPE'));
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
}

new SIMPLE_CONTACT_FORM;
