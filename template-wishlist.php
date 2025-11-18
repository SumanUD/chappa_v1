<?php
/**
 * Template Name: My Wishlist
 * Description: Page for displaying wishlist items
 */

get_header(); ?>

<div class="container">
    <div class="row" style="padding-top: 100px; padding-bottom: 100px;">
        <div class="col-md-12">
            <h1 style="text-align: center; margin-bottom: 50px; font-size: 36px;">আমার উইশলিস্ট</h1>
            
            <div id="wishlist-container">
                <!-- Wishlist will be populated here by JavaScript -->
            </div>
        </div>
    </div>
</div>

<style>
    .wishlist-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }
    
    .wishlist-item {
        background: white;
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .wishlist-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    }
    
    .wishlist-item-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 15px;
        color: white;
        text-align: center;
        border-bottom: 2px solid #ddd;
    }
    
    .wishlist-item-name {
        font-weight: 600;
        font-size: 14px;
        line-height: 1.4;
        margin-bottom: 5px;
    }
    
    .wishlist-item-body {
        padding: 15px;
    }
    
    .wishlist-item-added {
        font-size: 12px;
        color: #999;
        margin-bottom: 10px;
    }
    
    .wishlist-item-buttons {
        display: flex;
        gap: 10px;
        flex-direction: column;
    }
    
    .wishlist-btn {
        padding: 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 13px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .add-to-cart-wishlist {
        background: #27ae60;
        color: white;
    }
    
    .add-to-cart-wishlist:hover {
        background: #229954;
    }
    
    .remove-wishlist {
        background: #e74c3c;
        color: white;
    }
    
    .remove-wishlist:hover {
        background: #c0392b;
    }
    
    .wishlist-empty {
        text-align: center;
        padding: 60px 20px;
        background: #f9f9f9;
        border-radius: 5px;
        border: 1px solid #ddd;
    }
    
    .wishlist-empty p {
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
    
    .wishlist-actions {
        text-align: center;
        margin-top: 30px;
    }
    
    .clear-wishlist-btn {
        background: #95a5a6;
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        display: inline-block;
    }
    
    .clear-wishlist-btn:hover {
        background: #7f8c8d;
    }
</style>

<script>
// Initialize wishlist display immediately
(function() {
    function initializeWishlist() {
        const container = document.getElementById('wishlist-container');
        if (!container) {
            console.error('Wishlist container not found!');
            return;
        }
        
        function renderWishlist() {
            const wishlist = JSON.parse(localStorage.getItem('chhapakhana_wishlist')) || [];
            console.log('Rendering wishlist with items:', wishlist); // Debug log
        
        if (wishlist.length === 0) {
            container.innerHTML = `
                <div class="wishlist-empty">
                    <p>আপনার উইশলিস্ট খালি।</p>
                    <a href="<?php echo esc_url( home_url( '/books' ) ); ?>" class="continue-shopping">বই আবিষ্কার করুন</a>
                </div>
            `;
            return;
        }
        
        let html = '<div class="wishlist-grid">';
        
        wishlist.forEach((item, index) => {
            const dateAdded = new Date(item.dateAdded);
            const formattedDate = dateAdded.toLocaleDateString('bn-BD');
            
            html += `
                <div class="wishlist-item">
                    <div class="wishlist-item-header">
                        <div class="wishlist-item-name">${escapeHtml(item.name)}</div>
                    </div>
                    <div class="wishlist-item-body">
                        <div class="wishlist-item-added">যোগ করা: ${formattedDate}</div>
                        <div class="wishlist-item-buttons">
                            <button class="wishlist-btn add-to-cart-wishlist" onclick="addToCartFromWishlist(${index})">
                                কার্টে যোগ করুন
                            </button>
                            <button class="wishlist-btn remove-wishlist" onclick="removeFromWishlist(${index})">
                                সরান
                            </button>
                        </div>
                    </div>
                </div>
            `;
        });
        
        html += '</div>';
        
        html += `
            <div class="wishlist-actions">
                <button class="clear-wishlist-btn" onclick="clearWishlist()">সম্পূর্ণ উইশলিস্ট সাফ করুন</button>
            </div>
        `;
        
        container.innerHTML = html;
    }
    
    window.renderWishlist = renderWishlist;
    
    // Initial render
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', renderWishlist);
    } else {
        renderWishlist();
    }
    
    // Listen for storage changes (cross-tab updates)
    window.addEventListener('storage', renderWishlist);
    
    // Listen for custom wishlist update events
    window.addEventListener('wishlistUpdated', renderWishlist);
}

// Initialize when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeWishlist);
} else {
    initializeWishlist();
}

function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

function addToCartFromWishlist(index) {
    const wishlist = JSON.parse(localStorage.getItem('chhapakhana_wishlist')) || [];
    const item = wishlist[index];
    
    if (!item) return;
    
    // Add to cart
    const cart = JSON.parse(localStorage.getItem('chhapakhana_cart')) || [];
    const existingItem = cart.find(cartItem => cartItem.id === item.id);
    
    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({
            id: item.id,
            name: item.name,
            price: item.price || 0,
            quantity: 1
        });
    }
    
    localStorage.setItem('chhapakhana_cart', JSON.stringify(cart));
    
    // Dispatch storage event for header update
    window.dispatchEvent(new StorageEvent('storage', {
        key: 'chhapakhana_cart'
    }));
    window.dispatchEvent(new Event('cartUpdated'));
    
    // Show feedback
    const btn = event.target;
    btn.textContent = '✓ কার্টে যোগ হয়েছে!';
    btn.style.background = '#27ae60';
    setTimeout(() => {
        btn.textContent = 'কার্টে যোগ করুন';
    }, 2000);
}

function removeFromWishlist(index) {
    const wishlist = JSON.parse(localStorage.getItem('chhapakhana_wishlist')) || [];
    wishlist.splice(index, 1);
    localStorage.setItem('chhapakhana_wishlist', JSON.stringify(wishlist));
    
    // Dispatch storage event for header update
    window.dispatchEvent(new StorageEvent('storage', {
        key: 'chhapakhana_wishlist'
    }));
    window.dispatchEvent(new Event('wishlistUpdated'));
    
    window.renderWishlist();
}

function clearWishlist() {
    if (confirm('আপনি কি সত্যিই আপনার সম্পূর্ণ উইশলিস্ট সাফ করতে চান?')) {
        localStorage.removeItem('chhapakhana_wishlist');
        
        // Dispatch storage event for header update
        window.dispatchEvent(new StorageEvent('storage', {
            key: 'chhapakhana_wishlist'
        }));
        window.dispatchEvent(new Event('wishlistUpdated'));
        
        window.renderWishlist();
    }
}

    // Initialize on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeWishlist);
    } else {
        initializeWishlist();
    }
})(); // IIFE - Immediately Invoked Function Expression

</script>

<?php get_footer(); ?>
