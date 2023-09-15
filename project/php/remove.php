<?php
session_start();

if (isset($_GET['key'])) {
    $key = $_GET['key'];

    if (isset($_SESSION['cart'][$key])) {
        unset($_SESSION['cart'][$key]);
    }

    // Redirect back to the cart page
    header('Location: cart.php');
} else {
    // Handle invalid requests
    echo "Invalid request.";
}
?>
