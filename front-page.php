<?php
/**
 * Template Name: Front Page
 * The template for displaying the home page
 *
 * @package Chhapakhana
 */

get_header(); ?>

                    </div><!-- /#inner-content (close from header.php) -->
                </div><!-- /#site-content (close from header.php) -->
            </div><!-- /#content-wrap (close from header.php) -->

<div class="page-content">
    <!-- SLIDER -->
    <div class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev-slider2" class="rev_slider fullwidthabanner">
            <ul>
                <!-- Slide 1 -->
                <li data-transition="random">
                    <!-- Main Image -->
                    <?php $theme_uri = esc_url( wp_make_link_relative( get_template_directory_uri() ) ); ?>
                    <img src="<?php echo $theme_uri; ?>/assets/img/chapa/banner3.jpg" alt="" data-bgposition="center center" data-no-retina>

                    <!-- Layers -->
                    <div class="tp-caption tp-resizeme text-white font-heading font-weight-600 "
                        data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-90','-90','-90','-90']"
                        data-fontsize="['20','20','20','16']"
                        data-lineheight="['70','70','40','24']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="700"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        A GLOBAL LEADER IN INFRASTRUCTURE
                    </div>

                    <div class="tp-caption tp-resizeme text-white font-heading font-weight-700"
                        data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']"
                        data-fontsize="['52','52','42','32']"
                        data-lineheight="['65','65','45','35']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        WE WILL BE HAPPY
                    </div>

                    <div class="tp-caption tp-resizeme text-white font-heading font-weight-700"
                        data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['45','45','45','45']"
                        data-fontsize="['52','52','42','32']"
                        data-lineheight="['65','65','45','35']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        TO TAKE CARE OF YOUR WORK
                    </div>

                    <div class="tp-caption "
                        data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['153','153','153','153']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="themesflat-button bg-accent big"><span>GET IN TOUCH</span></a>
                    </div>
                </li>
                <!-- /End Slide 1 -->

                <!-- Slide 2 -->
                <li data-transition="random">
                    <!-- Main Image -->
                    <img src="<?php echo $theme_uri; ?>/assets/img/chapa/banner2.jpg" alt="" data-bgposition="center center" data-no-retina>

                    <!-- Layers -->
                    <div class="tp-caption tp-resizeme text-white font-heading font-weight-600 text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-90','-90','-90','-90']"
                        data-fontsize="['20','20','20','16']"
                        data-lineheight="['70','70','40','24']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="700"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        PROFESSIONAL & DEDICATED TEAM
                    </div>

                    <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']"
                        data-fontsize="['52','52','42','32']"
                        data-lineheight="['65','65','45','35']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        BUILDING STRUCTURES
                    </div>

                    <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['45','45','45','45']"
                        data-fontsize="['52','52','42','32']"
                        data-lineheight="['65','65','45','35']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        FOR A BETTER TOMORROW
                    </div>

                    <div class="tp-caption text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['153','153','153','153']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="themesflat-button bg-accent big"><span>LEARN MORE</span></a>
                    </div>
                </li>
                <!-- /End Slide 2 -->
            </ul>
        </div><!-- /.rev_slider -->
    </div><!-- /.rev_slider_wrapper -->
    <!-- END SLIDER -->

    <!-- YOUR BEST CHOOSE -->
    <div class="row-iconbox">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                    <div class="themesflat-headings style-1 text-center clearfix">
                        <h2 class="heading">YOUR BEST CHOOSE</h2>
                        <div class="sep has-icon width-125 clearfix">
                            <div class="sep-icon">
                                <span class="sep-icon-before sep-center sep-solid"></span>
                                <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                <span class="sep-icon-after sep-center sep-solid"></span>
                            </div>
                        </div>
                        <p class="sub-heading">More than 500 projects completed in Chhapakhana - With over 25 years of combined experience, we have the knowledge to serve you.</p>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-4">
                    <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                        <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                            <div class="icon-wrap">
                                <i class="autora-icon-quality"></i>
                            </div>
                            <div class="text-wrap">
                                <h5 class="heading"><a href="#">BEST QUALITY</a></h5>
                                <div class="sep clearfix"></div>
                                <p class="sub-heading">Chhapakhana is committed to meeting the highest quality standards without compromising our safety culture and professional standards.</p>
                            </div>
                        </div><!-- /.themesflat-icon-box -->
                    </div><!-- /.themesflat-content-box -->                                         
                </div><!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                    <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                        <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                            <div class="icon-wrap">
                                <i class="autora-icon-time"></i>
                            </div>
                            <div class="text-wrap">
                                <h5 class="heading"><a href="#">ON TIME</a></h5>
                                <div class="sep clearfix"></div>
                                <p class="sub-heading">We respect the customer's time and schedule and always complete the projects in a timely fashion to meet deadlines.</p>
                            </div>
                        </div><!-- /.themesflat-icon-box -->
                    </div><!-- /.themesflat-content-box -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                    <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                        <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                            <div class="icon-wrap">
                                <i class="autora-icon-author"></i>
                            </div>
                            <div class="text-wrap">
                                <h5 class="heading"><a href="#">EXPERIENCED</a></h5>
                                <div class="sep clearfix"></div>
                                <p class="sub-heading">With our years of experience and dedication, you can rely on us to deliver excellent work exactly to your specifications.</p>
                            </div>
                        </div><!-- /.themesflat-icon-box -->
                    </div><!-- /.themesflat-content-box -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="41" data-mobile="35" data-smobile="35"></div>
                    <div class="elm-button text-center">
                        <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="themesflat-button bg-accent">ABOUT US</a>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- END YOUR BEST CHOOSE -->

    <!-- WELCOME TO CHHAPAKHANA -->
    <div class="row-about">
        <div class="container-fluid">
            <div class="row equalize sm-equalize-auto">
                <div class="col-md-6 half-background style-1">
                    <!-- Background image will be set via CSS -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 bg-light-grey">
                    <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="60" data-smobile="60"></div>
                    <div class="themesflat-content-box clearfix" data-margin="0 25% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                        <div class="themesflat-headings style-1 clearfix">
                            <h2 class="heading">WELCOME TO CHHAPAKHANA</h2>
                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>                                               
                            <p class="sub-heading margin-top-30">We have successfully completed numerous projects across multiple locations. Chhapakhana has a proven track record of:</p>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="35" data-smobile="35"></div>
                        <div class="content-list">
                            <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                <div class="inner">
                                    <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">Completing projects on time & Following budget guidelines</span>
                                    </span>
                                </div>
                            </div><!-- /.themeslat-list -->
                            <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                <div class="inner">
                                    <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">Elevated quality of workmanship and attention to detail</span>
                                    </span>
                                </div>
                            </div><!-- /.themeslat-list -->
                            <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                <div class="inner">
                                    <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">Meeting diverse supplier and vendor requirements</span>
                                    </span>
                                </div>
                            </div><!-- /.themeslat-list -->
                            <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                <div class="inner">
                                    <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">Implementing appropriate safety precautions and procedures</span>
                                    </span>
                                </div>
                            </div><!-- /.themeslat-list -->
                        </div><!-- /.content-list -->
                        <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                        <div class="elm-button" style="display: flex; gap: 15px; flex-wrap: wrap;">
                            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="themesflat-button bg-white">GET IN TOUCH</a>
                            <a href="<?php echo esc_url( home_url( '/books' ) ); ?>" class="themesflat-button bg-accent">EXPLORE BOOKS</a>
                        </div>
                    </div><!-- /.themesflat-content-box --> 
                    <div class="themesflat-spacer clearfix" data-desktop="75" data-mobile="60" data-smobile="60"></div>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- END WELCOME TO CHHAPAKHANA -->

    <!-- WELCOME TO BLACK PAPER -->
    <div class="row-about">
        <div class="container-fluid">
            <div class="row equalize sm-equalize-auto">
                <div class="col-md-6 bg-light-grey">
                    <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="60" data-smobile="60"></div>
                    <div class="themesflat-content-box clearfix" data-margin="0 25% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                        <div class="themesflat-headings style-1 clearfix">
                            <h2 class="heading">WELCOME TO BLACK PAPER</h2>
                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>                                               
                            <p class="sub-heading margin-top-30">Black Paper represents our premium collection and curated selection. We have a strong track record of:</p>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="35" data-smobile="35"></div>
                        <div class="content-list">
                            <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                <div class="inner">
                                    <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">Premium quality curation and expert selection</span>
                                    </span>
                                </div>
                            </div><!-- /.themeslat-list -->
                            <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                <div class="inner">
                                    <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">Timely delivery and consistent availability</span>
                                    </span>
                                </div>
                            </div><!-- /.themeslat-list -->
                            <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                <div class="inner">
                                    <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">Exceptional customer service and support</span>
                                    </span>
                                </div>
                            </div><!-- /.themeslat-list -->
                            <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                <div class="inner">
                                    <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">Rigorous quality assurance and testing</span>
                                    </span>
                                </div>
                            </div><!-- /.themeslat-list -->
                        </div><!-- /.content-list -->
                        <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                        <div class="elm-button">
                            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="themesflat-button bg-white">GET IN TOUCH</a>
                        </div>
                    </div><!-- /.themesflat-content-box --> 
                    <div class="themesflat-spacer clearfix" data-desktop="75" data-mobile="60" data-smobile="60"></div>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 half-background style-x">
                    <!-- Background image will be set via CSS -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- END WELCOME TO BLACK PAPER -->

    <!-- PORTFOLIO SECTION -->
    <div class="row-portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                    <div class="themesflat-headings style-1 text-center clearfix">
                        <h2 class="heading">OUR PORTFOLIO</h2>
                        <div class="sep has-icon width-125 clearfix">
                            <div class="sep-icon">
                                <span class="sep-icon-before sep-center sep-solid"></span>
                                <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                <span class="sep-icon-after sep-center sep-solid"></span>
                            </div>
                        </div>
                        <p class="sub-heading">Explore our diverse collection of projects across various categories and genres.</p>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <!-- Filter Categories -->
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-filter text-center margin-bottom-50">
                        <a href="#" class="filter-item active" data-filter="*">All</a>
                        <a href="#" class="filter-item" data-filter=".goyenda-golpo">Goyenda Golpo</a>
                        <a href="#" class="filter-item" data-filter=".probondo">Probondo</a>
                        <a href="#" class="filter-item" data-filter=".horror">Horror</a>
                        <a href="#" class="filter-item" data-filter=".sports">Sports</a>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <!-- Portfolio Items Grid -->
            <div class="row portfolio-items">
                <?php
                // Query portfolio posts
                $args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $portfolio_query = new WP_Query( $args );

                if ( $portfolio_query->have_posts() ) {
                    while ( $portfolio_query->have_posts() ) {
                        $portfolio_query->the_post();
                        
                        // Get portfolio category
                        $categories = get_the_terms( get_the_ID(), 'portfolio_category' );
                        $category_class = '';
                        $category_name = '';
                        
                        if ( $categories && ! is_wp_error( $categories ) ) {
                            $category_class = strtolower( str_replace( ' ', '-', $categories[0]->name ) );
                            $category_name = $categories[0]->name;
                        }
                        
                        // Get featured image
                        $image_id = get_post_thumbnail_id();
                        $image_url = wp_get_attachment_image_src( $image_id, 'chhapakhana-portfolio-thumb' );
                        $image_url = $image_url ? $image_url[0] : $theme_uri . '/assets/img/project/placeholder.jpg';
                        
                        ?>
                        <div class="col-md-4 portfolio-item <?php echo esc_attr( $category_class ); ?>">
                            <div class="portfolio-box">
                                <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php echo esc_html( $category_name ); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <?php
                    }
                    wp_reset_postdata();
                } else {
                    ?>
                    <div class="col-md-12">
                        <p style="text-align: center; color: #999;">No portfolio items found. Create some from the WordPress admin!</p>
                    </div>
                    <?php
                }
                ?>
            </div><!-- /.row -->

            <!-- Load More Button -->
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="30" data-smobile="30"></div>
                    <div class="elm-button text-center">
                        <a href="#" class="themesflat-button bg-accent">LOAD MORE</a>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- END PORTFOLIO SECTION -->

    <!-- SERVICES SECTION -->
    <div class="row-services" style="background: #f9f9f9; padding: 60px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                    <div class="themesflat-headings style-1 text-center clearfix">
                        <h2 class="heading">SERVICES</h2>
                        <div class="sep has-icon width-125 clearfix">
                            <div class="sep-icon">
                                <span class="sep-icon-before sep-center sep-solid"></span>
                                <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                <span class="sep-icon-after sep-center sep-solid"></span>
                            </div>
                        </div>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="30" data-smobile="30"></div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-3 text-center">
                    <h4 style="margin-bottom: 10px; font-weight: 600;">Authors</h4>
                    <p style="color: #666;">Quality curation and expert selection for your publishing needs.</p>
                </div>
                <div class="col-md-3 text-center">
                    <h4 style="margin-bottom: 10px; font-weight: 600;">Corporates</h4>
                    <p style="color: #666;">Professional solutions tailored for corporate clients and enterprises.</p>
                </div>
                <div class="col-md-3 text-center">
                    <h4 style="margin-bottom: 10px; font-weight: 600;">Publishing Houses</h4>
                    <p style="color: #666;">Complete publishing services for established and emerging houses.</p>
                </div>
                <div class="col-md-3 text-center">
                    <h4 style="margin-bottom: 10px; font-weight: 600;">Distribution</h4>
                    <p style="color: #666;">Wide-reaching distribution network across multiple regions.</p>
                </div>
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="30" data-smobile="30"></div>
                    <div class="content-box" style="background: white; padding: 40px; border-radius: 8px; margin-bottom: 40px;">
                        <h3 style="margin-bottom: 20px; font-weight: 600; color: #333;">Our Focus</h3>
                        <p style="color: #666; margin-bottom: 15px;">Our focus is to exceed your goals, meet your timelines and successfully manage your budget. We provide our clients with top-notch general contracting, construction management, site surveys and design build services.</p>
                        <ul style="color: #666; line-height: 2;">
                            <li>✓ We have successfully completed projects in numerous states</li>
                            <li>✓ We are licensed to perform general contracting work in most states</li>
                            <li>✓ We will be open to obtaining new licensing if an opportunity arises</li>
                        </ul>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
        </div><!-- /.container -->
    </div>
    <!-- END SERVICES SECTION -->

    <!-- VALUES SECTION -->
    <div class="row-values">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                    <div class="themesflat-headings style-1 text-center clearfix">
                        <h2 class="heading">VALUES</h2>
                        <div class="sep has-icon width-125 clearfix">
                            <div class="sep-icon">
                                <span class="sep-icon-before sep-center sep-solid"></span>
                                <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                <span class="sep-icon-after sep-center sep-solid"></span>
                            </div>
                        </div>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-6">
                    <div class="value-box" style="background: white; padding: 30px; margin-bottom: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                        <h4 style="margin-bottom: 15px; font-weight: 600; color: #333;">Are there any hosting companies you recommend?</h4>
                        <p style="color: #666; line-height: 1.8;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                </div><!-- /.col-md-6 -->

                <div class="col-md-6">
                    <div class="value-box" style="background: white; padding: 30px; margin-bottom: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                        <h4 style="margin-bottom: 15px; font-weight: 600; color: #333;">Core Values</h4>
                        <ul style="color: #666; line-height: 2;">
                            <li>✓ We use technology to do the job more quickly</li>
                            <li>✓ Employees are continually trained on safety issues</li>
                            <li>✓ Quality assurance at every step of the process</li>
                        </ul>
                    </div>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->

            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
        </div><!-- /.container -->
    </div>
    <!-- END VALUES SECTION -->

    <!-- GALLERY SECTION -->
    <div class="row-gallery" style="background: #f9f9f9; padding: 60px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                    <div class="themesflat-headings style-1 text-center clearfix">
                        <h2 class="heading">GALLERY</h2>
                        <div class="sep has-icon width-125 clearfix">
                            <div class="sep-icon">
                                <span class="sep-icon-before sep-center sep-solid"></span>
                                <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                <span class="sep-icon-after sep-center sep-solid"></span>
                            </div>
                        </div>
                        <p class="sub-heading">With us you will have the peace of mind knowing that your dream home project is in the hands of a licensed fully insured building company.</p>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-3">
                    <div class="gallery-item margin-bottom-30">
                        <img src="<?php echo $theme_uri; ?>/assets/img/gallery/gallery1.jpg" alt="Gallery 1" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gallery-item margin-bottom-30">
                        <img src="<?php echo $theme_uri; ?>/assets/img/gallery/gallery2.jpg" alt="Gallery 2" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gallery-item margin-bottom-30">
                        <img src="<?php echo $theme_uri; ?>/assets/img/gallery/gallery3.jpg" alt="Gallery 3" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gallery-item margin-bottom-30">
                        <img src="<?php echo $theme_uri; ?>/assets/img/gallery/gallery4.jpg" alt="Gallery 4" class="img-responsive">
                    </div>
                </div>
            </div><!-- /.row -->

            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
        </div><!-- /.container -->
    </div>
    <!-- END GALLERY SECTION -->

    <?php
    // Display page content if any
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>

</div><!-- /.page-content -->

        </div><!-- /#main-content (reopen for footer.php to close) -->

<?php get_footer(); ?>
