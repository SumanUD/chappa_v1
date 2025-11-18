<?php
/**
 * Template Name: My Account
 * Description: User account and profile page
 */

get_header(); ?>

<div class="container">
    <div class="row" style="padding-top: 100px; padding-bottom: 100px;">
        <div class="col-md-12">
            <?php
            if ( ! is_user_logged_in() ) {
                echo '<div style="text-align: center; padding: 60px 20px; background: #f9f9f9; border-radius: 5px;">';
                echo '<h2>You need to login first</h2>';
                echo '<p><a href="' . esc_url( home_url( '/login' ) ) . '" style="color: #27ae60; text-decoration: none; font-size: 16px;">Go to Login Page</a></p>';
                echo '</div>';
            } else {
                $current_user = wp_get_current_user();
                $user_id = $current_user->ID;
                ?>

                <div class="account-header" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 30px; border-radius: 5px; margin-bottom: 30px;">
                    <h1 style="margin: 0; font-size: 32px;">Welcome, <?php echo esc_html( $current_user->display_name ); ?>!</h1>
                    <p style="margin: 10px 0 0 0; opacity: 0.9;">Manage your account, orders, and preferences</p>
                </div>

                <div class="row">
                    <!-- Account Menu -->
                    <div class="col-md-3">
                        <div style="background: white; border: 1px solid #ddd; border-radius: 5px; overflow: hidden;">
                            <div style="background: #f5f5f5; padding: 15px; border-bottom: 1px solid #ddd;">
                                <h3 style="margin: 0; font-size: 16px;">My Account</h3>
                            </div>
                            <ul style="list-style: none; margin: 0; padding: 0;">
                                <li><a href="#profile" style="display: block; padding: 12px 15px; color: #333; text-decoration: none; border-bottom: 1px solid #eee; transition: all 0.3s;">📋 Profile</a></li>
                                <li><a href="#addresses" style="display: block; padding: 12px 15px; color: #333; text-decoration: none; border-bottom: 1px solid #eee; transition: all 0.3s;">📍 Addresses</a></li>
                                <li><a href="#orders" style="display: block; padding: 12px 15px; color: #333; text-decoration: none; border-bottom: 1px solid #eee; transition: all 0.3s;">📦 Orders</a></li>
                                <li><a href="#saved-items" style="display: block; padding: 12px 15px; color: #333; text-decoration: none; transition: all 0.3s;">❤️ Saved Items</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Account Content -->
                    <div class="col-md-9">
                        <!-- Profile Section -->
                        <div id="profile" style="background: white; border: 1px solid #ddd; border-radius: 5px; padding: 25px; margin-bottom: 25px;">
                            <h2 style="border-bottom: 2px solid #667eea; padding-bottom: 15px; margin-bottom: 20px;">Profile Information</h2>

                            <div class="row">
                                <div class="col-md-6">
                                    <div style="margin-bottom: 15px;">
                                        <label style="display: block; font-weight: 600; margin-bottom: 5px; color: #333;">Email</label>
                                        <p style="margin: 0; padding: 10px; background: #f9f9f9; border-radius: 3px; color: #666;"><?php echo esc_html( $current_user->user_email ); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="margin-bottom: 15px;">
                                        <label style="display: block; font-weight: 600; margin-bottom: 5px; color: #333;">Display Name</label>
                                        <p style="margin: 0; padding: 10px; background: #f9f9f9; border-radius: 3px; color: #666;"><?php echo esc_html( $current_user->display_name ); ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div style="margin-bottom: 15px;">
                                        <label style="display: block; font-weight: 600; margin-bottom: 5px; color: #333;">First Name</label>
                                        <p style="margin: 0; padding: 10px; background: #f9f9f9; border-radius: 3px; color: #666;"><?php echo esc_html( $current_user->first_name ); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="margin-bottom: 15px;">
                                        <label style="display: block; font-weight: 600; margin-bottom: 5px; color: #333;">Last Name</label>
                                        <p style="margin: 0; padding: 10px; background: #f9f9f9; border-radius: 3px; color: #666;"><?php echo esc_html( $current_user->last_name ); ?></p>
                                    </div>
                                </div>
                            </div>

                            <a href="<?php echo esc_url( admin_url( 'profile.php' ) ); ?>" style="display: inline-block; background: #667eea; color: white; padding: 10px 20px; border-radius: 3px; text-decoration: none; margin-top: 15px;">Edit Profile</a>
                        </div>

                        <!-- Addresses Section -->
                        <div id="addresses" style="background: white; border: 1px solid #ddd; border-radius: 5px; padding: 25px; margin-bottom: 25px;">
                            <h2 style="border-bottom: 2px solid #667eea; padding-bottom: 15px; margin-bottom: 20px;">Addresses</h2>

                            <div style="padding: 20px; background: #f9f9f9; border-radius: 3px; text-align: center; color: #666;">
                                <p>Billing and shipping addresses will be displayed here during checkout.</p>
                            </div>
                        </div>

                        <!-- Orders Section -->
                        <div id="orders" style="background: white; border: 1px solid #ddd; border-radius: 5px; padding: 25px; margin-bottom: 25px;">
                            <h2 style="border-bottom: 2px solid #667eea; padding-bottom: 15px; margin-bottom: 20px;">Order History</h2>

                            <?php
                            $args = array(
                                'limit' => 10,
                                'paginate' => false,
                                'status' => array_keys( wc_get_order_statuses() ),
                                'type' => 'shop_order',
                            );

                            $customer_orders = wc_get_orders( array(
                                'limit' => 10,
                                'customer' => $user_id,
                                'return' => 'objects',
                            ) );

                            if ( $customer_orders ) {
                                echo '<table style="width: 100%; border-collapse: collapse;">';
                                echo '<thead>';
                                echo '<tr style="background: #f5f5f5; border-bottom: 2px solid #ddd;">';
                                echo '<th style="padding: 12px; text-align: left; font-weight: 600;">Order ID</th>';
                                echo '<th style="padding: 12px; text-align: left; font-weight: 600;">Date</th>';
                                echo '<th style="padding: 12px; text-align: left; font-weight: 600;">Status</th>';
                                echo '<th style="padding: 12px; text-align: right; font-weight: 600;">Total</th>';
                                echo '</tr>';
                                echo '</thead>';
                                echo '<tbody>';

                                foreach ( $customer_orders as $order ) {
                                    echo '<tr style="border-bottom: 1px solid #eee;">';
                                    echo '<td style="padding: 12px;"><a href="' . esc_url( $order->get_permalink() ) . '" style="color: #667eea;">#' . esc_html( $order->get_order_number() ) . '</a></td>';
                                    echo '<td style="padding: 12px;">' . esc_html( $order->get_date_created()->format( 'M d, Y' ) ) . '</td>';
                                    echo '<td style="padding: 12px;"><span style="background: #e8f5e9; color: #27ae60; padding: 5px 10px; border-radius: 3px; font-size: 12px; font-weight: 600;">' . esc_html( wc_get_order_status_name( $order->get_status() ) ) . '</span></td>';
                                    echo '<td style="padding: 12px; text-align: right; font-weight: 600;">' . esc_html( $order->get_formatted_order_total() ) . '</td>';
                                    echo '</tr>';
                                }

                                echo '</tbody>';
                                echo '</table>';
                            } else {
                                echo '<p style="color: #999; text-align: center; padding: 20px;">No orders yet.</p>';
                            }
                            ?>
                        </div>

                        <!-- Saved Items Section -->
                        <div id="saved-items" style="background: white; border: 1px solid #ddd; border-radius: 5px; padding: 25px;">
                            <h2 style="border-bottom: 2px solid #667eea; padding-bottom: 15px; margin-bottom: 20px;">Saved Items</h2>

                            <?php
                            $wishlist = get_user_meta( $user_id, 'chhapakhana_wishlist', true );
                            if ( empty( $wishlist ) ) {
                                $wishlist = array();
                            }

                            if ( ! empty( $wishlist ) ) {
                                echo '<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: 15px;">';
                                foreach ( $wishlist as $item ) {
                                    echo '<div style="background: #f9f9f9; padding: 15px; border-radius: 3px; text-align: center; border: 1px solid #eee;">';
                                    echo '<p style="margin: 0 0 10px 0; font-weight: 600; color: #333; font-size: 14px;">' . esc_html( $item['name'] ) . '</p>';
                                    echo '<p style="margin: 0; color: #666; font-size: 12px;">Added: ' . date( 'M d, Y', strtotime( $item['dateAdded'] ) ) . '</p>';
                                    echo '</div>';
                                }
                                echo '</div>';
                            } else {
                                echo '<p style="color: #999; text-align: center; padding: 20px;">No saved items yet.</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <?php
            }
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
