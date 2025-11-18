<?php
/**
 * Automation Coach Theme Functions
 */

// Adiciona suporte para recursos do tema
function automation_coach_setup() {
    // Suporte para título do documento
    add_theme_support('title-tag');
    
    // Suporte para imagens destacadas
    add_theme_support('post-thumbnails');
    
    // Suporte para HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Registra menu de navegação
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'automation-coach'),
    ));
}
add_action('after_setup_theme', 'automation_coach_setup');

// Enfileira scripts e estilos
function automation_coach_scripts() {
    // Estilo principal
    wp_enqueue_style('automation-coach-style', get_stylesheet_uri(), array(), '1.0');
    
    // Script principal (se necessário)
    wp_enqueue_script('automation-coach-script', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'automation_coach_scripts');

// Remove a barra de administração do WordPress no frontend
add_filter('show_admin_bar', '__return_false');

// Registra áreas de widgets
function automation_coach_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Principal', 'automation-coach'),
        'id'            => 'sidebar-1',
        'description'   => __('Adicione widgets aqui.', 'automation-coach'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'automation_coach_widgets_init');

// Customiza o excerpt
function automation_coach_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'automation_coach_excerpt_length');

function automation_coach_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'automation_coach_excerpt_more');
