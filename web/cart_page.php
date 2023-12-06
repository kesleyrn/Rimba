<?php
include "header.php";

// Check if 'cart' session variable is set and not empty
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    // Assuming you have a connection to your database
    include "../connection.php";

    // Function to get product details from the database based on the product ID
    function getProductDetails($conn, $productId)
    {
        $sql = "SELECT * FROM `products` WHERE id = $productId";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        }

        return null;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rimba</title>
    <link rel="stylesheet" href="webcss/cart_page.css">

</head>
<body>
<?php

// Display cart items and their details
foreach ($_SESSION['cart'] as $productId) {
    $productDetails = getProductDetails($conn, $productId);

    if ($productDetails) {
        // Display product details here (customize this according to your HTML structure)
        echo '<div class="cart-item">';
        echo '<img src="../uploads/' . $productDetails['image_url'] . '">';
        echo '<p>Brand: ' . $productDetails['Cname'] . '</p>';
        echo '<p>Gender: ' . $productDetails['Gender'] . '</p>';
        echo '<p>Product Name: ' . $productDetails['Product_name'] . '</p>';
        echo '<p>Price: ' . $productDetails['Amount'] . ' FRW</p>';
        // Display more product details as needed

        // Add a form with a remove button for each item
        echo '<form method="post" action="remove_item.php">';
        echo '<input type="hidden" name="product_id" value="' . $productId . '">';
        echo '<button type="submit" name="remove_item">Remove Item</button><br><br>';
        echo '</form>';

        echo '</div>';
    }
}
} else {
    // If the cart is empty, display a message
    echo '<p>Your cart is empty.</p>';
}
?>

<!-- Your cart HTML structure goes here like proceed payment ---->

<?php
include "../web/footer.php"; // Include your footer file
?>

 
</body>
</html>
