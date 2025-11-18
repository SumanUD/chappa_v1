<?php
/**
 * Template Name: Team
 * The template for displaying Team page
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
                        <span class="trail-end">Team</span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    Leadership Team
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
                    <h2 class="heading">LEADERSHIP TEAM</h2>
                    <div class="sep has-width w80 accent-bg clearfix"></div>                                           
                    <p class="sub-heading font-size-16 line-height-28 text-666 margin-top-27">Meet the experienced professionals leading Chhapakhana toward excellence in publishing.</p>
                </div>
                
                <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
                
                <!-- Team Members -->
                <div class="themesflat-content-box clearfix" data-margin="0 15px 0 0" data-mobilemargin="0 0 0 0">
                    <ol class="comment-list style-2">
                        <li class="comment">
                            <article class="comment-wrap clearfix">
                                <div class="gravatar"><img alt="Rajesh Kumar" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team/team-1-106x106.jpg" /></div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h6 class="comment-author">Rajesh Kumar</h6>
                                        <span class="comment-time">Managing Director</span>
                                    </div>
                                    <div class="comment-text">
                                        <p>With over 20 years of experience in the publishing industry, Rajesh leads our strategic vision and operations.</p>
                                    </div>
                                </div>
                            </article>
                        </li>
                        
                        <li class="comment">
                            <article class="comment-wrap clearfix">
                                <div class="gravatar"><img alt="Priya Mukherjee" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team/team-2-106x106.jpg" /></div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h6 class="comment-author">Priya Mukherjee</h6>
                                        <span class="comment-time">Editorial Director</span>
                                    </div>
                                    <div class="comment-text">
                                        <p>Priya oversees our editorial team and ensures every publication meets our high standards of quality.</p>
                                    </div>
                                </div>
                            </article>
                        </li>
                        
                        <li class="comment">
                            <article class="comment-wrap clearfix">
                                <div class="gravatar"><img alt="Anirban Chakraborty" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team/team-3-106x106.jpg" /></div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h6 class="comment-author">Anirban Chakraborty</h6>
                                        <span class="comment-time">Production Head</span>
                                    </div>
                                    <div class="comment-text">
                                        <p>Anirban manages our production processes, ensuring timely delivery and exceptional print quality.</p>
                                    </div>
                                </div>
                            </article>
                        </li>
                        
                        <li class="comment">
                            <article class="comment-wrap clearfix">
                                <div class="gravatar"><img alt="Sharmila Sen" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team/team-4-106x106.jpg" /></div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h6 class="comment-author">Sharmila Sen</h6>
                                        <span class="comment-time">Marketing Manager</span>
                                    </div>
                                    <div class="comment-text">
                                        <p>Sharmila drives our marketing initiatives and helps our books reach their target audiences effectively.</p>
                                    </div>
                                </div>
                            </article>
                        </li>
                    </ol>
                </div>
                
                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

<?php get_footer(); ?>
