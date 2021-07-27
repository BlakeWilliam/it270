<?php

function my_excerpt_length($length) {
    return 35;
}

add_filter('excerpt_length' , 'my_excerpt_length', 999);

// add thumbnails
set_post_thumbnail_size(150, 150);
add_theme_support('post-thumbnails');

// register our navigations
register_nav_menus(array(
    'primary' => 'Primary Menu',
    'tours' => 'Tours Menu',
    'footer' => 'Footer Menu'
    ));

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );
add_filter( 'widget_text', 'do_shortcode' );


// allows WP to link to astuteo jQuery
function my_theme_scripts() {
    wp_enqueue_script( 'astuteo', get_template_directory_uri() . '/js/astuteo.js', '1.0.0', false );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );


// register the sidebar widgets in WP dashboard
function it270_widgets_init() {
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar Blog', 'new-theme-1'),
            'id' => 'sidebar-blog',
            'description' => esc_html__('Our blog widget', 'new-theme-1'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Sidebar Tours', 'new-theme-1'),
            'id' => 'sidebar-tours',
            'description' => esc_html__('Our tours widget', 'new-theme-1'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar About', 'new-theme-1'),
            'id' => 'sidebar-about',
            'description' => esc_html__('Our about widget', 'new-theme-1'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar Buy', 'new-theme-1'),
            'id' => 'sidebar-buy',
            'description' => esc_html__('Our buy widget', 'new-theme-1'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Sidebar footer content', 'new-theme-1'),
            'id' => 'sidebar-footer-content',
            'description' => esc_html__('Our footer widget', 'new-theme-1'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
    add_action( 'widgets_init', 'it270_widgets_init');

    //  Functions to display a list of all the shortcodes
function diwp_get_list_of_shortcodes(){
 
    // Get the array of all the shortcodes
    global $shortcode_tags;
     
    $shortcodes = $shortcode_tags;
     
    // sort the shortcodes with alphabetical order
    ksort($shortcodes);
     
    $shortcode_output = "<ul>";
     
    foreach ($shortcodes as $shortcode => $value) {
        $shortcode_output = $shortcode_output.'<li>['.$shortcode.']</li>';
    }
     
    $shortcode_output = $shortcode_output. "</ul>";
     
    return $shortcode_output;
 
}
add_shortcode('get-shortcode-list', 'diwp_get_list_of_shortcodes');

// create disclaimer shortcode
function adventure_disclaimer() {
    return  '<small> We are not responsible for any outdated information. While we try to keep everything updated - there may be a lag in information update</small>';
}

add_shortcode('disclaimer', 'adventure_disclaimer');

// create current date shortcode
function today_date() {
return date("l\, F jS Y ");
}

add_shortcode('current_date', 'today_date');

// create specials shortcode
function specials() {
    // using a switch
    if(isset($_GET['today'])) {
        $today = $GET['today'];
    } else {
        $today = date('l');
    }

switch($today) {
    case 'Thursday':
        $content = 'Today\'s special is a $200 gift card to REI for just $125!! Click <a href="">here</a> for more info!!';
        break;
        case 'Friday':
            $content = 'Today\'s special is exclusive access to an in depth documentary on Mt Rainier!! Click <a href="">here</a> for more info!!';
            break;
    
    }
return $content;
}

add_shortcode('today_specials', 'specials');

// create year shortcode
function year(){
    return date('Y');
}
add_shortcode('current_year', 'year');