<?php

if (!function_exists('oSailing_scripts')):

    function oSailing_scripts() {

        wp_enqueue_style(
            'oSailing_app_css',
            get_theme_file_uri('public/css/app.css'),
            ['oSailing_vendor_css'],
            '1.0.0'
        );

        wp_enqueue_style(
            'oSailing_vendor_css',
            get_theme_file_uri('public/css/vendor.css'),
            [],
            '1.0.0'
        );

        wp_enqueue_script(
            'oSailing_app_js',
            get_theme_file_uri('public/js/app.js'),
            [],
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'oSailing_vendor_js',
            get_theme_file_uri('public/js/vendor.js')
        );
    }

endif;

add_action('wp_enqueue_scripts', 'oSailing_scripts');