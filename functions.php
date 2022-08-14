<?php // functions

function my_excerpt_length() {
    return 35;
}

// add filter
add_filter('excerpt_length', 'my_excerpt_length');

set_post_thumbnail_size(200, 200);
add_theme_support('post-thumbnails');

// register navigation
register_nav_menus(array(
    'primary' => 'Primary Menu',
    'footer' => 'Footer Menu'
    ));


// enqueing my scripts
function my_theme_scripts() {
    wp_enqueue_script( 'astuteo', get_template_directory_uri() . '/js/astuteo.js', '1.0.0', false );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

// tour specials function/switch
function specials() {
    if(isset($_GET['today'])) {
        $today = $_GET['today'];
        } else {
        $today = date('l');
        }

switch($today) {
    case 'Sunday' :
    $content = 'Sunday\'s special will take us to the Alaskan Glaciers!
    Let\'s add some info about the glaciers. To learn more about this special tour,
    click <a href="">here</a>';
    break;

    case 'Monday' :
    $content = 'Monday\'s special takes us to California!
    Napa County is north of San Francisco, in California. It\'s known for hundreds of hillside vineyards in the Napa Valley wine region. 
    In the city of Napa, Oxbow Public Market features regional gourmet food. To learn more about this special tour,
    click <a href="">here</a>';
    break;

    case 'Tuesday' :
    $content = 'Tuesday\'s special takes us to Big Sur!
    Big Sur is a rugged stretch of the Californian central coast between Carmel and San Simeon. 
    Bordered to the east by the Santa Lucia Mountains and the west by the Pacific Ocean. To learn more about this special tour,
    click <a href="">here</a>';
    break;

    case 'Wednesday' :
    $content = 'Wednesday\'s special takes us to the Oregon Coast!
    To learn more about this special tour,
    click <a href="">here</a>';
    break;

    case 'Thursday' :
    $content = 'Thursday\'s special takes us to New York City!
    To learn more about this special tour,
    click <a href="">here</a>';
    break;

    case 'Friday' :
    $content = 'Friday\'s special takes us to Bend, Oregon!
    To learn more about this special tour,
    click <a href="">here</a>';
    break;
    
    case 'Saturday' :
    $content = 'Saturday\'s special takes us to Mt. Denali!
    Denali, also known as Mount McKinley, its former official name) is the highest mountain peak in North America, 
    with a summit elevation of 20,310 feet above sea level.To learn more about this special tour,
    click <a href="">here</a>';
    break;

} // close switch

return $content;
} // close tour special function


add_shortcode('today_specials', 'specials');

function today_date() {
    return date('l\, F jS Y');
}

add_shortcode('current_date', 'today_date');

add_filter( 'widget_text' , 'do_shortcode' );


// register sidebar widgets
function init_widgets() {
    register_sidebar(array(
    'name' => 'Sidebar Blog',
    'id' => 'sidebar-blog',
    'before_widget' => '<div class="inner-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));

    register_sidebar(array(
    'name' => 'Sidebar About',
    'id' => 'sidebar-about',
    'before_widget' => '<div class="inner-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));

    register_sidebar(array(
    'name' => 'Sidebar Tours',
    'id' => 'sidebar-tours',
    'before_widget' => '<div class="inner-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));

    register_sidebar(array(
    'name' => 'Sidebar Specials',
    'id' => 'sidebar-specials',
    'before_widget' => '<div class="inner-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));

    register_sidebar(array(
    'name' => 'Sidebar Testimonials',
    'id' => 'sidebar-testimonials',
    'before_widget' => '<div class="inner-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));
} 
   
add_action('widgets_init', 'init_widgets');


//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_name;
    }
    return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );


// Removes <p> tag after image
remove_filter( 'the_content', 'wpautop' );