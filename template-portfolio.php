<?php
/**
 * Template Name: Portfolio Page
 * Template for Portfolio/Projects page
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

                <!-- Portfolio Filter -->
                <div class="portfolio-filter clearfix">
                    <ul class="filter-list">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <?php
                        $categories = chhapakhana_get_portfolio_categories();
                        if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
                            foreach ( $categories as $category ) {
                                echo '<li><a href="#" data-filter=".' . esc_attr( $category->slug ) . '">' . esc_html( $category->name ) . '</a></li>';
                            }
                        }
                        ?>
                    </ul>
                </div>

                <!-- Portfolio Grid -->
                <div class="portfolio-wrap isotope-grid clearfix">
                    <?php
                    $portfolio_query = chhapakhana_get_portfolio_items();
                    if ( $portfolio_query->have_posts() ) :
                        while ( $portfolio_query->have_posts() ) :
                            $portfolio_query->the_post();
                            $terms = get_the_terms( get_the_ID(), 'portfolio_category' );
                            $term_slugs = array();
                            if ( $terms && ! is_wp_error( $terms ) ) {
                                foreach ( $terms as $term ) {
                                    $term_slugs[] = $term->slug;
                                }
                            }
                            $classes = implode( ' ', $term_slugs );
                            ?>
                            <div class="themesflat-project-item <?php echo esc_attr( $classes ); ?> col-md-4">
                                <div class="inner">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="thumb data-effect-item has-effect-icon">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail( 'chhapakhana-portfolio-thumb', array( 'class' => 'img-responsive' ) ); ?>
                                        </a>
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link">
                                            <a href="<?php the_permalink(); ?>" class="icon-2"></a>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <div class="text-wrap">
                                        <h5 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                        <div class="cat">
                                            <?php
                                            if ( $terms && ! is_wp_error( $terms ) ) {
                                                $term_names = array();
                                                foreach ( $terms as $term ) {
                                                    $term_names[] = $term->name;
                                                }
                                                echo implode( ', ', $term_names );
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        ?>
                        <div class="col-md-12">
                            <p><?php esc_html_e( 'No portfolio items found.', 'chhapakhana' ); ?></p>
                        </div>
                        <?php
                    endif;
                    ?>
                </div><!-- /.portfolio-wrap -->

                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-content -->

<?php get_footer(); ?>
