<?php
 /**
 *
 * @package   karakata Functionality
 * @author    Phillip Chadwick <phillipchadwick@hotmail.com>
 * @license   GPL-2.0+
 * @copyright 2020 Phillip Chadwick
 *
 * @wordpress-plugin
 * Plugin Name: Karakata Functionality
 * Description: Adds custom post-types and taxonomies for the karakata wp theme
 * Version:     1.0.0
 * Author:      Phillip Chadwick
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define plugin directory
 *
 * @since 1.0.0
 */
define( 'RF_DIR', dirname( __FILE__ ) );

/**
 * General housekeeping and plugin activation tasks
 *
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/general.php' );
register_activation_hook( __FILE__, array( 'RF_General', 'plugin_activation' ) );

/**
 * Post types
 *
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/post-types.php' );

/**
 * Taxonomies
 *
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/taxonomies.php' );
