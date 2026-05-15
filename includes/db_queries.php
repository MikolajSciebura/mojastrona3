<?php
require_once 'includes/functions.php';
require_once 'config/db.php';

// Check for real DB connection
$db = null;
try {
    $db = getDBConnection();
} catch (Exception $e) {
    // Fallback or silent fail for demo
}

function getProducts($limit = 10) {
    global $db;
    if ($db) {
        $stmt = $db->query("SELECT * FROM products LIMIT $limit");
        return $stmt->fetchAll();
    }
    // Return mock data if no DB
    return [
        ['id' => 1, 'name' => 'MSTech Ultra Gaming X1', 'price' => 7499, 'category' => 'gaming', 'image' => '/assets/img/pc1.png', 'specs' => 'RTX 4070 Ti, Ryzen 7 7800X3D', 'tag' => 'BESTSELLER']
    ];
}
?>
