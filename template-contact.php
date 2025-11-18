<?php
/**
 * Template Name: Contact Page
 * Template for Contact page
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
                    the_content();
                endwhile;
                ?>

                <!-- Contact Form Section -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="themesflat-contact-form style-2 clearfix">
                            <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" class="contact-form wpcf7-form" id="contactform">
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" tabindex="1" id="name" name="name" value="" class="wpcf7-form-control" placeholder="Name*" required>
                                </span>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" tabindex="2" id="email" name="email" value="" class="wpcf7-form-control" placeholder="Email *" required>
                                </span>
                                <span class="wpcf7-form-control-wrap your-phone">
                                    <input type="text" tabindex="3" id="phone" name="phone" value="" class="wpcf7-form-control" placeholder="Phone">
                                </span>
                                <span class="wpcf7-form-control-wrap your-subject">
                                    <input type="text" tabindex="4" id="subject" name="subject" value="" class="wpcf7-form-control" placeholder="Subject">
                                </span>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea name="message" tabindex="5" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Message*" required></textarea>
                                </span>
                                <span class="wrap-submit">
                                    <input type="submit" value="SEND US" class="submit wpcf7-form-control wpcf7-submit" id="submit" name="submit">
                                </span>
                            </form>
                        </div><!-- /.themesflat-contact-form -->
                    </div><!-- /.col-md-8 -->

                    <div class="col-md-4">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                        <div class="themesflat-contact-info clearfix">
                            <div class="item">
                                <div class="inner">
                                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                                    <div class="content">
                                        <h6>Address:</h6>
                                        <p>PO BOX 16122 Collins Street<br>West Victoria 8007, Australia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner">
                                    <div class="icon"><i class="fa fa-phone"></i></div>
                                    <div class="content">
                                        <h6>Phone:</h6>
                                        <p>+61 3 8376 6284</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner">
                                    <div class="icon"><i class="fa fa-envelope"></i></div>
                                    <div class="content">
                                        <h6>Email:</h6>
                                        <p>support@chhapakhana.com</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.themesflat-contact-info -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->

                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-content -->

<?php get_footer(); ?>
