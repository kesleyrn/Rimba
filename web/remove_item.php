<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $productIdToRemove = $_POST['product_id'];

    // Check if 'cart' session variable is set for unlogged users
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        // Find and remove the specified product ID from the cart
        $key = array_search($productIdToRemove, $_SESSION['cart']);
        if ($key !== false) {
            unset($_SESSION['cart'][$key]);
        }
    }

    // Redirect back to the cart page after removing the item
    header("Location: cart_page.php");
    exit();
} else {
    // Handle invalid requests or no product ID provided
    // Redirect or display an error message
    // You may also include a redirect to the cart page if needed
    echo "Invalid request or missing product ID";
    header("Location: cart_page.php");
    exit();
}
?>