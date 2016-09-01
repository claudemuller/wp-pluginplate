<?php
/*
 * Plugin Name:       PluginPlate
 * Plugin URI:        http://github.com/mediarocketstudio/wp-pluginplate
 * Description:       WordPress OOP Plugin Boilerplate
 * Version:           0.1.0
 * Author:            Claude Muller
 * Author URI:        http://mediarocket.co.za
 * Text Domain:       mr-pluginplate-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
    die;
}

require_once plugin_dir_path( __FILE__ ) . 'includes/class-pluginplate.php';

function run_pluginplate() {
    $pp = new Pluginplate();
    $pp->run();
}

run_pluginplate();

