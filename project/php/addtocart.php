<?php
session_start();

// Check if the user is logged in (you can implement user authentication here)

if (isset($_POST['name']) && isset($_POST['date'])) {
    // Add the selected product to the cart
    $name = $_POST['name'];
    $date = $_POST['date'];

    // You can also check if the product already exists in the cart and update the quantity if needed

    $cart_item = [
        'name' => $name,
        'date' => $date,
        'quantity' => 1, // Initial quantity
    ];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $_SESSION['cart'][] = $cart_item;

    // Redirect back to the product page or show a success message
    header('Location: ../index.php'); // Replace with the actual product page URL
    exit(); // Ensure that no more code is executed after the redirect
} else {
    // Handle invalid requests
    echo "Invalid request.";
}
?>
