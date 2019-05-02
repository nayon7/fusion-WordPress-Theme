<?php


require_once(get_template_directory().'/inc/theme-options.php');
require_once(get_template_directory().'/inc/theme-element.php');

// Theme Support //
function fusion_support(){

        load_theme_textdomain('fusion');
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');

        register_nav_menus( array(
                'primary' => __( 'Primary Menu',      'fusion_support' ),
                'social'  => __( 'Social Links Menu', 'fusion_support' ),
        ) );
}

add_action('after_setup_theme','fusion_support');

//shortCode filtaring area

add_filter('widget_text','do_shortcode');


// All Enqueue Files //

function fusion_theme(){

        wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css',array(),'1.0','all');
        wp_enqueue_style('font-flaticon',get_template_directory_uri().'/css/flaticon.css',array(),'1.0','all');
        wp_enqueue_style('animate',get_template_directory_uri().'/css/themify-icons.css',array(),'1.0','all');
        wp_enqueue_style('ionicons',get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.min.css',array(),'1.0','all');
        wp_enqueue_style('owlcarousel',get_template_directory_uri().'/vendors/nice-select/css/nice-select.css',array(),'1.0','all');
        wp_enqueue_style('maini-css',get_template_directory_uri().'/css/style.css',array(),'1.0','all');
       
        wp_enqueue_style('fusion-style',get_stylesheet_uri());

        wp_enqueue_script('jquery-migrate',get_template_directory_uri().'/js/popper.js',array('jquery'),'1.0',true);
        wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'1.0',true);
        wp_enqueue_script('owl-carousel',get_template_directory_uri().'/vendors/nice-select/js/jquery.nice-select.min.js"',array('jquery'),'1.0',true);
        wp_enqueue_script('wow-min',get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.min.js',array('jquery'),'1.0',true);
        wp_enqueue_script('wow-script',get_template_directory_uri().'/js/owl-carousel-thumb.min.js',array('jquery'),'1.0',true);
        wp_enqueue_script('owlcarousel',get_template_directory_uri().'/js/jquery.ajaxchimp.min.js',array('jquery'),'1.0',true);
        wp_enqueue_script('magnific',get_template_directory_uri().'/js/mail-script.js',array('jquery'),'1.0',true);
        wp_enqueue_script('sticky',get_template_directory_uri().'/js/gmaps.min.js',array('jquery'),'1.0',true);
        wp_enqueue_script('sticky',"https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE");
        wp_enqueue_script('contactform',get_template_directory_uri().'/js/theme.js',array('jquery'),'1.0',true);

}
add_action('wp_enqueue_scripts','fusion_theme');


// Register Custom Post Type  For Slider//

function fusion_theme_custom_post() {
    register_post_type( 'slide',
        array(
            'labels' => array(
                'name' => __( 'sliders' ),
                'singular_name' => __( 'slide' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );



    register_post_type( 'feature',
        array(
            'labels' => array(
                'name' => __( 'features' ),
                'singular_name' => __( 'feature' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );


    register_post_type( 'course',
        array(
            'labels' => array(
                'name' => __( 'courses' ),
                'singular_name' => __( 'course' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );


    register_post_type( 'trainer',
        array(
            'labels' => array(
                'name' => __( 'trainers' ),
                'singular_name' => __( 'trainer' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );

    register_post_type( 'testimonial',
        array(
            'labels' => array(
                'name' => __( 'testimonials' ),
                'singular_name' => __( 'testimonial' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );

}


add_action( 'init', 'fusion_theme_custom_post' );








?>




