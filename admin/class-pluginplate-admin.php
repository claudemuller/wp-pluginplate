<?php

class Pluginplate_Admin {

    protected $version;

    public function __construct( $version ) {
        $this->version = $version;
    }

    public function enqueue_admin_styles() {
        wp_enqueue_style(
            'pluginplate-admin-styles',
            plugin_dir_url( __FILE__ ) . 'css/pluginplate.admin.css',
            array(),
            $this->version,
            false
        );
    }

    public function do_nothing() {

    }

    public function render_meta_box() {
        require_once plugin_dir_path( __FILE__ ) . 'partials/pluginplate.php';
    }

}

