<?php
/*-----------------------------------------------------------------------------------*/
/* Word
/*-----------------------------------------------------------------------------------*/
add_action('init', 'htle_word_posttype_init');
function htle_word_posttype_init() {
    $labels = array(
        'name'               => __('Word', 'post type general name', 'ace'),
        'singular_name'      => __('Word', 'post type singular name', 'ace'),
        'menu_name'          => __('Word', 'admin menu', 'ace'),
        'name_admin_bar'     => __('Word', 'add new on admin bar', 'ace'),
        'add_new'            => __('Add New', 'Word', 'ace'),
        'add_new_item'       => __('Add New Word', 'ace'),
        'new_item'           => __('New Ads', 'ace'),
        'edit_item'          => __('Edit Word', 'ace'),
        'view_item'          => __('View Word', 'ace'),
        'all_items'          => __('All Words', 'ace'),
        'search_items'       => __('Search Word', 'ace'),
        'parent_item_colon'  => __('Parent Word:', 'ace'),
        'not_found'          => __('No partners found.', 'ace'),
        'not_found_in_trash' => __('No partners found in Trash.', 'ace')
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'word'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'taxonomies'         => array( 'category', 'post_tag' ),
        'supports'           => array('title', 'thumbnail', 'page-attributes', 'editor')
    );
    register_post_type('word', $args);
}

/*-----------------------------------------------------------------------------------*/
/* Phrase
/*-----------------------------------------------------------------------------------*/
add_action('init', 'htle_phrase_posttype_init');
function htle_phrase_posttype_init() {
    $labels = array(
        'name'               => __('Phrase', 'post type general name', 'ace'),
        'singular_name'      => __('Phrase', 'post type singular name', 'ace'),
        'menu_name'          => __('Phrase', 'admin menu', 'ace'),
        'name_admin_bar'     => __('Phrase', 'add new on admin bar', 'ace'),
        'add_new'            => __('Add New', 'Phrase', 'ace'),
        'add_new_item'       => __('Add New Phrase', 'ace'),
        'new_item'           => __('New Phrase', 'ace'),
        'edit_item'          => __('Edit Phrase', 'ace'),
        'view_item'          => __('View Phrase', 'ace'),
        'all_items'          => __('All Phrases', 'ace'),
        'search_items'       => __('Search Phrase', 'ace'),
        'parent_item_colon'  => __('Parent Phrase:', 'ace'),
        'not_found'          => __('No partners found.', 'ace'),
        'not_found_in_trash' => __('No partners found in Trash.', 'ace')
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'phrase'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'taxonomies'         => array( 'category', 'post_tag' ),
        'supports'           => array('title', 'thumbnail', 'page-attributes', 'editor')
    );
    register_post_type('phrase', $args);
}


/*-----------------------------------------------------------------------------------*/
/* Lesson
/*-----------------------------------------------------------------------------------*/
add_action('init', 'htle_lesson_posttype_init');
function htle_lesson_posttype_init() {
    $labels = array(
        'name'               => __('Lesson', 'post type general name', 'ace'),
        'singular_name'      => __('Lesson', 'post type singular name', 'ace'),
        'menu_name'          => __('Lesson', 'admin menu', 'ace'),
        'name_admin_bar'     => __('Lesson', 'add new on admin bar', 'ace'),
        'add_new'            => __('Add New', 'Lesson', 'ace'),
        'add_new_item'       => __('Add New Lesson', 'ace'),
        'new_item'           => __('New Lesson', 'ace'),
        'edit_item'          => __('Edit Lesson', 'ace'),
        'view_item'          => __('View Lesson', 'ace'),
        'all_items'          => __('All Lessons', 'ace'),
        'search_items'       => __('Search Lesson', 'ace'),
        'parent_item_colon'  => __('Parent Lesson:', 'ace'),
        'not_found'          => __('No partners found.', 'ace'),
        'not_found_in_trash' => __('No partners found in Trash.', 'ace')
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'lesson'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'taxonomies'         => array( 'category', 'post_tag' ),
        'supports'           => array('title', 'thumbnail', 'page-attributes', 'editor')
    );
    register_post_type('lesson', $args);
}