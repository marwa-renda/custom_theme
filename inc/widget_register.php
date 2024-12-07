<?php
// Sidebar Register Function

function marwa_widgets_register(){
  register_sidebar(array(
    'name' => __('Main Widget Area', 'marwarenda'),
    'id'   => 'sidebar-1',
    'description' => __('Appears in the sidebar in blog page and also other page', 'marwarenda'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 1', 'marwarenda'),
    'id'   => 'footer-1',
    'description' => __('Appears in the sidebar in blog page and also other page', 'marwarenda'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 2', 'marwarenda'),
    'id'   => 'footer-2',
    'description' => __('Appears in the sidebar in blog page and also other page', 'marwarenda'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 3', 'marwarenda'),
    'id'   => 'footer-3',
    'description' => __('Appears in the sidebar in blog page and also other page', 'marwarenda'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Homepage Widget', 'marwarenda'),
    'id'   => 'home-1',
    'description' => __('Appears in the sidebar on the homepage', 'marwarenda'),
    'before_widget' => '<div class="child_home">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'marwa_widgets_register');
