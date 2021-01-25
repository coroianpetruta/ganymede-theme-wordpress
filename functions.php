<?php
//adding CSS and JS files

function ganymede_setup(){
    wp_enqueue_style('ganymede_style', get_stylesheet_uri(), NULL, microtime(), $media="all");
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), array('jquery'), microtime(), true);
    wp_enqueue_style('google-fonts','//fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Montserrat:wght@400;700&display=swap');
    wp_enqueue_script( 'prefix-font-awesome', '//kit.fontawesome.com/be814bc88a.js' );
    
}

add_action('wp_enqueue_scripts', 'ganymede_setup');

function ganymede_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form')
);
}

add_action('after_setup_theme', 'ganymede_init');


//Sidebar

function gn_widgets() {
    register_sidebar(
        array(
        'name' => 'Main Sidebar',
        'id' => 'main_sidebar',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));


    register_sidebar(
        array(
        'name' => 'Footer',
        'id' => 'footer_widgets',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'gn_widgets');




// REMOVE WIDGET TITLE IF IT BEGINS WITH EXCLAMATION POINT
add_filter( 'widget_title', 'remove_widget_title' );
function remove_widget_title( $widget_title ) {
    if ( substr ( $widget_title, 0, 1 ) == '!' )
        return;
    else
        return ( $widget_title );
}



//Filters

function search_filter($query) {
    if($query->is_search()) {
        $query->set('post_type', array('post'));
    }
}

add_filter('pre_get_posts', 'search_filter'); 


function categories_postcount_filter ($variable) {
    $variable = str_replace('(', '<span class="post_count"> ', $variable);
    $variable = str_replace(')', ' </span>', $variable);
    return $variable;
 }
 add_filter('wp_list_categories','categories_postcount_filter');


 function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'my-custom-menu' => __( 'My Custom Menu' ),
        'extra-menu' => __( 'Social Icons' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );


  
?>


