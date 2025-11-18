<?php
/**
 * The template for displaying single posts (blog posts)
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
                    <h1 class="feautured-title-heading"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Featured Title -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>

                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail">
                            <?php chhapakhana_post_thumbnail(); ?>
                        </div>
                        <?php endif; ?>

                        <div class="post-meta">
                            <?php chhapakhana_posted_on(); ?>
                            <span class="sep">|</span>
                            <?php chhapakhana_posted_by(); ?>
                            <span class="sep">|</span>
                            <?php chhapakhana_post_categories(); ?>
                            <span class="sep">|</span>
                            <?php chhapakhana_comments_count(); ?>
                        </div><!-- /.post-meta -->

                        <div class="entry-content">
                            <?php
                            the_content();

                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'chhapakhana' ),
                                'after'  => '</div>',
                            ) );
                            ?>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer">
                            <?php chhapakhana_post_tags(); ?>
                            <?php chhapakhana_social_share(); ?>
                        </footer><!-- .entry-footer -->
                    </article><!-- #post-<?php the_ID(); ?> -->

                    <?php
                    // Author bio
                    if ( get_the_author_meta( 'description' ) ) : ?>
                        <div class="author-bio">
                            <div class="author-avatar">
                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 90 ); ?>
                            </div>
                            <div class="author-info">
                                <h4><?php echo esc_html( get_the_author() ); ?></h4>
                                <p><?php echo wp_kses_post( get_the_author_meta( 'description' ) ); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                    // Previous/Next post navigation
                    the_post_navigation( array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'chhapakhana' ) . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'chhapakhana' ) . '</span> <span class="nav-title">%title</span>',
                    ) );

                endwhile;
                ?>

                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-content -->

<?php get_footer(); ?>
