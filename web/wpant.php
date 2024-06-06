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
<u class="Hu"><p class="Heading">Women Pants</p></u>
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
        $sql = "SELECT * FROM `products` WHERE Product_name = 'Pant' AND Gender = 'Female' ORDER BY id DESC LIMIT $startingLimit, $numberPerPage";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){ ?>
                <div class="alb">
                    <img src="../uploads/<?= $row['image_url'];?>">
                    <p>Name: &nbsp;<?php echo $row['Cname'];?> <br></p>
                    <p>Gender: &nbsp;<?php echo $row['Gender'];?><br></p>
                    <p>Product: &nbsp;<?php echo $row['Product_name'];?><br></p>
                    <p>Amount: &nbsp;<b><?php echo $row['Amount'];?>&nbsp;FRW </b><br>
                

                    <form method="POST" action="cart_handler.php"> 
                        <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                        <button class="btn1" type="submit" name="buy_now">Buy now</button> &nbsp;
                        <button class="btn2" type="submit" name="add_to_cart">+Cart</button>
                        
                </form>


                    <br><br>
                </div>
        <?php   
            }
        }
        ?>
        </div>
        
        <!-- Pagination buttons container -->
        <div class="pagination">
          <?php
          // Creating pagination buttons
          for($btn = 1; $btn <= $totalPages; $btn++){
              echo '<button class="btn"><a href="wpant.php?page=' . $btn . '">' . $btn . '</a></button>';
          }
          ?>
        </div>
        
        <?php
        include "../web/footer.php";
        ?>
      </body>
      </html>
      