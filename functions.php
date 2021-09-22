<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'TRAVELO_DIR_URI' ) ) {
	define( 'TRAVELO_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'TRAVELO_DIR_ASSETS_URI' ) ) {
	define( 'TRAVELO_DIR_ASSETS_URI', TRAVELO_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'TRAVELO_DIR_CSS_URI' ) ) {
	define( 'TRAVELO_DIR_CSS_URI', TRAVELO_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'TRAVELO_DIR_JS_URI' ) ) {
	define( 'TRAVELO_DIR_JS_URI', TRAVELO_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'TRAVELO_DIR_IMGS_URI' ) ) {
	define( 'TRAVELO_DIR_IMGS_URI', TRAVELO_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'TRAVELO_DIR_ICON_IMG_URI' ) ) {
	define( 'TRAVELO_DIR_ICON_IMG_URI', TRAVELO_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'TRAVELO_DIR_PATH' ) ) {
	define( 'TRAVELO_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'TRAVELO_DIR_PATH_INC' ) ) {
	define( 'TRAVELO_DIR_PATH_INC', TRAVELO_DIR_PATH . 'inc/' );
}

//Travelo Libraries Folder Directory
if ( ! defined( 'TRAVELO_DIR_PATH_LIBS' ) ) {
	define( 'TRAVELO_DIR_PATH_LIBS', TRAVELO_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'TRAVELO_DIR_PATH_CLASSES' ) ) {
	define( 'TRAVELO_DIR_PATH_CLASSES', TRAVELO_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'TRAVELO_DIR_PATH_HOOKS' ) ) {
	define( 'TRAVELO_DIR_PATH_HOOKS', TRAVELO_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function travelo_admin_script(){
    wp_enqueue_style( 'travelo-admin', get_template_directory_uri().'/assets/css/travelo-admin.css', false, '1.0.0' );
    // wp_enqueue_script( 'travelo_admin', get_template_directory_uri().'/assets/js/travelo-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'travelo_admin_script' );



/**
 * Include File
 *
 */
require_once( TRAVELO_DIR_PATH_INC . 'travelo-breadcrumbs.php' );
require_once( TRAVELO_DIR_PATH_INC . 'travelo-widgets-reg.php' );
require_once( TRAVELO_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( TRAVELO_DIR_PATH_INC . 'post-like.php' );
require_once( TRAVELO_DIR_PATH_INC . 'travelo-functions.php' );
require_once( TRAVELO_DIR_PATH_INC . 'travelo-commoncss.php' );
require_once( TRAVELO_DIR_PATH_INC . 'support-functions.php' );
require_once( TRAVELO_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( TRAVELO_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( TRAVELO_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( TRAVELO_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( TRAVELO_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( TRAVELO_DIR_PATH_HOOKS . 'hooks.php' );
require_once( TRAVELO_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( TRAVELO_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( TRAVELO_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Travelo object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Travelo = new Travelo();