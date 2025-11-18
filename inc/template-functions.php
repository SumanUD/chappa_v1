<?php
/**
 * Template Functions
 *
 * @package Chhapakhana
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add body classes
 */
function chhapakhana_body_classes( $classes ) {
    // Add class if sidebar is active
    if ( is_active_sidebar( 'sidebar-1' ) && ! is_page() ) {
        $classes[] = 'has-sidebar';
    } else {
        $classes[] = 'no-sidebar';
    }

    // Add class based on page template
    if ( is_front_page() ) {
        $classes[] = 'header-fixed page no-sidebar header-style-3 topbar-style-3 site-header-absolute menu-has-search';
    }

    return $classes;
}
add_filter( 'body_class', 'chhapakhana_body_classes' );

/**
 * Custom navigation walker
 */
class Chhapakhana_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }
}

/**
 * Get portfolio categories for filter
 */
function chhapakhana_get_portfolio_categories() {
    $terms = get_terms( array(
        'taxonomy' => 'portfolio_category',
        'hide_empty' => true,
    ) );

    return $terms;
}

/**
 * Get portfolio items
 */
function chhapakhana_get_portfolio_items( $category = '', $limit = -1 ) {
    $args = array(
        'post_type' => 'portfolio',
        'posts_per_page' => $limit,
        'orderby' => 'date',
        'order' => 'DESC',
    );

    if ( ! empty( $category ) ) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'portfolio_category',
                'field' => 'slug',
                'terms' => $category,
            ),
        );
    }

    return new WP_Query( $args );
}

/**
 * Pagination
 */
function chhapakhana_pagination() {
    global $wp_query;

    if ( $wp_query->max_num_pages <= 1 ) {
        return;
    }

    $big = 999999999;

    $pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type' => 'array',
        'prev_text' => '<i class="fa fa-angle-left"></i>',
        'next_text' => '<i class="fa fa-angle-right"></i>',
    ) );

    if ( is_array( $pages ) ) {
        echo '<ul class="flat-pagination">';
        foreach ( $pages as $page ) {
            echo '<li>' . $page . '</li>';
        }
        echo '</ul>';
    }
}

/**
 * Display breadcrumbs
 */
function chhapakhana_breadcrumbs() {
    if ( is_front_page() ) {
        return;
    }

    echo '<div class="breadcrumbs">';
    echo '<div class="container">';
    echo '<ul class="breadcrumb-trail">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';

    if ( is_single() ) {
        $categories = get_the_category();
        if ( $categories ) {
            echo '<li><a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a></li>';
        }
        echo '<li class="active">' . get_the_title() . '</li>';
    } elseif ( is_page() ) {
        echo '<li class="active">' . get_the_title() . '</li>';
    } elseif ( is_category() ) {
        echo '<li class="active">' . single_cat_title( '', false ) . '</li>';
    } elseif ( is_archive() ) {
        echo '<li class="active">' . post_type_archive_title( '', false ) . '</li>';
    }

    echo '</ul>';
    echo '</div>';
    echo '</div>';
}
