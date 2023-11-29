<?php 
include "../connection.php";
include "desheader.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rimba</title>
    <link rel="stylesheet" href="admincss/additem.css">
 
</head>
<body>
  
    <?php if(isset($_GET['error'])): ?>
    <p> <?php  echo  $_GET['error'] ;?></p>
    <?php endif ?>

    <div class="container">
      <div id="additem-page">
        <div class="additem-Form">
           <h2>Add-item Here</h2>
            <form action="insert.php" method="post" enctype="multipart/form-data">
            <p> Collection:</p><input type="text" name="Cname" placeholder="Enter Collection name" reqired> 
    
                  <p> Gender:</p><select name="Gender"required class="slct">
                        <option value="">-----Select Gender-----</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>

                    <p> Product_name:</p><select name="Product_name"required class="slct">
                        <option value="">-----Select Product-----</option>
                        <option value="Dress">Dress</option>
                        <option value="Shirt">Shirt</option>
                        <option value="Pant">Pant</option>
                        <option value="Closed Shoes">Closed shoes</option>
                        <option value="Sandals">Sandals</option>
                        <option value="Bag">Bag</option>
                    </select>
                    <p> Amount: </p><input type="text" name="Amount" placeholder="Enter Amount" reqired>

                    <div class="pht">
                        <input type="file"name="my_image"reqired>
                        <input type="submit" value="upload" name="upload" class="up">
                    </div>
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>
