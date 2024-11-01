<?php
if(!class_exists("umom_menu")) {

    class umom_menu {

        public $umom_plugin_dir;
        public $umom_plugin_url;

        function __construct($plugin) {
            $this->umom_plugin_dir = WP_PLUGIN_DIR."/".$plugin;
            $this->umom_plugin_url = plugins_url()."/".$plugin;
        }
        
        function umom_load_styles() {
            $umom_css_dir = is_admin() ? "admin" : "site";
            $cssdir = $this->umom_plugin_dir."/css/".$umom_css_dir."/";
            $cssurl = $this->umom_plugin_url."/css/".$umom_css_dir."/";
            $umom_css_files = scandir($cssdir);
            foreach($umom_css_files as $file){
                if(!is_dir($file) && end(explode(".", $file)) == "css")
                wp_enqueue_style(uniqid(), $cssurl.$file);
            }
        }
        
        function umom_load_scripts($umom_scripts = array("jquery")) {
            foreach($umom_scripts as $script) {
                wp_enqueue_script($script);
            }
            $umom_js_dir = is_admin() ? "admin" : "site";
            $jsdir = $this->umom_plugin_dir."/js/".$umom_js_dir."/";
            $jsurl = $this->umom_plugin_url."/js/".$umom_js_dir."/";
            $umom_js_files = scandir($jsdir);
            foreach($umom_js_files as $file) {
                if(!is_dir($file) && end(explode(".", $file)) == "js")
                wp_enqueue_script(uniqid(), $jsurl.$file);
            }
        }
    }
}