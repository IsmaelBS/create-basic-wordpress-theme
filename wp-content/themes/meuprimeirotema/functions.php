<?php
require get_template_directory(). '/includes/setup.php';

add_action('wp_enqueue_scripts', 'im_load_styles');

add_action('after_setup_theme','im_after_setup');

add_action('widgets_init', 'im_widgets');