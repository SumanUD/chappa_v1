<?php
/**
 * Template Name: PayU Success
 * Description: Payment success page
 */

get_header(); ?>

<div class="container">
    <div class="row" style="padding-top: 100px; padding-bottom: 100px;">
        <div class="col-md-8 col-md-offset-2">
            <div style="background: #d4edda; border: 2px solid #28a745; border-radius: 8px; padding: 40px; text-align: center;">
                <div style="font-size: 60px; color: #28a745; margin-bottom: 20px;">✓</div>
                <h1 style="color: #155724; margin-bottom: 20px;">Payment Successful!</h1>
                <p style="font-size: 16px; color: #155724; margin-bottom: 30px;">Your order has been completed successfully. You will receive your items soon.</p>
                
                <div style="background: white; padding: 20px; border-radius: 4px; margin-bottom: 30px; text-align: left;">
                    <h3 style="margin-bottom: 15px; color: #333;">Order Details</h3>
                    <?php
                    if ( isset( $_GET['txnid'] ) ) {
                        $txnid = sanitize_text_field( $_GET['txnid'] );
                        $transaction = get_option( 'payu_txn_' . $txnid );
                        
                        if ( $transaction ) {
                            echo '<p><strong>Transaction ID:</strong> ' . esc_html( $txnid ) . '</p>';
                            echo '<p><strong>Total Amount:</strong> ৳' . esc_html( $transaction['amount'] ) . '</p>';
                            echo '<p><strong>Email:</strong> ' . esc_html( $transaction['email'] ) . '</p>';
                            
                            if ( ! empty( $transaction['cart_items'] ) ) {
                                echo '<p><strong>Books:</strong><br>';
                                foreach ( $transaction['cart_items'] as $item ) {
                                    echo '- ' . esc_html( $item['name'] ) . ' (' . esc_html( $item['quantity'] ?? 1 ) . 'x) <br>';
                                }
                                echo '</p>';
                            }
                        }
                    }
                    ?>
                </div>

                <a href="<?php echo esc_url( home_url( '/books' ) ); ?>" class="themesflat-button bg-accent" style="display: inline-block; padding: 12px 30px; text-decoration: none; border-radius: 4px;">Browse More Books</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
