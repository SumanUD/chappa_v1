<?php
/**
 * Template Tags
 *
 * @package Chhapakhana
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Display post meta
 */
function chhapakhana_posted_on() {
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

    $time_string = sprintf( $time_string,
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date() )
    );

    echo '<span class="posted-on">' . $time_string . '</span>';
}

/**
 * Display post author
 */
function chhapakhana_posted_by() {
    echo '<span class="byline">';
    echo '<span class="author vcard">';
    echo '<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>';
    echo '</span>';
    echo '</span>';
}

/**
 * Display post categories
 */
function chhapakhana_post_categories() {
    $categories_list = get_the_category_list( ', ' );
    if ( $categories_list ) {
        echo '<span class="cat-links">' . $categories_list . '</span>';
    }
}

/**
 * Display post tags
 */
function chhapakhana_post_tags() {
    $tags_list = get_the_tag_list( '', ', ' );
    if ( $tags_list ) {
        echo '<div class="tags-links">' . $tags_list . '</div>';
    }
}

/**
 * Display comments count
 */
function chhapakhana_comments_count() {
    if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
        echo '<span class="comments-link">';
        comments_popup_link(
            esc_html__( 'Leave a comment', 'chhapakhana' ),
            esc_html__( '1 Comment', 'chhapakhana' ),
            esc_html__( '% Comments', 'chhapakhana' )
        );
        echo '</span>';
    }
}

/**
 * Display post thumbnail with link
 */
function chhapakhana_post_thumbnail() {
    if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
        return;
    }

    if ( is_singular() ) {
        the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
    } else {
        echo '<a href="' . esc_url( get_permalink() ) . '" class="post-thumbnail">';
        the_post_thumbnail( 'chhapakhana-blog-thumb', array( 'class' => 'img-responsive' ) );
        echo '</a>';
    }
}

/**
 * Get social share links
 */
function chhapakhana_social_share() {
    if ( ! is_single() ) {
        return;
    }

    $url = urlencode( get_permalink() );
    $title = urlencode( get_the_title() );

    echo '<div class="social-share">';
    echo '<h4>Share This:</h4>';
    echo '<ul>';
    echo '<li><a href="https://www.facebook.com/sharer/sharer.php?u=' . $url . '" target="_blank"><i class="fa fa-facebook"></i></a></li>';
    echo '<li><a href="https://twitter.com/intent/tweet?url=' . $url . '&text=' . $title . '" target="_blank"><i class="fa fa-twitter"></i></a></li>';
    echo '<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=' . $url . '&title=' . $title . '" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
    echo '<li><a href="https://pinterest.com/pin/create/button/?url=' . $url . '&description=' . $title . '" target="_blank"><i class="fa fa-pinterest"></i></a></li>';
    echo '</ul>';
    echo '</div>';
}
