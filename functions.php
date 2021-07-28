<?php
// Add JavaScript and Css to WP Depency System
function add_js_css(){
  // CSS
  wp_enqueue_style('style', get_stylesheet_uri());

  wp_enqueue_style('base', get_template_directory_uri() . '/css/base.css');

  wp_enqueue_style('vendor', get_template_directory_uri() . '/css/vendor.css');

  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');

  // Js 
  wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', array('jquery'), '1.0', true);

  wp_enqueue_script('pace', get_template_directory_uri() . '/js/pace.min.js', array('modernizr'), '4.3', true);

  wp_enqueue_script('plugins-js', get_template_directory_uri() . '/js/plugins.js', array('pace'), '1.0', true);

  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('plugins-js'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_js_css');

function myclass_edit_comment_link( $output ) {
  return preg_replace( '/comment-edit-link/', 'reply', $output);
}
add_filter( 'edit_comment_link', 'myclass_edit_comment_link' );

function theme_setup()
{

  // Soporte imagenes destacadas
  if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
  }
  add_theme_support('title-tag');

  // Soporte logo
  add_theme_support('custom-logo', array(
    'height'      => 90,
    'width'       => 272,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-title', 'site-description'),
  ));

  require get_template_directory() . '/classes/comment-walker.php';

}
add_action('after_setup_theme', 'theme_setup');

function customizer_elements($wp_customize){
  $wp_customize->add_section( 'theme_footer_copyright' , array(
    'title'      => __( 'Footer', 'blog-com' ),
    'priority'   => 30,
  ));
  $wp_customize->add_setting( 'theme_footer_copyright_text', array());
  $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'blog_theme_footer_control',
        array(
            'label'      => __( 'Texto de Copyright', 'mytheme' ),
            'section'    => 'theme_footer_copyright',
            'settings'   => 'theme_footer_copyright_text',
            'priority'   => 1
        )
    )
);
}
add_action( 'customize_register', 'customizer_elements' );

// Registrar Menús
function menu_register()
{
  register_nav_menus(
    array(
      'menu-principal' => __('Menú Superior')
    )
  );
}
add_action('init', 'menu_register');
