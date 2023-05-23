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
      echo '<script>alert("ITS ALIVE")</script>';
   }
}

new SIMPLE_CONTACT_FORM;
