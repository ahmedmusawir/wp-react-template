<?php
/**
 *
 * Plugin Name: WP React Template
 * Plugin URI: https://cyberizegroup.com
 * Description: Displays a React App where this shortcode is placed. One per page. 
 * Version:  3.0
 * Author URI:  https://www.linkedin.com/in/ahmedmusawir
 * License:  GPL-2.0+
 *
 */

//If this file is called directly, abort.
if (!defined('WPINC')) {
 die("Cannot Access Directly");
}

// define('CYBERIZE_PLUGIN_DIR', plugins_url('', __FILE__));

require __DIR__ . '/vendor/autoload.php';

// Enqueue Scripts & Styles
// $enqueue = new CPF\Base\Enqueue();
// $enqueue->initialize();

// TESTING DYNAMIC EXP DATE SHORTCODE
$social_shortcode = new CPF\Shortcode\DateExpireTomorrow();
// TESTING FIXED FOOTER CODE
$fixed_footer_ac = new CPF\Widgets\StickyFooterFixed();