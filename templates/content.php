<?php
/**
 * Template part for displaying posts
 *
 * @package Chhapakhana
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-item' ); ?>>
    <?php if ( has_post_thumbnail() && ! is_single() ) : ?>
    <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'chhapakhana-blog-thumb', array( 'class' => 'img-responsive' ) ); ?>
        </a>
    </div>
    <?php endif; ?>

    <div class="post-content">
        <h3 class="post-title">
            <?php
            if ( is_single() ) {
                the_title();
            } else {
                ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php
            }
            ?>
        </h3>

        <div class="post-meta">
            <?php chhapakhana_posted_on(); ?>
            <span class="sep">|</span>
            <?php chhapakhana_posted_by(); ?>
            <span class="sep">|</span>
            <?php chhapakhana_post_categories(); ?>
        </div>

        <div class="post-excerpt">
            <?php
            if ( is_single() ) {
                the_content();
            } else {
                the_excerpt();
            }
            ?>
        </div>

        <?php if ( ! is_single() ) : ?>
        <div class="post-readmore">
            <a href="<?php the_permalink(); ?>" class="themesflat-button">Read More</a>
        </div>
        <?php endif; ?>
    </div><!-- /.post-content -->
</article><!-- #post-<?php the_ID(); ?> -->
