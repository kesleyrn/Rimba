<?php
include "desheader.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rimba</title>
    <link rel="stylesheet" href="admincss/desview.css">

</head>
<body> 
<div class="container">
            <?php
            include "../connection.php";

            
            $numberPerPage = 10; // Records to display per page

            // Get the total number of records
            $sqlTotal = "SELECT COUNT(id) AS total FROM `products`";
            $resultTotal = mysqli_query($conn, $sqlTotal);
            $rowTotal = mysqli_fetch_assoc($resultTotal);
            $totalRecords = $rowTotal['total'];

            // Calculate total pages based on records and records per page
            $totalPages = ceil($totalRecords / $numberPerPage);

            // Get the current page
            if(isset($_GET['page'])){
                $page = $_GET['page'];
            } else {
                $page = 1;
            }

            // Calculate the starting limit for the SQL query
            $startingLimit = ($page - 1) * $numberPerPage;

            // Fetch records for the current page
            $sql="SELECT *FROM `products`  ORDER BY 'id' DESC LIMIT $startingLimit, $numberPerPage ";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0){
                while($products = mysqli_fetch_assoc($result)){ ?>

    <div class="alb">
                <img src="../uploads/<?=$products['image_url'];?>">
                <p>Brand:  &nbsp;<?php echo $products['Cname'];?> <br></p>
                <p>Gender:  &nbsp;<?php echo $products['Gender'];?><br></p>
                <p>Product name: &nbsp;<?php echo $products['Product_name'];?><br></p>
                <p>Amount: </b> &nbsp;<?php echo $products['Amount'];?>&nbsp;FRW</b><br>
                <a href="deleteprdct.php?id=<?php echo $products['id']?>" onclick="return confirm('Are you sure you want to delete this item ')">Delete</a>
                <a href="updateprdct.php?id=<?php echo $products['id'];?>">update</a>
            <br><br>
    </div>

            <?php   }
            }
            ?>
 </div>
 <?php
   // Creating pagination buttons
   for($btn = 1; $btn <= $totalPages; $btn++){
    echo '<button class="btn"><a href="desview.php?page=' . $btn . '">' . $btn . '</a></button>';
}
 ?>
</body>
</html>
