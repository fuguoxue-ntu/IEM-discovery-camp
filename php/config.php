<?php
// ===== SIMPLE CONFIGURATION =====

// Set header to return JSON
header('Content-Type: application/json');

// Allow requests from any origin (for development only)
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Sample products database
// In a real application, this would be stored in a database
// For this beginner template, we use a simple array

$products = array(
    array(
        'id' => 'prod-001',
        'name' => 'Wireless Headphones',
        'description' => 'High-quality sound',
        'price' => 79.99,
        'image' => 'https://via.placeholder.com/250x200?text=Headphones'
    ),
    array(
        'id' => 'prod-002',
        'name' => 'USB-C Cable',
        'description' => 'Fast charging cable',
        'price' => 12.99,
        'image' => 'https://via.placeholder.com/250x200?text=USB+Cable'
    ),
    array(
        'id' => 'prod-003',
        'name' => 'Phone Case',
        'description' => 'Protective and stylish',
        'price' => 24.99,
        'image' => 'https://via.placeholder.com/250x200?text=Phone+Case'
    ),
    array(
        'id' => 'prod-004',
        'name' => 'Screen Protector',
        'description' => 'Tempered glass protection',
        'price' => 9.99,
        'image' => 'https://via.placeholder.com/250x200?text=Screen+Protector'
    ),
    array(
        'id' => 'prod-005',
        'name' => 'Portable Charger',
        'description' => '20000mAh battery',
        'price' => 34.99,
        'image' => 'https://via.placeholder.com/250x200?text=Charger'
    ),
    array(
        'id' => 'prod-006',
        'name' => 'Phone Mount',
        'description' => 'Car dashboard mount',
        'price' => 15.99,
        'image' => 'https://via.placeholder.com/250x200?text=Phone+Mount'
    )
);

?>
