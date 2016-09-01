<?php

class Pluginplate {

    protected $loader;
    protected $plugin_slug;
    protected $version;

    public function __construct() {
        $this->plugin_slug = 'pluginplate-slug';
        $this->version = '0.1.0';

        $this->load_dependencies();
        $this->define_admin_hooks();
        $this->define_public_hooks();
    }

    private function load_dependencies() {
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-pluginplate-admin.php';

        require_once plugin_dir_path( __FILE__ ) . 'class-pluginplate-loader.php';
        $this->loader = new Pluginplate_Loader();
    }

    private function define_admin_hooks() {
        $admin = new Pluginplate_Admin( $this->get_version );
        $this->loader->add_action( 'admin_enqueue_scripts', $admin, 'enqueue_admin_styles' );
        // $this->loader->add_action( 'backend_action', $admin, 'do_nothing' );
    }

    private function define_public_hooks() {
        $this->loader->add_action( 'enqueue_scripts', $this, 'enqueue_styles' );
        // $this->loader->add_action( 'frontend_action', $this, 'do_nothing' );
    }

    public function enqueue_styles() {
        wp_enqueue_style(
            'pluginplate-styles',
            plugin_dir_url( __FILE__ ) . '../css/pluginplate.css',
            array(),
            $this->version,
            false
        );
    }

    public function do_nothing() {

    }

    public function run() {
        $this->loader->run();
    }

    public function get_version() {
        return $this->version;
    }

}

