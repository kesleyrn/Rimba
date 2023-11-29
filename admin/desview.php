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

    <div class="wel">
            <?php
            include "../connection.php";
            $sql="SELECT *FROM `products`  ORDER BY 'id' DESC ";
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

</body>
</html>
