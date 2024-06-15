<?php
session_start();
// codes for add to cart

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_to_cart'])) {
        // Check if the product ID is received
        if (isset($_POST['product_id'])) {
            $productId = $_POST['product_id'];

            // Here you can add the product to the cart, for example, using session variables
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array(); // Initialize the cart if not exists
            }

            // Add the product ID to the cart array
            $_SESSION['cart'][] = $productId;
                    // Show JavaScript alert and confirm with the user
                    echo '<script>
                    alert("Item added to cart!");
                    window.location.href = "../Pages/index.php"; // Redirect to the desired page after alert
                 </script>';
                exit();
           
        }
    }
}else{
    echo '<script>
    alert("There is problem on adding item to cart!");
    window.location.href = "../Pages/index.php"; // Redirect to the desired page after alert
 </script>';
exit();
}


// codes for buy now

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['buy_now'])) {
        // Check if the product ID is received
        if (isset($_POST['product_id'])) {
            $productId = $_POST['product_id'];

            // Here you can add the product to the cart, for example, using session variables
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array(); // Initialize the cart if not exists
            }

            // Add the product ID to the cart array
            $_SESSION['cart'][] = $productId;
                    // Show JavaScript alert and confirm with the user
                    echo '<script>
                    // alert("Item added to cart!");
                    window.location.href = "../Pages/cart_page.php"; // Redirect to the desired page after alert
                 </script>';
                exit();
           
        }
    }
}else{
    echo '<script>
    alert("There is problem on adding item to cart!");
    window.location.href = "../Pages/index.php"; // Redirect to the desired page after alert
 </script>';
exit();
}



?>