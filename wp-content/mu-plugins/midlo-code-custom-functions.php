<?php
/**
 * @link https://midlothiancode.com
 * @since 1.0.0
 * @package Midlo_Code_Custom_Functions
 *  
 * @wordpress-plugin
 * Plugin Name: Midlo Code Custom Functions
 * Plugin URI: https://midlothiancode.com
 * Description: Custom functions required for Midlothian Code
 * Version: 1.0.0
 * Author: Midlothian Code
 * Author URI: https://midlothiancode.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: midlo-code-custom-functions
 * Domain Path: /languages
 */
/**
 * Remove admin toolbar
 */
add_filter( 'show_admin_bar', '__return_false' );
