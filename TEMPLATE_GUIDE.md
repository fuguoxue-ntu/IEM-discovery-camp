# 🛍️ Simple Shopping Website Template

A beginner-friendly shopping website template using **HTML, CSS, JavaScript, and PHP**. This template is designed for beginners with no coding experience to customize.

## 📁 Project Structure

```
IEM-discovery-camp/
├── index.html              # Main website page
├── css/
│   └── style.css          # Website styling
├── js/
│   └── cart.js            # Shopping cart functionality
├── php/
│   ├── config.php         # Product list and configuration
│   ├── get_products.php   # API to get products
│   └── cart_handler.php   # Backend for cart operations
└── images/                # Folder for your product images
```

## 🚀 Quick Start

### Step 1: Get PHP Running
You need a local PHP server to run this template.

**Option A: Using PHP Built-in Server (Easiest)**
```bash
# Open terminal in the project folder and run:
php -S localhost:8000
```

**Option B: Using XAMPP, WAMP, or LAMP**
- Install XAMPP/WAMP/LAMP
- Copy this folder to your htdocs folder (or www folder)
- Start Apache server
- Visit: `http://localhost/IEM-discovery-camp/`

### Step 2: Open in Browser
Visit: `http://localhost:8000` (if using PHP built-in server)

## 🎨 How to Customize

### 1. Change Product Information
Edit **php/config.php** to add your own products:

```php
$products = array(
    array(
        'id' => 'prod-001',           // Unique ID for product
        'name' => 'My Product',       // Product name
        'description' => 'A great item', // Short description
        'price' => 29.99,             // Price
        'image' => 'image-url.jpg'    // Image URL or local path
    ),
    // Add more products here...
);
```

### 2. Change Colors and Styling
Edit **css/style.css** - look for these color codes to change:
- `#2c3e50` - Dark header/footer color
- `#e74c3c` - Red accent color (cart button, prices)
- `#27ae60` - Green color (add to cart button)

**Example: Change header color**
```css
header {
    background-color: #9b59b6;  /* Change this to any color */
}
```

### 3. Change Store Name
Edit **index.html** - find these lines and replace:
```html
<title>Simple Shop - Your Store</title>  <!-- Browser tab title -->
<h1>🛍️ Simple Shop</h1>                   <!-- Main header -->
```

### 4. Add Your Own Product Images
1. Save images to the `images/` folder
2. In **php/config.php**, change the image URL:

**Before:**
```php
'image' => 'https://via.placeholder.com/250x200?text=Headphones'
```

**After:**
```php
'image' => 'images/my-headphones.jpg'  // Local image
```

### 5. Customize the Layout Text
All text can be found in **index.html**. Search for text you want to change.

## 💡 Features Explained

### Shopping Cart
- **Add items**: Click "Add to Cart" button
- **View cart**: Click cart button in header
- **Remove items**: Click "Remove" in the cart sidebar
- **Checkout**: Click "Checkout" button (demo only)
- **Data saved**: Cart stays even after closing browser

### Frontend (What Users See)
- **index.html**: Main store page with product grid
- **css/style.css**: Colors, sizes, layouts
- **js/cart.js**: Add/remove items, show totals

### Backend (Server Logic)
- **php/config.php**: Product database
- **php/get_products.php**: Sends products to website
- **php/cart_handler.php**: Processes orders (ready for future expansion)

## 📚 Beginner Tips

### What is Each File Type For?
- **HTML** - Structure (headings, buttons, text)
- **CSS** - Styling (colors, sizes, layouts)
- **JavaScript** - Interactivity (add to cart, show/hide)
- **PHP** - Backend logic (products, orders, database)

### Common Customizations
1. **Add more products**: Just add more items to the array in config.php
2. **Add a product to your catalog**: Edit config.php
3. **Change store name**: Edit index.html
4. **Change colors**: Edit css/style.css
5. **Add your logo**: Save image and add to index.html

### Useful Links in Code
- Search for "TODO" comments to find places to customize
- Most changes are in config.php and style.css
- JavaScript is kept very simple for beginners

## 🔒 Important Notes

⚠️ **This template has minimal security** - perfect for learning!
- Do NOT use for real money transactions without:
  - Adding payment processing (Stripe, PayPal)
  - Adding user authentication (login systems)
  - Adding database (MySQL, PostgreSQL)
  - Following security best practices

## 📖 Next Steps

Once comfortable with this template, you can:
1. **Add database**: Store products in MySQL instead of PHP array
2. **Add login**: Let users create accounts
3. **Add payment**: Connect to Stripe or PayPal
4. **Add email**: Send order confirmations
5. **Add search**: Let users find products

## 📞 Questions?

Refer to comments in the code - every major section has explanations for beginners!

---

**Happy Customizing!** 🚀
