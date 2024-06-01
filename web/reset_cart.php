<?php
session_start();
// Clear the cart
unset($_SESSION['cart']);
// Redirect back to the home page or any other page
header("Location: index.php");
exit();
?>
