<?php
// selecting data in form //
include "../connection.php";
if (isset($_GET['id'])) {

$id=$_GET['id'];
$sql=mysqli_query($conn,"SELECT * FROM `products` WHERE `id`='$id'");
if (mysqli_num_rows($sql)>0) {
	$row=mysqli_fetch_array($sql);
}


}

// update product description//

if (isset($_POST['Update'])) {

	$Cname=$_POST['Cname'];
	$Gender=$_POST['Gender'];
	$Product_name=$_POST['Product_name'];
	$Amount=$_POST['Amount'];
	

	$Product_name=$_POST['Product_name'];
	$sql = " UPDATE `products` SET `Cname`='$Cname',`Gender`='$Gender',`Product_name`= '$Product_name',             `Amount`='$Amount' WHERE `id` ='$id'";
    $result= mysqli_query($conn,$sql);

    if($result){
        header ("location:desview.php");
    }else{
        echo "product not updated";
    }

 
}

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rimba</title>
    <link rel="stylesheet" href="admincss/updateprdct.css">
 
</head>
<body>
  
    <?php if(isset($_GET['error'])): ?>
    <p> <?php  echo  $_GET['error'] ;?></p>
    <?php endif ?>

    <a href="desview.php">back</a>

    <div class="container">
      <div id="update-page">
        <div class="update-Form">
           <h2>Update-item Here</h2>
            <form method="POST" enctype="multipart/form-data"> 
            </p><input type="text" name="Cname" value="<?php echo $row['Cname']; ?>"reqired > 
    
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
                        <option value="Shoes">Shoes</option>
                        <option value="Sandals">Sandals</option>
                        <option value="Bag">Bag</option>
                    </select>
                    <p> Amount: </p><input type="text" name="Amount" value="<?php echo $row['Amount']; ?>" reqired>
                    <div class="pht">
                        <!-- <input type="file"name="my_image"reqired> -->
                        <button type="submit" name="Update" class="up">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
