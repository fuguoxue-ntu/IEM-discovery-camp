<?php
// ===== CART HANDLER =====
// This file handles cart operations from the frontend

// Include configuration
require_once 'config.php';

// Get request method
$method = $_SERVER['REQUEST_METHOD'];

// Handle different request types
if ($method === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $action = $input['action'] ?? '';

    if ($action === 'validate') {
        // Validate if products exist
        validateCart($input['items']);
    } else if ($action === 'checkout') {
        // Process checkout
        processCheckout($input['items'], $input['total']);
    }
} else if ($method === 'GET') {
    // Just return success for GET requests
    echo json_encode(['status' => 'success', 'message' => 'Cart handler ready']);
}

// Function to validate cart items
function validateCart($items) {
    global $products;

    $validItems = [];
    foreach ($items as $item) {
        $product = findProduct($item['id']);
        if ($product) {
            $validItems[] = [
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => $item['quantity']
            ];
        }
    }

    echo json_encode(['status' => 'success', 'items' => $validItems]);
}

// Function to process checkout (simple version)
function processCheckout($items, $total) {
    // In a real application, you would:
    // 1. Validate payment information
    // 2. Process payment with a payment gateway
    // 3. Store order in database
    // 4. Send confirmation email

    // For this demo, just confirm the order
    $orderNumber = 'ORDER-' . time();

    echo json_encode([
        'status' => 'success',
        'message' => 'Order placed successfully!',
        'order_number' => $orderNumber,
        'total' => $total
    ]);
}

// Helper function to find a product by ID
function findProduct($productId) {
    global $products;

    foreach ($products as $product) {
        if ($product['id'] === $productId) {
            return $product;
        }
    }

    return null;
}

?>
