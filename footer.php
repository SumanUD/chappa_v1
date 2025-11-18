                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->

        <!-- Footer -->
        <footer id="footer" class="clearfix">
            <div id="footer-widgets" class="container">
                <div class="themesflat-row gutter-30">
                    <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <div class="col span_1_of_3">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                    </div><!-- /.col -->
                    <?php endif; ?>

                    <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <div class="col span_1_of_3">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="0"></div>
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div><!-- /.col -->
                    <?php endif; ?>

                    <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <div class="col span_1_of_3">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    </div><!-- /.col -->
                    <?php endif; ?>

                    <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                    <div class="col span_1_of_3">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                        <?php dynamic_sidebar( 'footer-4' ); ?>
                    </div><!-- /.col -->
                    <?php endif; ?>
                </div><!-- /.themesflat-row -->
            </div><!-- /#footer-widgets -->
        </footer><!-- /#footer -->

        <!-- Bottom -->
        <div id="bottom" class="clearfix has-spacer">
            <div id="bottom-bar-inner" class="container">
                <div class="bottom-bar-inner-wrap">
                    <div class="bottom-bar-content">
                        <div id="copyright">
                            © <span class="text"><?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-accent"><?php bloginfo( 'name' ); ?></a></span>
                        </div>
                    </div><!-- /.bottom-bar-content -->

                    <div class="bottom-bar-menu">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer',
                            'menu_class'     => 'bottom-nav',
                            'container'      => false,
                            'fallback_cb'    => '__return_false',
                        ) );
                        ?>
                    </div><!-- /.bottom-bar-menu -->
                </div><!-- /.bottom-bar-inner-wrap -->
            </div><!-- /#bottom-bar-inner -->
        </div><!-- /#bottom -->

    </div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

<?php wp_footer(); ?>

</body>
</html>
