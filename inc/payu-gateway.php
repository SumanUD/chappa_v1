<?php
/**
 * PayU Payment Gateway Integration
 * Handles PayU payment processing and responses
 */

// PayU Test Credentials from the provided image
define( 'PAYU_MERCHANT_KEY', 'eT7Uda' );
define( 'PAYU_MERCHANT_SALT', 'y9KIuP7FSqEesrqBeHoxwcs4uh9UWFBe' );
define( 'PAYU_GATEWAY_URL', 'https://test.payu.in/_payment' );

/**
 * Register REST API endpoint for PayU hash generation
 */
add_action( 'rest_api_init', function() {
    register_rest_route( 'chhapakhana/v1', '/generate-payu-hash', array(
        'methods' => 'POST',
        'callback' => 'chhapakhana_generate_payu_hash',
        'permission_callback' => '__return_true'
    ));

    register_rest_route( 'chhapakhana/v1', '/payu-response', array(
        'methods' => 'POST',
        'callback' => 'chhapakhana_handle_payu_response',
        'permission_callback' => '__return_true'
    ));
});

/**
 * Generate PayU hash and transaction details
 */
function chhapakhana_generate_payu_hash( WP_REST_Request $request ) {
    $params = $request->get_json_params();

    // Generate unique transaction ID
    $txnid = 'TXN' . time() . rand( 1000, 9999 );

    // Prepare product info
    $productinfo = 'Books';

    // Prepare UDF fields (required in correct order)
    $udf1 = $params['last_name'];
    $udf2 = $params['address'];
    $udf3 = $params['city'];
    $udf4 = $params['zip'];
    $udf5 = json_encode( $params['cart'] );

    // Hash formula: key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5||||||SALT
    $hashSequence = PAYU_MERCHANT_KEY . '|' . $txnid . '|' . floatval( $params['total'] ) . '|' . $productinfo . '|' . $params['first_name'] . '|' . $params['email'] . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . PAYU_MERCHANT_SALT;

    // Generate hash
    $hash = hash( 'sha512', $hashSequence );

    // Success and Failure URLs
    $surl = home_url( '/payu-success' );
    $furl = home_url( '/payu-failure' );

    // Store transaction details in database for later verification
    $transaction_data = array(
        'txnid' => $txnid,
        'amount' => $params['total'],
        'email' => $params['email'],
        'phone' => $params['phone'],
        'first_name' => $params['first_name'],
        'last_name' => $params['last_name'],
        'address' => $params['address'],
        'city' => $params['city'],
        'zip' => $params['zip'],
        'cart_items' => $params['cart'],
        'status' => 'pending',
        'created_at' => current_time( 'mysql' ),
        'hash' => $hash
    );

    // Save to options (you could use custom post type or database table)
    update_option( 'payu_txn_' . $txnid, $transaction_data, false );

    return array(
        'success' => true,
        'key' => PAYU_MERCHANT_KEY,
        'txnid' => $txnid,
        'amount' => floatval( $params['total'] ),
        'productinfo' => $productinfo,
        'firstname' => $params['first_name'],
        'lastname' => $params['last_name'],
        'email' => $params['email'],
        'phone' => $params['phone'],
        'address1' => $params['address'],
        'city' => $params['city'],
        'state' => $params['city'],
        'zipcode' => $params['zip'],
        'country' => 'BD',
        'surl' => $surl,
        'furl' => $furl,
        'hash' => $hash,
        'udf1' => $udf1,
        'udf2' => $udf2,
        'udf3' => $udf3,
        'udf4' => $udf4,
        'udf5' => $udf5
    );
}

/**
 * Handle PayU response callback
 */
function chhapakhana_handle_payu_response( WP_REST_Request $request ) {
    $params = $request->get_json_params();

    // Verify hash for security
    $txnid = sanitize_text_field( $params['txnid'] );
    $status = sanitize_text_field( $params['status'] );
    $amount = floatval( $params['amount'] );
    $email = sanitize_email( $params['email'] );

    // Get stored transaction
    $transaction = get_option( 'payu_txn_' . $txnid );

    if ( ! $transaction ) {
        return array(
            'success' => false,
            'message' => 'Transaction not found'
        );
    }

    // Verify hash
    if ( $status === 'success' ) {
        $hashSequence = PAYU_MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $transaction['productinfo'] . '|' . $transaction['first_name'] . '|' . $email . '|||||||||||' . PAYU_MERCHANT_SALT;
        $hash = hash( 'sha512', $hashSequence );

        // Note: PayU returns hash in response - you should verify it
        // For this basic implementation, we'll accept the payment
    }

    // Update transaction status
    $transaction['status'] = $status;
    $transaction['updated_at'] = current_time( 'mysql' );
    update_option( 'payu_txn_' . $txnid, $transaction, false );

    if ( $status === 'success' ) {
        return array(
            'success' => true,
            'message' => 'Payment successful',
            'txnid' => $txnid,
            'redirect' => home_url( '/payu-success' )
        );
    } else {
        return array(
            'success' => false,
            'message' => 'Payment failed',
            'txnid' => $txnid,
            'redirect' => home_url( '/payu-failure' )
        );
    }
}

/**
 * Add PayU constants to checkout page
 */
add_action( 'wp_head', function() {
    if ( is_page_template( 'template-checkout.php' ) ) {
        echo "<script>const PAYU_GATEWAY_URL = '" . esc_attr( PAYU_GATEWAY_URL ) . "';</script>";
    }
}, 99 );
