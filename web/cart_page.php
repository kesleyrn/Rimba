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
    <style>
        /* Message styles */
        .empty-cart-message {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
            margin-top:80px;
        }

        .empty-cart-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .empty-cart-content h2 {
            margin-bottom: 15px;
        }

        .empty-cart-btn {
            padding: 10px 20px;
            background-color: #e91e63;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .empty-cart-btn:hover {
            background-color: #d81b60;
        }

        /* Existing styles */
        .container {
            width: 100%;
            padding: 0 30px;
            padding-top:30px;
            display: flex;
            flex-direction: column;
        }

        .content-wrapper {
            display: flex;
            flex-direction: column;
        }

        .table-wrapper {
            width: 100%;
            padding: 20px;
        }

        table {
            padding: 20px;
            border: none;
            margin-bottom: 20px;
            background: rgba(236, 236, 236, 0.82);
            width: 100%;
        }
        .tr {
            margin: 10px;
        }
        .td {
            margin: 10px;
            padding: 10px;
            line-height: 25px;
        }
        th {
            color: #e91e63;
        }
        .btn3 {
            padding: 8px;
            background: #e91e63;
            border: none;
            border-radius: 1px;
            cursor: pointer;
            font-weight: 600;
            border: 1px solid #e91e63;
        }
        .btn3:hover {
            transition: all 0.5s ease-in-out;
            background: white;
            color: #e91e63;
        }
        .aside_section {
            background: rgba(236, 236, 236, 0.82);
            width: 100%;
            padding: 20px;
            margin-bottom: 20px;
            height: 25rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .card_component {
            display: grid;
            place-items: center;
            margin: 50px 10px;
        }
        .card_component > .content {
            display: flex;
            align-items: center;
            padding: 10px;
            gap: 100px;
        }
        .content > .left {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .content > .right {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        hr {
            width: 40%;
            height: 0.5vh;
            background: #e91e63;
        }
        .card_btn {
            padding: 8px;
            width: 100%;
            background: black;
            color: white;
            font-size: 18px;
            border: 1px solid black;
            cursor: pointer;
            align-self: center;
        }
        .card_btn:hover {
            transition: all 0.5s ease-in-out;
            background: white;
            color: #e91e63;
        }
        
        .footer-wrapper {
            width: 100%;
        }

        /* Media Queries */
        @media (min-width: 1024px) {
            .content-wrapper {
                flex-direction: row;
                justify-content: space-between;
            }
            .table-wrapper {
                width: 60%;
            }
            .aside_section {
                width: 30%;
            }
        }

        @media (max-width: 1023px) and (min-width: 768px) {
            .content-wrapper {
                flex-direction: row;
                flex-wrap: wrap;
            }
            .table-wrapper, .aside_section {
                width: 100%;
                margin-bottom: 20px;
            }
        }

        @media (max-width: 767px) {
            th {
                display: none;
            }
            .td {
                display: block;
                margin: 10px 0;
                text-align: center;
            }
            .img {
                display: block;
                text-align: center;
            }
            .td img {
                width: 100%;
                height: auto;
            }
            .td strong {
                display: inline-block;
            }
            .btn3 {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $totalAmount = 0;
        echo '<div class="content-wrapper">';
        // Start table for displaying cart items
        echo '<div class="table-wrapper">';
        echo '<table class="table">';
        echo '<tr class="tr">';
        echo '<th>Image</th>';
        echo '<th>Details</th>';
        echo '<th>Action</th>';
        echo '</tr>';

        // Display cart items and their details in table rows
        foreach ($_SESSION['cart'] as $productId) {
            $productDetails = getProductDetails($conn, $productId);

            if ($productDetails) {
                echo '<tr>';
                echo '<td class="img"><img src="../uploads/' . $productDetails['image_url'] . '" alt="Product Image" style="width: 200px; height: 200px; border-radius:4px;"></td>';
                
                // Details column displaying Cname, Gender, Product Name, and Amount
                echo '<td class="td">';
                echo '<strong>Brand:</strong> ' . $productDetails['Cname'] . '<br>';
                echo '<strong>Gender:</strong> ' . $productDetails['Gender'] . '<br>';
                echo '<strong>Product Name:</strong> ' . $productDetails['Product_name'] . '<br>';
                echo '<strong>Price:</strong> ' . $productDetails['Amount'] . ' FRW';
                echo '</td>';

                // Update total amount by adding the price of each product in the cart
                $totalAmount += $productDetails['Amount'];
                
                // Add remove item button in a form
                echo '<td class="td">';
                echo '<form method="post" action="remove_item.php">';
                echo '<input type="hidden" name="product_id" value="' . $productId . '">';
                echo '<button type="submit" name="remove_item" class="btn3">Remove Item</button>';
                echo '</form>';
                echo '</td>';      
                echo '</tr>';
            }
        }

        echo '</table>'; // Close the table
        echo '</div>'; // Close table-wrapper

        echo '<div class="aside_section">';
        ?>
            <div class="card_component">
                <h1>Cart totals</h1>
                <hr>
                <div class="content">
                    <section class="left">
                        <span>Subtotal</span>
                        <span>Shipping</span>
                        <span>Total</span>
                    </section>

                    <section class="right">
                        <span><?php echo $totalAmount; ?> FRW</span>
                        <span>Free Delivery</span>
                        <span><?php echo $totalAmount; ?> FRW</span>
                    </section>
                </div>
            </div> 
            <a href="billingdetails.php"><button class="card_btn">Proceed Payment</button></a>
        <?php
        echo '</div>'; // Close aside_section
        echo '</div>'; // Close content-wrapper
        ?>
    <?php
    } else {
    ?>
        <!-- Message for empty cart -->
        <div class="empty-cart-message">
            <div class="empty-cart-content">
                <h2>Cart is empty</h2>
                <p>Your cart is currently empty. Please add some items to your cart.</p>
                <a href="index.php"><button class="empty-cart-btn">Go to Homepage</button></a>
            </div>
        </div>
    <?php
    }
    ?>
        <div class="footer-wrapper">
            <?php 
            //    include "../web/footer.php"; 
            ?>
        </div>
    </div>
</body>
</html>
