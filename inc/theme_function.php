<?php

function marwa_customizar_register($wp_customize){

  //Header Area Function
  $wp_customize->add_section('marwa_header_area', array(
    'title' =>__('Header Area', 'marwarenda'),
    'description' => 'If you interested to update your header area, you can do it here.'
  ));

  $wp_customize->add_setting('marwa_logo', array(
    'default' => get_bloginfo('template_directory') . '/img/logo.png',
  ));

  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'marwa_logo', array(
    'label' => 'Logo Upload',
    'description' => 'If you interested to change or update your logo you can do it.',
    'setting' => 'marwa_logo',
    'section' => 'marwa_header_area',
  ) ));

  // Menu Position Option
  $wp_customize->add_section('marwa_menu_option', array(
    'title' => __('Menu Position Option', 'marwarenda'),
    'description' => 'If you interested to change your menu position you can do it.'
  ));

  $wp_customize->add_setting('marwa_menu_position', array(
    'default' => 'right_menu',
  ));

  $wp_customize-> add_control('marwa_menu_position', array(
    'label' => 'Menu Position',
    'description' => 'Select your menu position',
    'setting' => 'marwa_menu_position',
    'section' => 'marwa_menu_option',
    'type' => 'radio',
    'choices' => array(
      'left_menu' => 'Left Menu',
      'right_menu' => 'Right Menu',
      'center_menu' => 'Center Menu',
    ),
  ));


  // Footer Option
  $wp_customize->add_section('marwa_footer_option', array(
    'title' => __('Footer Option', 'marwahossain'),
    'description' => 'If you interested to change or update your footer settings you can do it.'
  ));

  $wp_customize->add_setting('marwa_copyright_section', array(
    'default' => '&copy; Copyright 2021 | Procoder BD',
  ));

  $wp_customize-> add_control('marwa_copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'If need you can update your copyright text from here',
    'setting' => 'marwa_copyright_section',
    'section' => 'marwa_footer_option',
  ));

  // Theme Color
  $wp_customize-> add_section('marwa_colors', array(
    'title' => __('Theme Color', 'marwahossain'),
    'description' => 'If need you can change your theme color.',
  ));

  $wp_customize ->add_setting('marwa_bg_color', array(
    'default' => '#ffffff',
  ));
  $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'marwa_bg_color', array(
    'label' => 'Background Color',
    'section' => 'marwa_colors',
    'settings' => 'marwa_bg_color',
  )));
  $wp_customize ->add_setting('marwa_primary_color', array(
    'default' => '#ea1a70',
  ));
  $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'marwa_primary_color', array(
    'label' => 'Primary Color',
    'section' => 'marwa_colors',
    'settings' => 'marwa_primary_color',
  )));

}

add_action('customize_register', 'marwa_customizar_register');

function marwa_theme_color_cus(){
  ?>
  <style>
    body{background: <?php echo get_theme_mod('marwa_bg_color'); ?>}
    :root{ --pink:<?php echo get_theme_mod('marwa_primary_color'); ?>}
  </style>
  <?php 
}
add_action('wp_head', 'marwa_theme_color_cus');