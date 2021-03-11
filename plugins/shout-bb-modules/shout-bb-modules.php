<?php
/**
 * Plugin Name: Shout Custom Beaver Builder Modules
 * Plugin URI: http://www.isachen.com
 * Description: Custom modules for the Beaver Builder Plugin.
 * Version: 1.0
 * Author: Isabella Chen
 * Author URI: http://www.isachen.com
 */
define( 'MY_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'MY_MODULES_URL', plugins_url( '/', __FILE__ ) );

function my_load_module_examples() {
  if ( class_exists( 'FLBuilder' ) ) {
      // Include your custom modules here.
      require_once 'basic-example/basic-example.php';
  }
}
add_action( 'init', 'my_load_module_examples' );

