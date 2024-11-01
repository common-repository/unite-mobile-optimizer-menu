<?php 
/*
Plugin Name: Unite Mobile Optimizer Menu
Plugin URI: http://www.unitecms.net
Description: Unite Mobile Optimizer Menu makes your site more elegant. A flexible module design adjusts to the size of the browser window and different screen resolutions. 
Author: Unite CMS
Version: 1.0
Author URI: http://www.unitecms.net
*/

include("lib/class.umom-menu.php");

$umom_plugindir = str_replace("\\", "/",dirname(__FILE__));
$umom_plugin = new umom_menu(end(explode("/", $umom_plugindir)));

define("umom__DIR", $umom__plugindir); 

function umom_header() {
    $umom_settings = get_option("umom_opt");
	if($umom_settings  != false) {
		extract($umom_settings);
	}
	if(!$disable) {
    ?>  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <?php 
        include("template/css.php");
    }
}
function umom_content() {
    $umom_settings = get_option("umom_opt");
	if($umom_settings != false) {
		extract($umom_settings);
	}
	if(!$disable) {             
		include("template/menu.php");
    }
}
function umom_menu() {
    add_menu_page("Unite Mobile Optimizer Menu", "Unite Mobile Optimizer Menu", "administrator", "umom_panel", "umom_settings", plugins_url("unite-mobile-optimizer-menu/images/icon.png"));
}
function umom_settings() {
    include("template/settings.php");
}
function umom_save_settings() {
    update_option("umom_opt", $_POST["umom__opt"]);
    die("Options Updated");
}
function umom_scripts() {
    global $umom_plugin;
    wp_enqueue_script("jquery");
    wp_enqueue_script("jquery-form");
    $umom_plugin->umom_load_scripts(); 
    $umom_plugin->umom_load_styles(); 
}
function umom_styles() {  
    wp_register_style('umom_style', plugins_url('/css/site/font-awesome/font-awesome.css', __FILE__ ), array(), '4.0.3', 'all');  
    wp_enqueue_style('umom_style');  
} 
if(is_admin()) {
    add_action("admin_menu","umom_menu");
}
add_action("wp_enqueue_scripts","umom_scripts");
add_action("admin_enqueue_scripts","umom_scripts");
add_action("wp_head","umom_header");
add_action("wp_footer","umom_content");
add_action("wp_ajax_umom_save_settings","umom_save_settings");
add_action('wp_enqueue_scripts', 'umom_styles');