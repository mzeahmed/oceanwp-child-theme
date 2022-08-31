<?php

namespace OceanwpChild;

class EnqueueScripts
{
    public \WP_Theme $theme;
    public string $version;
    public function __construct()
    {
        $this->theme = wp_get_theme('OceanWP');
        $this->version = $this->theme->get('Version');

        add_action('wp_enqueue_scripts', [$this, 'enqueueScripts']);
        add_action('admin_enqueue_scripts', [$this, 'adminEnqueueScripts']);
        add_action('login_enqueue_scripts', [$this, 'loginEnqueueScripts']);
    }

    public function enqueueScripts(): void
    {
        wp_enqueue_style(
            'child-style',
            get_stylesheet_directory_uri() . '/dist/styles/app.css',
            ['oceanwp-style'],
            $this->version,
            'all'
        );

        wp_enqueue_script(
            'child-script',
            get_stylesheet_directory_uri() . '/dist/js/app.js',
            [],
            $this->version,
            true
        );
    }

    public function adminEnqueueScripts(): void
    {
        wp_enqueue_style(
            'child-admin-style',
            get_stylesheet_directory_uri() . '/dist/styles/admin.css',
            [],
            $this->version,
            'all'
        );

        wp_enqueue_script(
            'child-admin-script',
            get_stylesheet_directory_uri() . '/dist/js/admin.js',
            [],
            $this->version,
            true
        );
    }

    public function loginEnqueueScripts(): void
    {
        wp_enqueue_style(
            'custom_login',
            get_stylesheet_directory_uri() . '/assets/admin/login-style.css',
            [],
            $this->version,
            'all'
        );
    }
}
