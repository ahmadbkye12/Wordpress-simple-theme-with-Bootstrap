<?php

/**
 * Include CSS files 
 */
function theme_enqueue_css() {

        wp_enqueue_style('MDB', get_template_directory_uri() . '/style/css/mdb.min.css');
      wp_enqueue_style('compiled', get_template_directory_uri() . '/style/css/compiled.min.css');
    
      wp_enqueue_style( 'Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
       wp_enqueue_style('bootstrap', get_template_directory_uri() . '/style/css/bootstrap-rtl.min.css');
      
     wp_enqueue_style('jquery-ui', get_stylesheet_directory_uri() . '/style/css/jquery-ui.css');

     wp_register_style('style', get_stylesheet_directory_uri() . '/style.css');
      wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
  }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_css' );

function theme_enqueue_scripts(){
  // wp_deregister_script('jquery');
   // wp_enqueue_script( 'jquery' );
   // wp_enqueue_script('jQuery', get_template_directory_uri(). '/js/load-scripts.js','','',false);
  wp_enqueue_script('jQuery', get_template_directory_uri(). '/js/jquery-3.3.1.min.js','','',false);   
  wp_enqueue_script('Tether', get_template_directory_uri() . '/js/tether.min.js', array(), '1.0.0', true);
  wp_enqueue_script('compiled_min', get_template_directory_uri() . '/js/compiled.min.js', '', '', true);
  
  wp_enqueue_script('feather_min_js', get_stylesheet_directory_uri() . '/js/feather.min.js','', '', true);
  
  // wp_enqueue_script('ie10_viewport_bug_workaround_js', get_stylesheet_directory_uri() . '/js/ie10-viewport-bug-workaround.js', '','', true);
  wp_enqueue_script('my-script', get_stylesheet_directory_uri() . '/js/my-script.js', "",'', true);

}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
        
/**
 * Include external files
 */
require_once('inc/mdb_bootstrap_navwalker.php');

require_once('inc/mdb_pagination.php');        
require_once('inc/bs4navwalker.php');
/**
 * Setup Theme
 */
function MDB_setup() {
  // Navigation Menus
  register_nav_menu('top', 'Top menu');
 /* register_nav_menus(array(
    'navbar' => __( 'Navbar Menu'),
    'footer1' => __( 'Footer #1 Column'),
    'footer2' => __( 'Footer #2 Column'),
    'footer3' => __( 'Footer #3 Column')
    )); 
    */
  // Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('main-full', 1078, 516, false); // main post image in full width
  }
  add_action('after_setup_theme', 'MDB_setup');
                                     
/**
 * Register our sidebars and widgetized areas.
 */
function mdb_widgets_init() {

  register_sidebar( array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar',
    'before_widget' => '<div id="%1$s" class="widget-item">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => 'Footer widget area',
    'id'            => 'footer',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="title">',
    'after_title'   => '</h5>',
  ) );

}
add_action( 'widgets_init', 'mdb_widgets_init' );


function remove_admin_bar1() {
 
    show_admin_bar(false); 
}

add_action('after_setup_theme', 'remove_admin_bar1');
?>