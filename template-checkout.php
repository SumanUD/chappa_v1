<?php
/**
 * Template Name: Checkout
 * Description: PayU payment gateway checkout page
 */

get_header(); ?>

<div class="container">
    <div class="row" style="padding-top: 100px; padding-bottom: 100px;">
        <div class="col-md-8 col-md-offset-2">
            <h1 style="text-align: center; margin-bottom: 50px; font-size: 36px;">Checkout</h1>
            
            <div id="checkout-container" style="text-align: center; padding: 50px;">
                <div class="spinner" style="border: 4px solid #f3f3f3; border-top: 4px solid #e74c3c; border-radius: 50%; width: 40px; height: 40px; animation: spin 1s linear infinite; margin: 0 auto;"></div>
                <p style="margin-top: 20px;">Loading...</p>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<style>
    .checkout-wrapper {
        background: #f9f9f9;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .checkout-section {
        margin-bottom: 30px;
    }

    .checkout-section h3 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 15px;
        color: #333;
        border-bottom: 2px solid #e74c3c;
        padding-bottom: 10px;
    }

    .order-summary {
        background: white;
        padding: 20px;
        border-radius: 4px;
        margin-bottom: 20px;
    }

    .order-summary table {
        width: 100%;
        border-collapse: collapse;
    }

    .order-summary th,
    .order-summary td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .order-summary th {
        background: #f5f5f5;
        font-weight: 600;
    }

    .order-total {
        text-align: right;
        font-size: 18px;
        font-weight: 600;
        padding-top: 15px;
        border-top: 2px solid #e74c3c;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: 600;
        color: #333;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        box-sizing: border-box;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }

    .checkout-btn {
        background: #e74c3c;
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        width: 100%;
        margin-top: 20px;
    }

    .checkout-btn:hover {
        background: #c0392b;
    }

    .checkout-btn:disabled {
        background: #bdc3c7;
        cursor: not-allowed;
    }

    .error-message {
        background: #f8d7da;
        color: #721c24;
        padding: 12px;
        border-radius: 4px;
        margin-bottom: 15px;
        border: 1px solid #f5c6cb;
    }

    .success-message {
        background: #d4edda;
        color: #155724;
        padding: 12px;
        border-radius: 4px;
        margin-bottom: 15px;
        border: 1px solid #c3e6cb;
    }

    .loading {
        display: none;
        text-align: center;
        padding: 20px;
    }

    .spinner {
        border: 4px solid #f3f3f3;
        border-top: 4px solid #e74c3c;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        animation: spin 1s linear infinite;
        margin: 0 auto;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .empty-cart {
        background: #fff3cd;
        color: #856404;
        padding: 20px;
        border-radius: 4px;
        text-align: center;
        border: 1px solid #ffeaa7;
    }

    .empty-cart a {
        color: #e74c3c;
        text-decoration: none;
        font-weight: 600;
    }
</style>

<script>
// Define cart management functions in global scope
window.checkoutState = {
    cart: null,
    total: 0
};

(function() {
    console.log('Checkout script loaded');
    
    function initializeCheckout() {
        console.log('Initializing checkout...');
        const container = document.getElementById('checkout-container');
        if (!container) {
            console.error('Checkout container not found!');
            return;
        }

        // Small delay to ensure DOM is ready and localStorage is accessible
        setTimeout(function() {
            // Get cart from localStorage
            const cart = JSON.parse(localStorage.getItem('chhapakhana_cart')) || [];
            console.log('Cart from localStorage:', cart);
            console.log('Cart length:', cart.length);

            // Store in global state
            window.checkoutState.cart = cart;

            if (cart.length === 0) {
                container.innerHTML = `
                    <div class="empty-cart" style="background: #fff3cd; color: #856404; padding: 20px; border-radius: 4px; text-align: center; border: 1px solid #ffeaa7;">
                        <p>Your cart is empty.</p>
                        <a href="<?php echo esc_url( home_url( '/books' ) ); ?>" style="color: #e74c3c; text-decoration: none; font-weight: 600;">Browse Books</a>
                    </div>
                `;
                return;
            }

            // Calculate total
            let total = 0;
            cart.forEach(item => {
                total += parseFloat(item.price) * (parseInt(item.quantity) || 1);
            });
            
            console.log('Calculated total:', total);
            window.checkoutState.total = total;

            // Create checkout form with ALL required PayU fields
            let html = `
                <div class="checkout-wrapper">
                    <div class="checkout-section">
                        <h3>Order Summary</h3>
                        <div class="order-summary">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Book Name</th>
                                        <th style="text-align: center;">Quantity</th>
                                        <th style="text-align: right;">Price</th>
                                        <th style="text-align: right;">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
            `;

            cart.forEach((item, index) => {
                const itemTotal = parseFloat(item.price) * (parseInt(item.quantity) || 1);
                html += `
                    <tr>
                        <td>${item.name}</td>
                        <td style="text-align: center;">${item.quantity || 1}</td>
                        <td style="text-align: right;">৳${parseFloat(item.price).toFixed(2)}</td>
                        <td style="text-align: right;">৳${itemTotal.toFixed(2)}</td>
                    </tr>
                `;
            });

            html += `
                                </tbody>
                            </table>
                            <div class="order-total">
                                Total: ৳${total.toFixed(2)}
                            </div>
                        </div>
                    </div>

                    <form id="checkout-form" onsubmit="submitCheckout(event)">
                        <div class="checkout-section">
                            <h3>Personal Information</h3>
                            
                            <div class="form-group">
                                <label for="first-name">First Name *</label>
                                <input type="text" id="first-name" name="first_name" required>
                            </div>

                            <div class="form-group">
                                <label for="last-name">Last Name *</label>
                                <input type="text" id="last-name" name="last_name" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" placeholder="01234567890" required>
                            </div>
                        </div>

                        <div class="checkout-section">
                            <h3>Delivery Address</h3>
                            
                            <div class="form-group">
                                <label for="address">Address *</label>
                                <textarea id="address" name="address" rows="3" required></textarea>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="city">শহর *</label>
                                    <input type="text" id="city" name="city" required>
                                </div>
                                <div class="form-group">
                                    <label for="zip">পোস্ট কোড *</label>
                                    <input type="text" id="zip" name="zip" required>
                                </div>
                            </div>
                        </div>

                        <div id="error-message" class="error-message" style="display: none; background: #f8d7da; color: #721c24; padding: 12px; border-radius: 4px; margin-bottom: 15px; border: 1px solid #f5c6cb;"></div>

                        <button type="submit" class="checkout-btn" id="pay-btn" style="background: #e74c3c; color: white; padding: 12px 30px; border: none; border-radius: 4px; font-size: 16px; font-weight: 600; cursor: pointer; width: 100%; margin-top: 20px;">
                            Pay with PayU (৳${total.toFixed(2)})
                        </button>
                    </form>

                    <div class="loading" id="loading" style="display: none; text-align: center; padding: 20px;">
                        <div style="border: 4px solid #f3f3f3; border-top: 4px solid #e74c3c; border-radius: 50%; width: 40px; height: 40px; animation: spin 1s linear infinite; margin: 0 auto;"></div>
                        <p>Processing...</p>
                    </div>
                </div>
            `;

            container.innerHTML = html;
            console.log('Checkout form rendered');
        }, 100);
    }

    // Initialize on page load
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeCheckout);
    } else {
        initializeCheckout();
    }

    // Listen for cart updates
    window.addEventListener('cartUpdated', initializeCheckout);
})();

// Define checkout submission function in global scope
function submitCheckout(event) {
    event.preventDefault();
    
    const form = document.getElementById('checkout-form');
    const errorDiv = document.getElementById('error-message');
    const loading = document.getElementById('loading');
    const payBtn = document.getElementById('pay-btn');
    const cart = window.checkoutState.cart;
    const total = window.checkoutState.total;

    // Get form data
    const formData = {
        first_name: form.first_name.value,
        last_name: form.last_name.value,
        email: form.email.value,
        phone: form.phone.value,
        address: form.address.value,
        city: form.city.value,
        zip: form.zip.value,
        total: total,
        cart: cart,
        timestamp: Math.floor(Date.now() / 1000)
    };

    console.log('Submitting checkout with data:', formData);

    // Show loading
    loading.style.display = 'block';
    payBtn.disabled = true;

    // Send to server to generate PayU hash
    fetch('<?php echo esc_url( home_url( '/wp-json/chhapakhana/v1/generate-payu-hash' ) ); ?>', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(formData)
    })
    .then(response => response.json())
    .then(data => {
        console.log('PayU hash response:', data);
        if (data.success) {
            // Submit hidden form to PayU
            submitToPayU(data);
        } else {
            throw new Error(data.message || 'Error generating payment hash');
        }
    })
    .catch(error => {
        loading.style.display = 'none';
        payBtn.disabled = false;
        errorDiv.textContent = 'Error: ' + error.message;
        errorDiv.style.display = 'block';
        console.error('Error:', error);
    });
}

function submitToPayU(data) {
    console.log('Submitting to PayU with data:', data);
    
    // Create hidden form and submit to PayU
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = 'https://test.payu.in/_payment';
    form.style.display = 'none';

    const fields = {
        key: data.key,
        txnid: data.txnid,
        amount: data.amount,
        productinfo: data.productinfo,
        firstname: data.firstname,
        lastname: data.lastname,
        email: data.email,
        phone: data.phone,
        address1: data.address1,
        city: data.city,
        state: data.state,
        zipcode: data.zipcode,
        country: data.country,
        surl: data.surl,
        furl: data.furl,
        hash: data.hash,
        udf1: data.udf1,
        udf2: data.udf2,
        udf3: data.udf3,
        udf4: data.udf4,
        udf5: data.udf5
    };

    for (const key in fields) {
        if (fields[key] !== null && fields[key] !== undefined) {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = key;
            input.value = fields[key];
            form.appendChild(input);
        }
    }

    document.body.appendChild(form);
    console.log('Submitting form to PayU...');
    form.submit();
}
</script>

<?php get_footer(); ?>
