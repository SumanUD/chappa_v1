<?php
/**
 * Template Name: Blog Page
 * Template for Blog/News page
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
            <div class="col-md-9">
                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>

                <?php
                // Blog posts query
                $blog_query = new WP_Query( array(
                    'post_type' => 'post',
                    'posts_per_page' => 10,
                    'orderby' => 'date',
                    'order' => 'DESC'
                ) );

                if ( $blog_query->have_posts() ) :
                    while ( $blog_query->have_posts() ) :
                        $blog_query->the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post-item' ); ?> style="margin-bottom: 50px; border-bottom: 1px solid #eee; padding-bottom: 50px;">
                            <div class="post-header">
                                <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-thumbnail" style="margin-bottom: 20px;">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'chhapakhana-blog-thumb', array( 'class' => 'img-responsive' ) ); ?>
                                    </a>
                                </div>
                                <?php endif; ?>

                                <h2 class="post-title" style="margin-bottom: 10px;">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>

                                <div class="post-meta" style="color: #999; margin-bottom: 15px;">
                                    <span class="post-date">
                                        <i class="fa fa-calendar"></i>
                                        <?php echo get_the_date( 'F j, Y' ); ?>
                                    </span>
                                    <span class="post-author" style="margin-left: 20px;">
                                        <i class="fa fa-user"></i>
                                        By <?php the_author(); ?>
                                    </span>
                                    <span class="post-category" style="margin-left: 20px;">
                                        <i class="fa fa-folder"></i>
                                        <?php the_category( ', ' ); ?>
                                    </span>
                                </div>
                            </div>

                            <div class="post-content">
                                <?php the_excerpt(); ?>
                            </div>

                            <div class="post-footer" style="margin-top: 20px;">
                                <a href="<?php the_permalink(); ?>" class="read-more" style="color: #e74c3c; font-weight: 600; text-decoration: none;">
                                    Read More <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </article><!-- #post-<?php the_ID(); ?> -->
                        <?php
                    endwhile;

                    // Pagination
                    echo '<div style="margin-top: 40px; text-align: center;">';
                    the_posts_pagination( array(
                        'prev_text' => __( '← Previous', 'chhapakhana' ),
                        'next_text' => __( 'Next →', 'chhapakhana' ),
                    ) );
                    echo '</div>';

                    wp_reset_postdata();
                else :
                    ?>
                    <div class="no-posts-found">
                        <p><?php esc_html_e( 'No blog posts found.', 'chhapakhana' ); ?></p>
                    </div>
                    <?php
                endif;
                ?>

                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
            </div><!-- /.col-md-9 -->

            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="60"></div>
                <?php
                if ( is_active_sidebar( 'sidebar-1' ) ) {
                    dynamic_sidebar( 'sidebar-1' );
                }
                ?>
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-content -->

<?php get_footer(); ?>
