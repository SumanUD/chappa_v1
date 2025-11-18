<?php
/**
 * Template Name: About Detail
 * The template for displaying About Detail page
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
                        <span class="trail-end">About us detail</span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    <?php the_title(); ?>
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
                <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                <div class="themesflat-headings style-2 clearfix">
                    <h2 class="heading">OUR COMPANIES</h2>
                    <div class="sep has-width w80 accent-bg clearfix"></div>                                           
                    
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="sub-heading line-height-24 text-777 margin-top-28 margin-right-12">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="28" data-mobile="35" data-smobile="35"></div>
                
                <!-- Icon Boxes -->
                <div class="themesflat-row gutter-15 clearfix">
                    <div class="col span_1_of_4">
                        <div class="themesflat-content-box clearfix" data-margin="0 0px 0 0px" data-mobilemargin="0 0 0 0">
                            <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color border-light padding-inner pd33 style-1 clearfix">
                                <div class="icon-wrap">
                                    <i class="autora-icon-quality"></i>
                                </div>
                                <div class="text-wrap">
                                    <h5 class="heading"><a href="#">BEST QUALITY</a></h5>
                                    <div class="sep clearfix"></div>
                                    <p class="sub-heading">We are committed to meeting the highest quality standards in all our publishing endeavors.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col span_1_of_4">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                        <div class="themesflat-content-box clearfix" data-margin="0 0px 0 0px" data-mobilemargin="0 0 0 0">
                            <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color border-light padding-inner pd33 style-1 clearfix">
                                <div class="icon-wrap">
                                    <i class="autora-icon-time"></i>
                                </div>
                                <div class="text-wrap">
                                    <h5 class="heading"><a href="#">ON TIME</a></h5>
                                    <div class="sep clearfix"></div>
                                    <p class="sub-heading">We respect deadlines and always deliver projects on time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col span_1_of_4">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                        <div class="themesflat-content-box clearfix" data-margin="0 0px 0 0px" data-mobilemargin="0 0 0 0">
                            <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color border-light padding-inner pd33 style-1 clearfix">
                                <div class="icon-wrap">
                                    <i class="autora-icon-author"></i>
                                </div>
                                <div class="text-wrap">
                                    <h5 class="heading"><a href="#">EXPERIENCED</a></h5>
                                    <div class="sep clearfix"></div>
                                    <p class="sub-heading">With years of experience, we deliver exceptional results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="35" data-smobile="35"></div>
                
                <!-- History Section -->
                <div class="themesflat-headings style-2 clearfix">
                    <h2 class="heading">OUR HISTORY</h2>
                    <div class="sep has-width w80 accent-bg clearfix"></div>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="24" data-mobile="35" data-smobile="35"></div>
                <div class="themesflat-row separator drank clearfix">                            
                    <div class="span_1_of_6 separator-solid">
                        <div class="flat-content-wrap">
                            <div class="title">2010</div>
                            <p>Chhapakhana was founded with a vision to promote quality Bengali literature.</p>
                        </div>
                        <div class="flat-content-wrap">
                            <div class="title">2018</div>
                            <p>Expanded operations to digital publishing and e-books.</p>
                        </div>
                    </div>
                    <div class="span_1_of_6 separator-solid">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                        <div class="flat-content-wrap pd26">
                            <div class="title">2015</div>
                            <p>Published over 500 titles across multiple genres.</p>
                        </div>
                        <div class="flat-content-wrap pd26">
                            <div class="title">2025</div>
                            <p>Leading publishing house with international distribution network.</p>
                        </div>
                    </div>
                </div>
                
                <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                
                <!-- Core Values -->
                <div class="themesflat-headings style-2 clearfix">
                    <h2 class="heading">OUR CORE VALUES</h2>
                    <div class="sep has-width w80 accent-bg clearfix"></div>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35" data-smobile="35"></div>
                <div class="themesflat-content-box" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                    <div class="themesflat-accordions style-3 has-icon icon-left iconstyle-2 our-background clearfix">
                        <div class="accordion-item active">
                            <h3 class="accordion-heading"><span class="inner">Our Mission</span></h3>
                            <div class="accordion-content">
                                <div>To discover, nurture, and publish quality literature that enriches readers' lives and supports authors in achieving their creative vision.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-heading"><span class="inner">Our Vision</span></h3>
                            <div class="accordion-content">
                                <div>To become the leading publishing house that empowers authors and brings exceptional Bengali literature to readers worldwide.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-heading"><span class="inner">Our Technology</span></h3>
                            <div class="accordion-content">
                                <div>We leverage modern publishing technology to streamline production, enhance distribution, and provide better services to our authors and readers.</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

<?php get_footer(); ?>
