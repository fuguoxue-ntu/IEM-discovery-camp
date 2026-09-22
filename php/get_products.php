<?php
// ===== GET PRODUCTS =====
// This file returns all products in JSON format

// Include configuration
require_once 'config.php';

// Return products as JSON
echo json_encode($products);

?>
