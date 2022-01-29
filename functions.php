<?php

function buson_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'slider', 'services', 'cases', 'teams', 'testimonials'));
    
    
    // Add Custom Logo 
    add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 336,
				'flex-width'  => true,
				'flex-height' => true,
			)
        );
    
    // Add Custom Background 
    add_theme_support(
		'custom-background',
		apply_filters(
			'js_bangladesh_custom_background_args',
			array(
				'default-color' => '',
				'default-image' => '',
			)
		)
	);

    load_theme_textdomain('buson', get_template_directory() . '/languages');

    register_nav_menus([
        'primary' => __('primary Menu','buson'),
        'footer' => __('footer Menu','buson')
    ]);




}
add_action('after_setup_theme', 'buson_setup');

function buson_assets() {

    // CSS
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/assets/css/slicknav.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-icon', get_template_directory_uri() . '/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'main', get_stylesheet_uri() );

    // JS
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'buson_assets');





function buson_cpt() {

    // CPT For Sliders
    $labels = array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Slider', 'buson' ),
        'new_item'              => __( 'New Slider', 'buson' ),
        'edit_item'             => __( 'Edit Slider', 'buson' ),
        'view_item'             => __( 'View Slider', 'buson' ),
        'all_items'             => __( 'All Slider', 'buson' ),
        'search_items'          => __( 'Search Slider', 'buson' ),
        'parent_item_colon'     => __( 'Parent Slider:', 'buson' ),
        'not_found'             => __( 'No sliders found.', 'buson' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'buson' )
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail')
    );
    register_post_type( 'slider', $args );
    
    // CPT For Services
    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Service', 'buson' ),
        'new_item'              => __( 'New Service', 'buson' ),
        'edit_item'             => __( 'Edit Service', 'buson' ),
        'view_item'             => __( 'View Service', 'buson' ),
        'all_items'             => __( 'All Service', 'buson' ),
        'search_items'          => __( 'Search Service', 'buson' ),
        'parent_item_colon'     => __( 'Parent Service:', 'buson' ),
        'not_found'             => __( 'No Service found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Service found in Trash.', 'buson' )
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail', 'editor'),
    );
    register_post_type( 'services', $args );
    
    // CPT For Cases
    $labels = array(
        'name'                  => _x( 'Cases', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Case', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Cases', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Case', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Case', 'buson' ),
        'new_item'              => __( 'New Case', 'buson' ),
        'edit_item'             => __( 'Edit Case', 'buson' ),
        'view_item'             => __( 'View Case', 'buson' ),
        'all_items'             => __( 'All Completed Cases', 'buson' ),
        'search_items'          => __( 'Search Case', 'buson' ),
        'parent_item_colon'     => __( 'Parent Case:', 'buson' ),
        'not_found'             => __( 'No Case found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Case found in Trash.', 'buson' )
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'case' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail', 'editor'),
    );
    register_post_type( 'cases', $args );
    
    // CPT For Teams
    $labels = array(
        'name'                  => _x( 'Teams', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Team-Member', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Teams', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Teams', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Team Member', 'buson' ),
        'new_item'              => __( 'New Member', 'buson' ),
        'edit_item'             => __( 'Edit Member', 'buson' ),
        'view_item'             => __( 'View Member', 'buson' ),
        'all_items'             => __( 'All Member', 'buson' ),
        'search_items'          => __( 'Search Member', 'buson' ),
        'parent_item_colon'     => __( 'Parent Member:', 'buson' ),
        'not_found'             => __( 'No Member found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Member found in Trash.', 'buson' )
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'teams' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail', 'editor' ),
    );
    register_post_type( 'teams', $args );  
    
    // CPT For Testimonials
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Testimonial', 'buson' ),
        'new_item'              => __( 'New Testimonial', 'buson' ),
        'edit_item'             => __( 'Edit Testimonial', 'buson' ),
        'view_item'             => __( 'View Testimonial', 'buson' ),
        'all_items'             => __( 'All Testimonials', 'buson' ),
        'search_items'          => __( 'Search Testimonial', 'buson' ),
        'parent_item_colon'     => __( 'Parent Testimonial:', 'buson' ),
        'not_found'             => __( 'No Testimonial found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Testimonial found in Trash.', 'buson' )
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail' ),
    );
    register_post_type( 'testimonials', $args );
    
    
    }
    add_action('init', 'buson_cpt');
    


// ACF Option Page
if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page(array(
            'page_title' 	=> 'Theme General Settings',
            'menu_title'	=> 'Theme Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
        
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Header Settings',
            'menu_title'	=> 'Header',
            'parent_slug'	=> 'theme-general-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Footer Settings',
            'menu_title'	=> 'Footer',
            'parent_slug'	=> 'theme-general-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Trusted Client Settings',
            'menu_title'	=> 'Trusted Client',
            'parent_slug'	=> 'theme-general-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Request Call Settings',
            'menu_title'	=> 'Request Call',
            'parent_slug'	=> 'theme-general-settings',
        ));
        
    }


    function buson_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Main Sidebar', 'buson' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'buson' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ) );

        register_sidebar( array(
            'name'          => __( 'footer Sidebar', 'buson' ),
            'id'            => 'sidebar-2',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'buson' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'buson_widgets_init' );
