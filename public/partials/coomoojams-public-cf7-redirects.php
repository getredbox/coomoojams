<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.duaneleem.com
 * @since      1.0.0
 *
 * @package    Coomoojams
 * @subpackage Coomoojams/public/partials
 */

if (!class_exists("Coomoojams_CF7_Redirects")) {
  class Coomoojams_CF7_Redirects {
    public function __construct() {
      // Nothing for now
    } // __construction()
  
    public function setRedirects() {
      ?>
        <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            location = '/contact-us/inquiry-received/';
        }, false );
        </script>
      <?php
    }
  } // Coomoojams_CF7_Redirects
} // if

