<?php
function my_theme_assets(){
$themepath = get_template_directory_uri();

wp_enqueue_style('main-style', $themepath . '/assets/css/output.css', array(), filemtime(get_template_directory() . '/assets/css/output.css'));
}

add_action('wp_enqueue_scripts', 'my_theme_assets');

function my_theme_setup(){
    register_nav_menus([
        'primary' => 'Primary Menu'
    ]);

    add_theme_support('post-thumbnail');
}
add_action('after_setup_theme', 'my_theme_setup');

function my_theme_widgets(){
    register_sidebar([
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'description' => 'Main sidebar widget area',
        'before_widget' => '<div class="mb-6">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="mb-3 text-xl font-bold">',
        'after_title' => '</h3>',
    ]);
}

add_action('widgets_init', 'my_theme_widgets');
?>