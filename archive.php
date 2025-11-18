<?php
/**
 * The template for displaying archive pages (blog listing)
 *
 * @package Chhapakhana
 */

get_header(); ?>

<div class="page-content">
    <!-- Featured Title -->
    <div id="featured-title" class="featured-title clearfix">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div id="breadcrumbs">
                    <?php chhapakhana_breadcrumbs(); ?>
                </div>
                <div class="featured-title-heading-wrap">
                    <h1 class="feautured-title-heading">
                        <?php
                        if ( is_category() ) {
                            single_cat_title();
                        } elseif ( is_tag() ) {
                            single_tag_title();
                        } elseif ( is_author() ) {
                            the_author();
                        } elseif ( is_date() ) {
                            echo get_the_date();
                        } else {
                            esc_html_e( 'Blog', 'chhapakhana' );
                        }
                        ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Featured Title -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>

                <?php if ( have_posts() ) : ?>
                    <div class="blog-content">
                        <div class="row">
                            <?php
                            while ( have_posts() ) :
                                the_post();
                                ?>
                                <div class="col-md-6">
                                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-item' ); ?>>
                                        <?php if ( has_post_thumbnail() ) : ?>
                                        <div class="post-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail( 'chhapakhana-blog-thumb', array( 'class' => 'img-responsive' ) ); ?>
                                            </a>
                                        </div>
                                        <?php endif; ?>

                                        <div class="post-content">
                                            <h3 class="post-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>

                                            <div class="post-meta">
                                                <?php chhapakhana_posted_on(); ?>
                                                <span class="sep">|</span>
                                                <?php chhapakhana_posted_by(); ?>
                                                <span class="sep">|</span>
                                                <?php chhapakhana_post_categories(); ?>
                                            </div>

                                            <div class="post-excerpt">
                                                <?php the_excerpt(); ?>
                                            </div>

                                            <div class="post-readmore">
                                                <a href="<?php the_permalink(); ?>" class="themesflat-button">Read More</a>
                                            </div>
                                        </div><!-- /.post-content -->
                                    </article><!-- #post-<?php the_ID(); ?> -->
                                </div>
                                <?php
                            endwhile;
                            ?>
                        </div><!-- /.row -->
                    </div><!-- /.blog-content -->

                    <div class="themesflat-pagination clearfix">
                        <?php chhapakhana_pagination(); ?>
                    </div>
                <?php else : ?>
                    <div class="no-results">
                        <h2><?php esc_html_e( 'Nothing Found', 'chhapakhana' ); ?></h2>
                        <p><?php esc_html_e( 'It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'chhapakhana' ); ?></p>
                        <?php get_search_form(); ?>
                    </div>
                <?php endif; ?>

                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-content -->

<?php get_footer(); ?>
