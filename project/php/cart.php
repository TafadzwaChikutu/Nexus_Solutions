<?php
session_start();

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "Your cart is empty.";
} else {
    // Display cart items and provide an option to remove items
    foreach ($_SESSION['cart'] as $key => $item) {
        echo "Product: {$item['product_name']} - Price: {$item['price']} - Quantity: {$item['quantity']} ";
        echo "<a href='remove_from_cart.php?key=$key'>Remove</a><br>";
    }
}
?>
