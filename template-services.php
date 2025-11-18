<?php
/**
 * Template Name: Services
 * The template for displaying Services page
 *
 * @package Chhapakhana
 */

get_header(); ?>

<!-- Featured Title -->
<div id="featured-title" class="featured-title clearfix">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="themesflat-headings style-1 text-center clearfix">
                <h2 class="heading">Our Services</h2>
                <div class="sep has-icon width-125 clearfix">
                    <div class="sep-icon">
                        <span class="sep-icon-before sep-center sep-solid"></span>
                        <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                        <span class="sep-icon-after sep-center sep-solid"></span>
                    </div>
                </div>
                <p class="sub-heading font-weight-400 text-808 max-width-680">We provide comprehensive publishing services to support authors and readers.</p>
            </div>
        </div>
    </div>
</div>
<!-- End Featured Title -->

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
               <div class="page-content">
                    <!-- SERVICES -->
                    <div class="row-services">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="81" data-mobile="60" data-smobile="60"></div>
                                    
                                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                        <div class="entry-content">
                                            <?php the_content(); ?>
                                        </div>
                                    <?php endwhile; endif; ?>
                                    
                                    <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">
                                        <div class="owl-carousel owl-theme">
                                            <!-- Service 1 -->
                                            <div class="themesflat-image-box style-2 clearfix">
                                                <div class="image-box-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item">
                                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/imagebox/image-box-1-370x215.jpg" alt="Publishing">
                                                            <div class="overlay-effect bg-color-accent"></div>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">BOOK PUBLISHING</a></h5>
                                                            <p class="letter-spacing-01">We handle the complete publishing process from manuscript to finished book distribution.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Service 2 -->
                                            <div class="themesflat-image-box style-2 clearfix">
                                                <div class="image-box-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item">
                                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/imagebox/image-box-2-370x215.jpg" alt="Editorial">
                                                            <div class="overlay-effect bg-color-accent"></div>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">EDITORIAL SERVICES</a></h5>
                                                            <p class="letter-spacing-01">Professional editing, proofreading, and content development services for your manuscript.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Service 3 -->
                                            <div class="themesflat-image-box style-2 clearfix">
                                                <div class="image-box-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item">
                                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/imagebox/image-box-3-370x215.jpg" alt="Design">
                                                            <div class="overlay-effect bg-color-accent"></div>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">COVER DESIGN</a></h5>
                                                            <p class="letter-spacing-01">Eye-catching book cover designs that attract readers and represent your story perfectly.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Service 4 -->
                                            <div class="themesflat-image-box style-2 clearfix">
                                                <div class="image-box-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item">
                                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/imagebox/image-box-4-370x215.jpg" alt="Distribution">
                                                            <div class="overlay-effect bg-color-accent"></div>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">DISTRIBUTION</a></h5>
                                                            <p class="letter-spacing-01">Wide distribution network to get your books to readers across multiple channels.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Service 5 -->
                                            <div class="themesflat-image-box style-2 clearfix">
                                                <div class="image-box-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item">
                                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/imagebox/image-box-5-370x215.jpg" alt="Marketing">
                                                            <div class="overlay-effect bg-color-accent"></div>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">MARKETING SUPPORT</a></h5>
                                                            <p class="letter-spacing-01">Comprehensive marketing strategies to promote your book and reach your target audience.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Service 6 -->
                                            <div class="themesflat-image-box style-2 clearfix">
                                                <div class="image-box-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item">
                                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/imagebox/image-box-6-370x215.jpg" alt="Digital">
                                                            <div class="overlay-effect bg-color-accent"></div>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">DIGITAL PUBLISHING</a></h5>
                                                            <p class="letter-spacing-01">E-book conversion and digital publishing services for online platforms and retailers.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.themesflat-carousel-box -->
                                    
                                    <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END SERVICES -->
               </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

<?php get_footer(); ?>
