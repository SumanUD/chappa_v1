<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
    <script>
        // Update cart and wishlist badge counts on page load
        (function() {
            function updateBadges() {
                try {
                    const cart = JSON.parse(localStorage.getItem('chhapakhana_cart') || '[]');
                    const wishlist = JSON.parse(localStorage.getItem('chhapakhana_wishlist') || '[]');
                    
                    const cartBadge = document.querySelector('.cart-badge');
                    const wishlistBadge = document.querySelector('.wishlist-badge');
                    
                    if (cartBadge) {
                        cartBadge.textContent = cart.length;
                    }
                    if (wishlistBadge) {
                        wishlistBadge.textContent = wishlist.length;
                    }
                } catch (e) {
                    console.log('Error updating badges:', e);
                }
            }
            
            // Update on page load
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', updateBadges);
            } else {
                updateBadges();
            }
            
            // Listen for storage changes (to update across tabs)
            window.addEventListener('storage', updateBadges);
            
            // Listen for cartUpdated and wishlistUpdated events
            window.addEventListener('cartUpdated', updateBadges);
            window.addEventListener('wishlistUpdated', updateBadges);
            
            // Expose function globally for cart updates
            window.updateHeaderBadges = updateBadges;
        })();
    </script>
    <style>
        /* Minimal header styling - no icon positioning needed */
    </style>
</head>

<body <?php body_class( 'header-fixed page no-sidebar header-style-3 topbar-style-3 site-header-absolute menu-has-search' ); ?>>
<?php wp_body_open(); ?>

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        <!-- Header Wrap -->
        <div id="site-header-wrap">
            <!-- Top Bar -->
            <div id="top-bar">
                <div id="top-bar-inner" class="container">
                    <div class="top-bar-inner-wrap">
                        <div class="top-bar-content">
                            <div class="inner">
                                <span class="address content">4946 Marmora Road, Central New</span>
                                <span class="phone content">+61 3 8376 6284</span>
                                <span class="time content">Mon-Sat: 8am - 6pm</span>
                            </div>
                        </div><!-- /.top-bar-content -->

                        <div class="top-bar-socials">
                            <div class="inner">
                                <span class="text">Follow us:</span>
                                <span class="icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                </span>
                            </div>
                        </div><!-- /.top-bar-socials -->
                    </div>
                </div>
            </div><!-- /#top-bar -->

            <!-- Header -->
            <header id="site-header">
                <div id="site-header-inner" class="container">
                    <div class="wrap-inner clearfix">
                        <div id="site-logo" class="clearfix">
                            <div id="site-log-inner">
                                <?php
                                if ( has_custom_logo() ) {
                                    the_custom_logo();
                                } else { ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="main-logo">
                                        <?php $rel_theme_uri = esc_url( wp_make_link_relative( get_template_directory_uri() ) ); ?>
                                        <img src="<?php echo $rel_theme_uri; ?>/assets/img/logo-white-small.png"
                                             alt="<?php bloginfo( 'name' ); ?>"
                                             width="169"
                                             height="39"
                                             data-retina="<?php echo $rel_theme_uri; ?>/assets/img/chapa-logo.png"
                                             data-width="169"
                                             data-height="39">
                                    </a>
                                <?php } ?>
                            </div>
                        </div><!-- /#site-logo -->

                        <div class="mobile-button">
                            <span></span>
                        </div><!-- /.mobile-button -->

                        <nav id="main-nav" class="main-nav">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_id'        => 'menu-primary-menu',
                                'menu_class'     => 'menu',
                                'container'      => false,
                                'fallback_cb'    => '__return_false',
                            ) );
                            ?>
                        </nav><!-- /#main-nav -->

                        <div id="header-search">
                            <a href="#" class="header-profile-icon" id="profile-icon-toggle" title="Profile" style="font-size: 24px; color: white; text-decoration: none;">
                                <span class="profile-icon fa fa-user"></span>
                            </a>

                            <!-- Profile Dropdown Menu -->
                            <div id="profile-dropdown" style="position: absolute; top: 100%; right: 0; background: white; border: 1px solid #ddd; border-radius: 3px; box-shadow: 0 5px 15px rgba(0,0,0,0.2); display: none; min-width: 200px; z-index: 999;">
                                <div style="padding: 15px; border-bottom: 1px solid #eee; text-align: center;">
                                    <?php
                                    if ( is_user_logged_in() ) {
                                        $current_user = wp_get_current_user();
                                        echo '<p style="margin: 0; font-weight: 600; color: #333;">' . esc_html( $current_user->display_name ) . '</p>';
                                        echo '<p style="margin: 5px 0 0 0; font-size: 12px; color: #999;">' . esc_html( $current_user->user_email ) . '</p>';
                                    } else {
                                        echo '<p style="margin: 0; color: #999;">Guest</p>';
                                    }
                                    ?>
                                </div>
                                <div style="padding: 0;">
                                    <?php
                                    if ( is_user_logged_in() ) {
                                        ?>
                                        <a href="<?php echo esc_url( home_url( '/my-account' ) ); ?>" style="display: block; padding: 12px 15px; color: #333; text-decoration: none; border-bottom: 1px solid #eee; transition: all 0.3s;">My Account</a>
                                        <a href="<?php echo esc_url( home_url( '/cart-2' ) ); ?>" style="display: block; padding: 12px 15px; color: #333; text-decoration: none; border-bottom: 1px solid #eee; transition: all 0.3s;">My Cart</a>
                                        <a href="<?php echo esc_url( home_url( '/wishlist-2' ) ); ?>" style="display: block; padding: 12px 15px; color: #333; text-decoration: none; border-bottom: 1px solid #eee; transition: all 0.3s;">My Wishlist</a>
                                        <a href="<?php echo esc_url( wp_logout_url( home_url() ) ); ?>" style="display: block; padding: 12px 15px; color: #e74c3c; text-decoration: none; transition: all 0.3s;">Logout</a>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo esc_url( home_url( '/login' ) ); ?>" style="display: block; padding: 12px 15px; color: #333; text-decoration: none; border-bottom: 1px solid #eee; transition: all 0.3s;">Login</a>
                                        <a href="<?php echo esc_url( wp_registration_url() ); ?>" style="display: block; padding: 12px 15px; color: #27ae60; text-decoration: none; transition: all 0.3s; font-weight: 600;">Register</a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div><!-- /#header-search -->

                        <script>
                            (function() {
                                const profileIcon = document.getElementById('profile-icon-toggle');
                                const profileDropdown = document.getElementById('profile-dropdown');

                                if (profileIcon && profileDropdown) {
                                    profileIcon.addEventListener('click', function(e) {
                                        e.preventDefault();
                                        e.stopPropagation();
                                        profileDropdown.style.display = profileDropdown.style.display === 'none' ? 'block' : 'none';
                                    });

                                    // Close dropdown when clicking outside
                                    document.addEventListener('click', function(e) {
                                        if (!profileIcon.contains(e.target) && !profileDropdown.contains(e.target)) {
                                            profileDropdown.style.display = 'none';
                                        }
                                    });
                                }
                            })();
                        </script>

                        <!-- Cart and Wishlist Icons -->
                        <div id="header-icons" style="display: inline-flex; gap: 20px; margin-left: 20px; align-items: center;">
                            <a href="<?php echo esc_url( home_url( '/cart-2' ) ); ?>" class="header-cart-icon" title="Shopping Cart" style="font-size: 18px; color: white; text-decoration: none; position: relative;">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="cart-badge" style="position: absolute; top: -8px; right: -10px; background: #e74c3c; color: white; border-radius: 50%; width: 20px; height: 20px; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: bold;">0</span>
                            </a>
                            <a href="<?php echo esc_url( home_url( '/wishlist-2' ) ); ?>" class="header-wishlist-icon" title="Wishlist" style="font-size: 18px; color: white; text-decoration: none; position: relative;">
                                <i class="fa fa-heart"></i>
                                <span class="wishlist-badge" style="position: absolute; top: -8px; right: -10px; background: #e74c3c; color: white; border-radius: 50%; width: 20px; height: 20px; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: bold;">0</span>
                            </a>
                        </div><!-- /#header-icons -->
                    </div><!-- /.wrap-inner -->

                </div><!-- /#site-header-inner -->
            </header><!-- /#site-header -->
        </div><!-- #site-header-wrap -->

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
