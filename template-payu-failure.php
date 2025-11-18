<?php
/**
 * Template Name: PayU Failure
 * Description: Payment failure page
 */

get_header(); ?>

<div class="container">
    <div class="row" style="padding-top: 100px; padding-bottom: 100px;">
        <div class="col-md-8 col-md-offset-2">
            <div style="background: #f8d7da; border: 2px solid #dc3545; border-radius: 8px; padding: 40px; text-align: center;">
                <div style="font-size: 60px; color: #dc3545; margin-bottom: 20px;">✗</div>
                <h1 style="color: #721c24; margin-bottom: 20px;">Payment Failed</h1>
                <p style="font-size: 16px; color: #721c24; margin-bottom: 30px;">Unfortunately, your payment could not be processed. Please try again.</p>
                
                <div style="background: white; padding: 20px; border-radius: 4px; margin-bottom: 30px;">
                    <p style="color: #666; margin-bottom: 10px;">Your books are saved in your cart. You can complete the checkout at any time.</p>
                    
                    <?php
                    if ( isset( $_GET['txnid'] ) ) {
                        $txnid = sanitize_text_field( $_GET['txnid'] );
                        $transaction = get_option( 'payu_txn_' . $txnid );
                        
                        if ( $transaction ) {
                            echo '<p style="color: #666;"><strong>Transaction ID:</strong> ' . esc_html( $txnid ) . '</p>';
                        }
                    }
                    ?>
                </div>

                <div style="margin-bottom: 20px;">
                    <a href="<?php echo esc_url( home_url( '/checkout-2' ) ); ?>" class="themesflat-button bg-accent" style="display: inline-block; padding: 12px 30px; text-decoration: none; border-radius: 4px; margin-right: 10px;">Try Again</a>
                    <a href="<?php echo esc_url( home_url( '/books' ) ); ?>" class="themesflat-button" style="display: inline-block; padding: 12px 30px; text-decoration: none; border-radius: 4px; background: #666; color: white;">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
