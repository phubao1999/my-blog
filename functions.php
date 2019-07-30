<?php

// adding the css and js files

function gt_setup()
{
    wp_enqueue_style('bootstrap4', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Mono&display=swap');
    wp_enqueue_style('fontawsome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js');
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'gt_setup');


// Adding Theme Support

function gt_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form'));
}

add_action('after_setup_theme', 'gt_init');

// Project Post Type

function gt_custom_post_type () {
    register_post_type('project', 
    array(
        'rewrite' => array('slug' => 'project'),
        'labels' => array(
            'name' => 'project',
            'singular_name' => 'project',
            'add_new_item' => 'add new project',
            'edit_item' => 'edit project'   
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
        )
    );
}

add_action('init', 'gt_custom_post_type');

// Side Bar

function gt_widgets(){
    register_sidebar(
        array(
            'name' => 'Main Sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );
}

add_action('widgets_init', 'gt_widgets');

// Filter For Search

function search_filter($query) {
    if($query->is_search()){
        $query->set('post_type', array('post', 'project'));
    }
}

add_filter('pre_get_posts', 'search_filter');