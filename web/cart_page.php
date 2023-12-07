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

    <style>
        table{
            padding: 20px;
            border:none;
            position: relative;
            right:0em;
            padding:10px;
            margin-bottom:20px;
            background: rgba(236, 236, 236, 0.82);
            width:60%;
            
        }
    
        .tr{
            margin:10px;
        }
        .td{
            margin:10px;
            padding:50px;
            line-height:25px;
            
        }
        th{
            color: #e91e63;
            position: relative;
            right:3em;
        }
        .btn3{
            padding:8px;
            background: #e91e63;
            border:none;
            border-radius:1px;
            cursor: pointer;
            font-weight:600;
            border:1px solid  #e91e63;

        }
        .btn3:hover{
            transition:all 0.5s ease-in-out;
            background:white;
            color:#e91e63;
            
        }

        .aside_section{
            background: rgba(236, 236, 236, 0.82);
            width:25%;
            margin-bottom:20px;
            height:60vh;

            
        }

        .card_component{
            display:grid;
            place-items:center;
            margin:60px 10px ;
        
        }

        .card_component >  .content{
            display:flex;
            align-items:center;
            padding:10px;
            gap:100px;
            position: relative;
            top:3em;
        }

        .content > .left{
            display:flex;
            flex-direction:column;
            gap:20px;
        }

        .content > .right{
            display:flex;
            flex-direction:column;
            gap:20px;
        }

        .main{
            display:flex;
            justify-content:space-around;
           

        }
        hr{
            width:40%;
            height:0.5vh;
            background:#e91e63;
        }
        .card_btn{
            padding:8px;
            position:relative;
            left:3.5em;
            width:70%;
            background:black;
            color:white;
            font-size:18px;
            border:1px solid black;
            cursor: pointer;



        }

        .card_btn:hover{
            transition:all 0.5s ease-in-out;
            background:white;
            color:#e91e63;
        }
    </style>

</head>
<body>
<div class="main">
<?php

// Start table for displaying cart items
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
        echo '<td class="img"><img src="../uploads/' . $productDetails['image_url'] . '" alt="Product Image" style="width: 200px; height: 200px;
        border-radius:4px;
        "></td>';
        
        // Details column displaying Cname, Gender, Product Name, and Amount
        echo '<td class="td">';
        echo '<strong>Brand:</strong> ' . $productDetails['Cname'] . '<br>';
        echo '<strong>Gender:</strong> ' . $productDetails['Gender'] . '<br>';
        echo '<strong>Product Name:</strong> ' . $productDetails['Product_name'] . '<br>';
        echo '<strong>Price:</strong> ' . $productDetails['Amount'] . ' FRW';
        echo '</td>';
        
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

} else {
    // If the cart is empty, display a message
    header("location:index.php");
}
?>




<div class="aside_section">
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
                <span>SRWF50,000</span>
                <span>Free Shipping</span>
                <span>RWF50,000</span>
        </section>
       </div>
       
    </div> <br> <br>
    <button class="card_btn"> Procced Payment</button>
</div>
 
</div>
<?php
include "../web/footer.php"; // Include your footer file
?>
</body>
</html>
