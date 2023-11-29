<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rimba</title>
    <link rel="stylesheet" href="webcss/index.css">
</head>
<body>

<?php
include "../connection.php";

$numberPerPage = 10; // Records to display per page

// Get the current page
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Check if a search term is provided
if(isset($_POST['submit']) && !empty($_POST['search'])){
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    
    // Get the total number of records matching the search term
    $sqlTotal = "SELECT COUNT(id) AS total FROM `products` 
                 WHERE Cname LIKE '%$search%' OR Gender LIKE '%$search%' OR Product_name LIKE '%$search%'";
    $resultTotal = mysqli_query($conn, $sqlTotal);
    $rowTotal = mysqli_fetch_assoc($resultTotal);
    $totalRecords = $rowTotal['total'];

    // Calculate total pages based on records and records per page
    $totalPages = ceil($totalRecords / $numberPerPage);

    // Calculate the starting limit for the SQL query
    $startingLimit = ($page - 1) * $numberPerPage;

    // Fetch records for the current page based on the search term
    $sql = "SELECT * FROM `products` 
            WHERE Cname LIKE '%$search%' OR Gender LIKE '$search%' OR Product_name LIKE '%$search%' 
            LIMIT $startingLimit, $numberPerPage";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){ ?>
            <div class="alb">
                <!-- Display product information -->    
               
                <img src="../uploads/<?php echo $row['image_url']; ?>">
                <p>Brand: &nbsp;<?php echo $row['Cname']; ?> <br></p>
                <p>Gender: &nbsp;<?php echo $row['Gender']; ?><br></p>
                <p>Product name: &nbsp;<?php echo $row['Product_name']; ?><br></p>
                <p>Amount: &nbsp;<b><?php echo $row['Amount']; ?>&nbsp;FRW </b><br>

                <!-- Form for buying now or adding to cart -->
                <form method="POST" action="cart_handler.php"> 
                    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                    <button class="btn1" type="submit" name="buy_now">Buy now</button> &nbsp;
                    <button class="btn2" type="submit" name="add_to_cart">+Cart</button>
                </form>

                <br><br>
            </div>
        <?php   
        }

        // Creating pagination buttons for search results
        for($btn = 1; $btn <= $totalPages; $btn++){
            echo '<button class="btn"><a href="search.php?page=' . $btn . '&search=' . $search . '">' . $btn . '</a></button>';
        }
    } else {
        echo "No results found for '{$search}'.";
    }
} else {
    // Fetch all records without a specific search term
    $sql = "SELECT COUNT(id) AS total FROM `products`";
    $resultTotal = mysqli_query($conn, $sql);
    $rowTotal = mysqli_fetch_assoc($resultTotal);
    $totalRecords = $rowTotal['total'];

    // Calculate total pages based on all records and records per page
    $totalPages = ceil($totalRecords / $numberPerPage);

    // Calculate the starting limit for the SQL query
    $startingLimit = ($page - 1) * $numberPerPage;

    // Fetch all records for the current page
    $sqlAll = "SELECT * FROM `products` LIMIT $startingLimit, $numberPerPage";
    $resultAll = mysqli_query($conn, $sqlAll);

    // Display all records
    if(mysqli_num_rows($resultAll) > 0){
        while($row = mysqli_fetch_assoc($resultAll)){ ?>
            <div class="alb">
                <!-- Display other product details -->
             
                <img src="../uploads/<?php echo $row['image_url']; ?>">
                <p>Brand: &nbsp;<?php echo $row['Cname']; ?> <br></p>
                <p>Gender: &nbsp;<?php echo $row['Gender']; ?><br></p>
                <p>Product name: &nbsp;<?php echo $row['Product_name']; ?><br></p>
                <p>Amount: &nbsp;<b><?php echo $row['Amount']; ?>&nbsp;FRW </b><br>

                <!-- Form for buying now or adding to cart -->
                <form method="POST" action="cart_handler.php"> 
                    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                    <button class="btn1" type="submit" name="buy_now">Buy now</button> &nbsp;
                    <button class="btn2" type="submit" name="add_to_cart">+Cart</button>
                </form>

                <br><br>
                <!-- ... -->
            </div>
        <?php   
        }

        // Creating pagination buttons for all records
        for($btn = 1; $btn <= $totalPages; $btn++){
            echo '<button class="btn"><a href="search.php?page=' . $btn . '">' . $btn . '</a></button>';
        }
    } else {
        echo "No products available.";
    }
}
?>
</body>
</html>

<?php
include "../web/footer.php";
?>
