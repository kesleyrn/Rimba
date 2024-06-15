<?php
session_start();
// Count the number of items in the cart
$cartItemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

// Echo the number of items in the cart
echo $cartItemCount;
?>
