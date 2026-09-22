// ===== SHOPPING CART FUNCTIONALITY =====

// Store cart items in browser memory
let cart = [];

// Load cart from browser storage when page loads
function loadCartFromStorage() {
    const savedCart = localStorage.getItem('shopping-cart');
    if (savedCart) {
        cart = JSON.parse(savedCart);
        updateCartDisplay();
    }
}

// Save cart to browser storage
function saveCartToStorage() {
    localStorage.setItem('shopping-cart', JSON.stringify(cart));
}

// Add item to cart
function addToCart(productId, productName, productPrice) {
    // Check if item already exists in cart
    const existingItem = cart.find(item => item.id === productId);

    if (existingItem) {
        // If exists, increase quantity
        existingItem.quantity++;
    } else {
        // If doesn't exist, add new item
        cart.push({
            id: productId,
            name: productName,
            price: productPrice,
            quantity: 1
        });
    }

    saveCartToStorage();
    updateCartDisplay();
    alert(productName + ' added to cart!');
}

// Remove item from cart
function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId);
    saveCartToStorage();
    updateCartDisplay();
}

// Update cart display on page
function updateCartDisplay() {
    // Update cart count
    const cartCount = cart.reduce((total, item) => total + item.quantity, 0);
    document.getElementById('cart-count').textContent = cartCount;

    // Update cart items display
    const cartItemsContainer = document.getElementById('cart-items');

    if (cart.length === 0) {
        cartItemsContainer.innerHTML = '<p class="empty-cart">Your cart is empty</p>';
    } else {
        let cartHTML = '';
        cart.forEach(item => {
            const itemTotal = (item.price * item.quantity).toFixed(2);
            cartHTML += `
                <div class="cart-item">
                    <div class="cart-item-info">
                        <div class="cart-item-name">${item.name}</div>
                        <div class="cart-item-price">
                            $${item.price} x ${item.quantity} = $${itemTotal}
                        </div>
                    </div>
                    <button class="cart-item-remove" onclick="removeFromCart('${item.id}')">
                        Remove
                    </button>
                </div>
            `;
        });
        cartItemsContainer.innerHTML = cartHTML;
    }

    // Update total price
    const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0).toFixed(2);
    document.getElementById('cart-total').textContent = total;
}

// Toggle cart sidebar visibility
function toggleCart() {
    const cartSidebar = document.getElementById('cart-sidebar');
    cartSidebar.classList.toggle('active');
}

// Simulate checkout
function checkout() {
    if (cart.length === 0) {
        alert('Your cart is empty!');
        return;
    }

    const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0).toFixed(2);
    alert('Thank you for your purchase!\n\nTotal: $' + total + '\n\nThis is a demo. In a real store, you would process payment here.');

    // Clear cart after checkout
    cart = [];
    saveCartToStorage();
    updateCartDisplay();
    toggleCart();
}

// Load cart when page loads
window.addEventListener('DOMContentLoaded', function() {
    loadCartFromStorage();
});
