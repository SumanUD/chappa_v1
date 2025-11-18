<?php
/**
 * Template Name: Careers
 * The template for displaying Careers page
 *
 * @package Chhapakhana
 */

get_header(); ?>

<!-- Featured Title -->
<div id="featured-title" class="featured-title clearfix">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">                    
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="trail-begin">Home</a>
                        <span class="sep">|</span>
                        <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="trail-begin">About us</a>
                        <span class="sep">|</span>
                        <span class="trail-end">Careers</span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    Careers
                </h1>
            </div>
        </div><!-- /.featured-title-inner-wrap -->
    </div><!-- /#featured-title-inner -->            
</div>
<!-- End Featured Title -->

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                
                <!-- Career Banner -->
                <div class="themesflat-carousel-box data-effect clearfix" data-gap="0" data-column="1" data-column2="1" data-column3="1" data-auto="false">
                    <div class="owl-carousel owl-theme">
                        <div class="themesflat-gallery style-1 clearfix">
                            <div class="gallery-item">
                                <div class="inner">
                                    <div class="thumb">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/gallery/gallery-1-840x357.jpg" alt="Join Our Team">
                                        <div class="text-wrap">
                                            <span>We need you</span>
                                            <h5 class="heading">to join our team!</h5>
                                            <span>Apply now!</span>
                                            <a href="#apply" class="themesflat-button bg-accent">APPLY NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="themesflat-spacer clearfix" data-desktop="53" data-mobile="35" data-smobile="35"></div>
                
                <!-- Career Content -->
                <div class="themesflat-headings style-2 clearfix">
                    <h2 class="heading">JOIN OUR TEAM</h2>
                    <div class="sep has-width w80 accent-bg clearfix"></div>
                </div>
                
                <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35" data-smobile="35"></div>
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
                
                <!-- Job Openings -->
                <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                
                <div class="themesflat-headings style-2 clearfix">
                    <h3 class="heading">CURRENT OPENINGS</h3>
                    <div class="sep has-width w80 accent-bg clearfix"></div>
                </div>
                
                <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="35" data-smobile="35"></div>
                
                <div class="themesflat-row gutter-30 clearfix">
                    <div class="col span_1_of_2">
                        <div class="themesflat-content-box clearfix">
                            <div class="themesflat-icon-box icon-left style-2 clearfix">
                                <div class="icon-wrap">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <div class="text-wrap">
                                    <h5 class="heading"><a href="#">Senior Editor</a></h5>
                                    <p class="sub-heading">Full-time | Kolkata | Experience: 5+ years</p>
                                    <p>We're looking for an experienced editor to join our editorial team.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col span_1_of_2">
                        <div class="themesflat-content-box clearfix">
                            <div class="themesflat-icon-box icon-left style-2 clearfix">
                                <div class="icon-wrap">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <div class="text-wrap">
                                    <h5 class="heading"><a href="#">Marketing Executive</a></h5>
                                    <p class="sub-heading">Full-time | Kolkata | Experience: 3+ years</p>
                                    <p>Join our marketing team to promote our publications effectively.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="themesflat-row gutter-30 clearfix">
                    <div class="col span_1_of_2">
                        <div class="themesflat-content-box clearfix">
                            <div class="themesflat-icon-box icon-left style-2 clearfix">
                                <div class="icon-wrap">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <div class="text-wrap">
                                    <h5 class="heading"><a href="#">Graphic Designer</a></h5>
                                    <p class="sub-heading">Full-time | Kolkata | Experience: 2+ years</p>
                                    <p>Create stunning book covers and marketing materials.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col span_1_of_2">
                        <div class="themesflat-content-box clearfix">
                            <div class="themesflat-icon-box icon-left style-2 clearfix">
                                <div class="icon-wrap">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <div class="text-wrap">
                                    <h5 class="heading"><a href="#">Sales Manager</a></h5>
                                    <p class="sub-heading">Full-time | Kolkata | Experience: 4+ years</p>
                                    <p>Drive sales and build relationships with distributors and retailers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Application Form Section -->
                <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="40" data-smobile="40"></div>
                
                <div id="apply" class="themesflat-headings style-2 clearfix">
                    <h3 class="heading">APPLY NOW</h3>
                    <div class="sep has-width w80 accent-bg clearfix"></div>
                    <p class="sub-heading margin-top-20">Send your resume and cover letter to: careers@chhapakhana.com</p>
                </div>
                
                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

<?php get_footer(); ?>
