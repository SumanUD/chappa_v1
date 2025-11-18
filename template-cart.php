<?php
/**
 * Template Name: Shopping Cart
 * Description: Page for displaying shopping cart items
 */

get_header(); ?>

<div class="container">
    <div class="row" style="padding-top: 100px; padding-bottom: 100px;">
        <div class="col-md-12">
            <h1 style="text-align: center; margin-bottom: 50px; font-size: 36px;">Your Shopping Cart</h1>
            
            <div id="cart-container">
                <!-- Cart will be populated here by JavaScript -->
            </div>
        </div>
    </div>
</div>

<style>
    .cart-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 30px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .cart-table thead {
        background: #f5f5f5;
        border-bottom: 2px solid #ddd;
    }
    
    .cart-table th {
        padding: 15px;
        text-align: left;
        font-weight: 600;
        color: #333;
    }
    
    .cart-table td {
        padding: 15px;
        border-bottom: 1px solid #eee;
    }
    
    .cart-item-name {
        font-weight: 500;
        color: #333;
    }
    
    .quantity-controls {
        display: flex;
        align-items: center;
        gap: 5px;
    }
    
    .qty-btn {
        background: #f0f0f0;
        border: 1px solid #ddd;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 3px;
        font-size: 14px;
    }
    
    .qty-btn:hover {
        background: #e0e0e0;
    }
    
    .qty-input {
        width: 50px;
        text-align: center;
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 3px;
    }
    
    .remove-btn {
        background: #e74c3c;
        color: white;
        border: none;
        padding: 8px 15px;
        cursor: pointer;
        border-radius: 3px;
        font-size: 13px;
    }
    
    .remove-btn:hover {
        background: #c0392b;
    }
    
    .cart-empty {
        text-align: center;
        padding: 40px;
        background: #f9f9f9;
        border-radius: 5px;
        border: 1px solid #ddd;
    }
    
    .cart-empty p {
        font-size: 18px;
        color: #666;
        margin-bottom: 20px;
    }
    
    .continue-shopping {
        background: #27ae60;
        color: white;
        padding: 12px 30px;
        text-decoration: none;
        border-radius: 3px;
        display: inline-block;
    }
    
    .continue-shopping:hover {
        background: #229954;
    }
    
    .cart-summary {
        background: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 25px;
        max-width: 400px;
        margin-left: auto;
        margin-bottom: 30px;
    }
    
    .cart-summary-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 12px;
        font-size: 15px;
    }
    
    .cart-summary-row.total {
        border-top: 2px solid #ddd;
        padding-top: 12px;
        margin-top: 12px;
        font-weight: bold;
        font-size: 18px;
    }
    
    .checkout-btn {
        width: 100%;
        background: #27ae60;
        color: white;
        padding: 15px;
        border: none;
        border-radius: 3px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 15px;
    }
    
    .checkout-btn:hover {
        background: #229954;
    }
    
    .checkout-btn:disabled {
        background: #bdc3c7;
        cursor: not-allowed;
    }
    
    .empty-cart-btn {
        background: #95a5a6;
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        display: inline-block;
        margin-top: 10px;
    }
    
    .empty-cart-btn:hover {
        background: #7f8c8d;
    }
</style>

<script>
// Define cart functions in global scope FIRST
function increaseQty(index) {
    const cart = JSON.parse(localStorage.getItem('chhapakhana_cart')) || [];
    if (cart[index]) {
        cart[index].quantity = (parseInt(cart[index].quantity) || 1) + 1;
        localStorage.setItem('chhapakhana_cart', JSON.stringify(cart));
        window.dispatchEvent(new Event('cartUpdated'));
        if (window.renderCart) window.renderCart();
    }
}

function decreaseQty(index) {
    const cart = JSON.parse(localStorage.getItem('chhapakhana_cart')) || [];
    if (cart[index] && (parseInt(cart[index].quantity) || 1) > 1) {
        cart[index].quantity = (parseInt(cart[index].quantity) || 1) - 1;
        localStorage.setItem('chhapakhana_cart', JSON.stringify(cart));
        window.dispatchEvent(new Event('cartUpdated'));
        if (window.renderCart) window.renderCart();
    }
}

function updateQty(index, value) {
    const cart = JSON.parse(localStorage.getItem('chhapakhana_cart')) || [];
    const qty = parseInt(value) || 1;
    if (cart[index] && qty > 0) {
        cart[index].quantity = qty;
        localStorage.setItem('chhapakhana_cart', JSON.stringify(cart));
        window.dispatchEvent(new Event('cartUpdated'));
        if (window.renderCart) window.renderCart();
    }
}

function removeItem(index) {
    const cart = JSON.parse(localStorage.getItem('chhapakhana_cart')) || [];
    cart.splice(index, 1);
    localStorage.setItem('chhapakhana_cart', JSON.stringify(cart));
    
    window.dispatchEvent(new StorageEvent('storage', {
        key: 'chhapakhana_cart'
    }));
    window.dispatchEvent(new Event('cartUpdated'));
    
    if (window.renderCart) window.renderCart();
}

function emptyCart() {
    if (confirm('Are you sure you want to empty your cart?')) {
        localStorage.removeItem('chhapakhana_cart');
        
        window.dispatchEvent(new StorageEvent('storage', {
            key: 'chhapakhana_cart'
        }));
        window.dispatchEvent(new Event('cartUpdated'));
        
        if (window.renderCart) window.renderCart();
    }
}

function checkout() {
    window.location.href = '<?php echo esc_url( get_permalink( 35 ) ); ?>';
}

// Now initialize the cart display
(function() {
    function initializeCart() {
        const container = document.getElementById('cart-container');
        if (!container) {
            console.error('Cart container not found!');
            return;
        }
        
        function renderCart() {
            const cart = JSON.parse(localStorage.getItem('chhapakhana_cart')) || [];
            console.log('Rendering cart with items:', cart);
        
        if (cart.length === 0) {
            container.innerHTML = `
                <div class="cart-empty">
                    <p>Your cart is empty.</p>
                    <a href="<?php echo esc_url( home_url( '/books' ) ); ?>" class="continue-shopping">Browse Books</a>
                </div>
            `;
            return;
        }
        
        let total = 0;
        let tableHTML = `
            <table class="cart-table">
                <thead>
                    <tr>
                        <th style="width: 40%;">বই এর নাম</th>
                        <th style="width: 15%;">মূল্য</th>
                        <th style="width: 20%;">পরিমাণ</th>
                        <th style="width: 15%;">সাবটোটাল</th>
                        <th style="width: 10%;">কার্যক্রম</th>
                    </tr>
                </thead>
                <tbody>
        `;
        
        cart.forEach((item, index) => {
            const subtotal = item.price * item.quantity;
            total += subtotal;
            
            tableHTML += `
                <tr>
                    <td class="cart-item-name">${escapeHtml(item.name)}</td>
                    <td>৳ ${item.price.toFixed(2)}</td>
                    <td>
                        <div class="quantity-controls">
                            <button class="qty-btn" onclick="decreaseQty(${index})">−</button>
                            <input type="number" class="qty-input" value="${item.quantity}" min="1" onchange="updateQty(${index}, this.value)">
                            <button class="qty-btn" onclick="increaseQty(${index})">+</button>
                        </div>
                    </td>
                    <td>৳ ${subtotal.toFixed(2)}</td>
                    <td>
                        <button class="remove-btn" onclick="removeItem(${index})">Remove</button>
                    </td>
                </tr>
            `;
        });
        
        tableHTML += `
                </tbody>
            </table>
        `;
        
        const summaryHTML = `
            <div class="cart-summary">
                <div class="cart-summary-row">
                    <span>Subtotal:</span>
                    <span>৳ ${total.toFixed(2)}</span>
                </div>
                <div class="cart-summary-row">
                    <span>Shipping:</span>
                    <span>৳ 0.00</span>
                </div>
                <div class="cart-summary-row">
                    <span>Tax:</span>
                    <span>৳ 0.00</span>
                </div>
                <div class="cart-summary-row total">
                    <span>Total:</span>
                    <span>৳ ${total.toFixed(2)}</span>
                </div>
                <button class="checkout-btn" onclick="checkout()">Proceed to Checkout</button>
                <button class="empty-cart-btn" onclick="emptyCart()">Clear Cart</button>
            </div>
        `;
        
        container.innerHTML = tableHTML + summaryHTML;
    }
    
    window.renderCart = renderCart;
    
    // Initial render
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', renderCart);
    } else {
        renderCart();
    }
    
    // Listen for storage changes (cross-tab updates)
    window.addEventListener('storage', renderCart);
    
    // Listen for custom storage events from same tab
    window.addEventListener('cartUpdated', renderCart);
}

// Initialize when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeCart);
} else {
    initializeCart();
}

function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

    // Initialize on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeCart);
    } else {
        initializeCart();
    }
})(); // IIFE - Immediately Invoked Function Expression

</script>

<?php get_footer(); ?>
