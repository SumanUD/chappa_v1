<?php
/**
 * The template for displaying single portfolio items
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
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'portfolio-single' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                        <div class="portfolio-thumbnail">
                            <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                        </div>
                        <?php endif; ?>

                        <div class="portfolio-content">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="entry-content">
                                        <?php the_content(); ?>
                                    </div><!-- .entry-content -->
                                </div>

                                <div class="col-md-4">
                                    <div class="portfolio-info">
                                        <h4><?php esc_html_e( 'Project Information', 'chhapakhana' ); ?></h4>
                                        <ul>
                                            <li>
                                                <strong><?php esc_html_e( 'Category:', 'chhapakhana' ); ?></strong>
                                                <?php
                                                $terms = get_the_terms( get_the_ID(), 'portfolio_category' );
                                                if ( $terms && ! is_wp_error( $terms ) ) {
                                                    $term_names = array();
                                                    foreach ( $terms as $term ) {
                                                        $term_names[] = $term->name;
                                                    }
                                                    echo implode( ', ', $term_names );
                                                }
                                                ?>
                                            </li>
                                            <li>
                                                <strong><?php esc_html_e( 'Date:', 'chhapakhana' ); ?></strong>
                                                <?php echo get_the_date(); ?>
                                            </li>
                                        </ul>
                                    </div><!-- /.portfolio-info -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.portfolio-content -->
                    </article><!-- #post-<?php the_ID(); ?> -->

                    <?php
                    // Previous/Next portfolio navigation
                    the_post_navigation( array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous Project:', 'chhapakhana' ) . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next Project:', 'chhapakhana' ) . '</span> <span class="nav-title">%title</span>',
                    ) );

                endwhile;
                ?>

                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-content -->

<?php get_footer(); ?>
