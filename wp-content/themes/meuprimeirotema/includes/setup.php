<?php
    function im_load_styles() {
        wp_enqueue_style('theme_style', get_template_directory_uri().'/assets/css/style.css');
        wp_enqueue_script('theme_js', 
                    get_template_directory_uri().'/assets/js/script.js',
                    ['jquery'], 
                    true);
    }

    function im_after_setup() {
        // Suporte para versões mais antigas ddo wordpress
        add_theme_support('menus');
        // Registra o menu para ser utilizado
        register_nav_menu('primary',__('Primary Menu', 'primeirotema'));
    }


    function im_widgets() {
        register_sidebar([
            'name' => __('Meu primeiro Sidebar', 'primeirotema'),
            'id' => 'im_sidebar',
            'description' => __('Sidebar para o tema', 'primeirotema')
        ]);
    }