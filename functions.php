<?php
/**
 * Chhapakhana Theme Functions
 *
 * @package Chhapakhana
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function chhapakhana_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );

    // Set post thumbnail size
    set_post_thumbnail_size( 1200, 800, true );

    // Add custom image sizes
    add_image_size( 'chhapakhana-portfolio-thumb', 600, 400, true );
    add_image_size( 'chhapakhana-blog-thumb', 800, 600, true );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'chhapakhana' ),
        'footer'  => esc_html__( 'Footer Menu', 'chhapakhana' ),
    ) );

    // Switch default core markup to output valid HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ) );

    // Add theme support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Add support for custom header
    add_theme_support( 'custom-header' );

    // Add support for custom background
    add_theme_support( 'custom-background' );
}
add_action( 'after_setup_theme', 'chhapakhana_setup' );

/**
 * Set content width
 */
if ( ! isset( $content_width ) ) {
    $content_width = 1200;
}

/**
 * Enqueue scripts and styles
 */
function chhapakhana_scripts() {
    // Main stylesheet (theme header only)
    // Use relative URLs for theme assets so they work under https/http previews (avoid mixed-content)
    $theme_uri = wp_make_link_relative( get_template_directory_uri() );
    $stylesheet_uri = wp_make_link_relative( get_stylesheet_uri() );
    wp_enqueue_style( 'chhapakhana-style', $stylesheet_uri, array(), '1.0.0' );

    // Google Fonts
    wp_enqueue_style( 'chhapakhana-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Hind:300,400,500,600,700', array(), null );

    // CSS files from template
    wp_enqueue_style( 'bootstrap', $theme_uri . '/assets/css/bootstrap.css', array(), '1.0.0' );
    wp_enqueue_style( 'animate', $theme_uri . '/assets/css/animate.css', array(), '1.0.0' );
    wp_enqueue_style( 'animsition', $theme_uri . '/assets/css/animsition.css', array(), '1.0.0' );
    wp_enqueue_style( 'owl-carousel', $theme_uri . '/assets/css/owl.carousel.css', array(), '1.0.0' );
    wp_enqueue_style( 'font-awesome', $theme_uri . '/assets/css/font-awesome.css', array(), '1.0.0' );
    wp_enqueue_style( 'ionicons', $theme_uri . '/assets/css/ionicons.css', array(), '1.0.0' );
    wp_enqueue_style( 'font-etline', $theme_uri . '/assets/css/font-etline.css', array(), '1.0.0' );
    wp_enqueue_style( 'autora-icons', $theme_uri . '/assets/css/autora-icons.css', array(), '1.0.0' );
    wp_enqueue_style( 'shortcodes', $theme_uri . '/assets/css/shortcodes.css', array(), '1.0.0' );

    // Revolution Slider CSS
    wp_enqueue_style( 'rev-slider-settings', $theme_uri . '/includes/rev-slider/css/settings.css', array(), '1.0.0' );
    wp_enqueue_style( 'rev-slider-layers', $theme_uri . '/includes/rev-slider/css/layers.css', array(), '1.0.0' );
    wp_enqueue_style( 'rev-slider-navigation', $theme_uri . '/includes/rev-slider/css/navigation.css', array(), '1.0.0' );

    // Main template stylesheet
    wp_enqueue_style( 'chhapakhana-main', $theme_uri . '/assets/css/style-main.css', array(), '1.0.0' );

    // Color scheme
    wp_enqueue_style( 'chhapakhana-colors', $theme_uri . '/assets/css/colors/color1.css', array(), '1.0.0' );

    // JavaScript files
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-ui-core' );
    wp_enqueue_script( 'jquery-ui-accordion' );

    // Revolution Slider JavaScript (MUST load before other scripts)
    wp_enqueue_script( 'themepunch-tools', $theme_uri . '/includes/rev-slider/js/jquery.themepunch.tools.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'themepunch-revolution', $theme_uri . '/includes/rev-slider/js/jquery.themepunch.revolution.min.js', array('jquery', 'themepunch-tools'), '1.0.0', true );
    
    // Revolution Slider Extensions
    wp_enqueue_script( 'rev-slider-actions', $theme_uri . '/includes/rev-slider/js/extensions/revolution.extension.actions.min.js', array('themepunch-revolution'), '1.0.0', true );
    wp_enqueue_script( 'rev-slider-carousel', $theme_uri . '/includes/rev-slider/js/extensions/revolution.extension.carousel.min.js', array('themepunch-revolution'), '1.0.0', true );
    wp_enqueue_script( 'rev-slider-kenburn', $theme_uri . '/includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js', array('themepunch-revolution'), '1.0.0', true );
    wp_enqueue_script( 'rev-slider-layeranimation', $theme_uri . '/includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js', array('themepunch-revolution'), '1.0.0', true );
    wp_enqueue_script( 'rev-slider-migration', $theme_uri . '/includes/rev-slider/js/extensions/revolution.extension.migration.min.js', array('themepunch-revolution'), '1.0.0', true );
    wp_enqueue_script( 'rev-slider-navigation', $theme_uri . '/includes/rev-slider/js/extensions/revolution.extension.navigation.min.js', array('themepunch-revolution'), '1.0.0', true );
    wp_enqueue_script( 'rev-slider-parallax', $theme_uri . '/includes/rev-slider/js/extensions/revolution.extension.parallax.min.js', array('themepunch-revolution'), '1.0.0', true );
    wp_enqueue_script( 'rev-slider-slideanims', $theme_uri . '/includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js', array('themepunch-revolution'), '1.0.0', true );
    wp_enqueue_script( 'rev-slider-video', $theme_uri . '/includes/rev-slider/js/extensions/revolution.extension.video.min.js', array('themepunch-revolution'), '1.0.0', true );

    // Core plugins
    wp_enqueue_script( 'tether', $theme_uri . '/assets/js/tether.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', $theme_uri . '/assets/js/bootstrap.min.js', array('jquery', 'tether'), '1.0.0', true );
    wp_enqueue_script( 'plugins', $theme_uri . '/assets/js/plugins.js', array('jquery'), '1.0.0', true );
    
    // Animation and effects
    wp_enqueue_script( 'animsition', $theme_uri . '/assets/js/animsition.js', array('jquery'), '1.0.0', true );
    
    // Carousels and sliders
    wp_enqueue_script( 'owl-carousel', $theme_uri . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel-thumbs', $theme_uri . '/assets/js/owl.carousel2.thumbs.js', array('jquery', 'owl-carousel'), '1.0.0', true );
    
    // Portfolio filtering
    wp_enqueue_script( 'imagesloaded' );
    wp_enqueue_script( 'isotope', $theme_uri . '/assets/js/jquery.isotope.min.js', array('jquery', 'imagesloaded'), '1.0.0', true );
    
    // Other effects
    wp_enqueue_script( 'countto', $theme_uri . '/assets/js/countto.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'equalize', $theme_uri . '/assets/js/equalize.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'cookie', $theme_uri . '/assets/js/jquery.cookie.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'validate', $theme_uri . '/assets/js/jquery-validate.js', array('jquery'), '1.0.0', true );
    // Google Maps removed - not needed for this theme
    // wp_enqueue_script( 'gmap', get_template_directory_uri() . '/assets/js/gmap3.min.js', array('jquery'), '1.0.0', true );
    
    // Shortcodes and custom elements
    wp_enqueue_script( 'shortcodes', $theme_uri . '/assets/js/shortcodes.js', array('jquery'), '1.0.0', true );
    
    // Revolution Slider initialization
    wp_enqueue_script( 'rev-slider-init', $theme_uri . '/assets/js/rev-slider.js', array('jquery', 'themepunch-revolution'), '1.0.0', true );

    // Portfolio filter script
    wp_enqueue_script( 'portfolio-filter', $theme_uri . '/assets/js/portfolio-filter.js', array('jquery'), '1.0.0', true );

    // Main theme JS (MUST load last)
    wp_enqueue_script( 'chhapakhana-main', $theme_uri . '/assets/js/main.js', array('jquery'), '1.0.0', true );
    
    // Add inline CSS to ensure slider is visible
    $custom_css = "
        .rev_slider_wrapper { 
            min-height: 600px !important; 
            height: auto !important;
            visibility: visible !important;
            opacity: 1 !important;
        }
        .rev_slider { 
            visibility: visible !important;
            display: block !important;
        }
        #rev-slider2 {
            height: 860px !important;
        }
    ";
    wp_add_inline_style( 'chhapakhana-style', $custom_css );

    // Comments reply
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'chhapakhana_scripts' );

/**
 * Register widget areas
 */
function chhapakhana_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'chhapakhana' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'chhapakhana' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 1', 'chhapakhana' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Appears in the footer area', 'chhapakhana' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 2', 'chhapakhana' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Appears in the footer area', 'chhapakhana' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 3', 'chhapakhana' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Appears in the footer area', 'chhapakhana' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 4', 'chhapakhana' ),
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Appears in the footer area', 'chhapakhana' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'chhapakhana_widgets_init' );

/**
 * Make enqueued script/style sources root-relative to avoid mixed-content when previewing
 * Converts URLs like https://example.com/wp-content/... to /wp-content/...
 */
function chhapakhana_make_src_relative( $src ) {
    // Only modify absolute URLs
    $parts = wp_parse_url( $src );
    if ( ! empty( $parts['path'] ) ) {
        $new = $parts['path'];
        if ( ! empty( $parts['query'] ) ) {
            $new .= '?' . $parts['query'];
        }
        return $new;
    }
    return $src;
}
add_filter( 'style_loader_src', 'chhapakhana_make_src_relative', 10, 2 );
add_filter( 'script_loader_src', 'chhapakhana_make_src_relative', 10, 2 );

/**
 * Register Custom Post Type - Portfolio
 */
function chhapakhana_register_portfolio_post_type() {
    $labels = array(
        'name'                  => _x( 'Portfolio', 'Post Type General Name', 'chhapakhana' ),
        'singular_name'         => _x( 'Portfolio Item', 'Post Type Singular Name', 'chhapakhana' ),
        'menu_name'             => __( 'Portfolio', 'chhapakhana' ),
        'name_admin_bar'        => __( 'Portfolio Item', 'chhapakhana' ),
        'archives'              => __( 'Item Archives', 'chhapakhana' ),
        'attributes'            => __( 'Item Attributes', 'chhapakhana' ),
        'parent_item_colon'     => __( 'Parent Item:', 'chhapakhana' ),
        'all_items'             => __( 'All Items', 'chhapakhana' ),
        'add_new_item'          => __( 'Add New Item', 'chhapakhana' ),
        'add_new'               => __( 'Add New', 'chhapakhana' ),
        'new_item'              => __( 'New Item', 'chhapakhana' ),
        'edit_item'             => __( 'Edit Item', 'chhapakhana' ),
        'update_item'           => __( 'Update Item', 'chhapakhana' ),
        'view_item'             => __( 'View Item', 'chhapakhana' ),
        'view_items'            => __( 'View Items', 'chhapakhana' ),
        'search_items'          => __( 'Search Item', 'chhapakhana' ),
        'not_found'             => __( 'Not found', 'chhapakhana' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'chhapakhana' ),
        'featured_image'        => __( 'Featured Image', 'chhapakhana' ),
        'set_featured_image'    => __( 'Set featured image', 'chhapakhana' ),
        'remove_featured_image' => __( 'Remove featured image', 'chhapakhana' ),
        'use_featured_image'    => __( 'Use as featured image', 'chhapakhana' ),
    );

    $args = array(
        'label'                 => __( 'Portfolio Item', 'chhapakhana' ),
        'description'           => __( 'Portfolio items', 'chhapakhana' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'taxonomies'            => array( 'portfolio_category' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-portfolio',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'chhapakhana_register_portfolio_post_type', 0 );

/**
 * Register Custom Taxonomy - Portfolio Category
 */
function chhapakhana_register_portfolio_taxonomy() {
    $labels = array(
        'name'                       => _x( 'Portfolio Categories', 'Taxonomy General Name', 'chhapakhana' ),
        'singular_name'              => _x( 'Portfolio Category', 'Taxonomy Singular Name', 'chhapakhana' ),
        'menu_name'                  => __( 'Categories', 'chhapakhana' ),
        'all_items'                  => __( 'All Categories', 'chhapakhana' ),
        'parent_item'                => __( 'Parent Category', 'chhapakhana' ),
        'parent_item_colon'          => __( 'Parent Category:', 'chhapakhana' ),
        'new_item_name'              => __( 'New Category Name', 'chhapakhana' ),
        'add_new_item'               => __( 'Add New Category', 'chhapakhana' ),
        'edit_item'                  => __( 'Edit Category', 'chhapakhana' ),
        'update_item'                => __( 'Update Category', 'chhapakhana' ),
        'view_item'                  => __( 'View Category', 'chhapakhana' ),
        'separate_items_with_commas' => __( 'Separate categories with commas', 'chhapakhana' ),
        'add_or_remove_items'        => __( 'Add or remove categories', 'chhapakhana' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'chhapakhana' ),
        'popular_items'              => __( 'Popular Categories', 'chhapakhana' ),
        'search_items'               => __( 'Search Categories', 'chhapakhana' ),
        'not_found'                  => __( 'Not Found', 'chhapakhana' ),
        'no_terms'                   => __( 'No categories', 'chhapakhana' ),
        'items_list'                 => __( 'Categories list', 'chhapakhana' ),
        'items_list_navigation'      => __( 'Categories list navigation', 'chhapakhana' ),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );

    register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );
}
add_action( 'init', 'chhapakhana_register_portfolio_taxonomy', 0 );

/**
 * Include custom files
 */
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/payu-gateway.php';

/**
 * Excerpt length
 */
function chhapakhana_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'chhapakhana_excerpt_length', 999 );

/**
 * Excerpt more
 */
function chhapakhana_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'chhapakhana_excerpt_more' );
