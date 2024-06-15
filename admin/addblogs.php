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
    <p> <?php echo $_GET['error']; ?></p>
    <?php endif ?>

    <div class="container">
      <div id="additem-page">
        <div class="additem-Form">
           <h2>+Blog Here</h2>
            <form action="insert.php" method="post" enctype="multipart/form-data">
                    <p>Blog Title:</p><input type="text" name="B_title" placeholder="Please Enter Blog Title" required> 
                    <p>Blog Type:</p><select name="B_type" required class="slct">
                        <option value="">-----Select Blog Type-----</option>
                        <option value="Main-Blog">Main-Blog</option>
                        <option value="Sub-Blog">Sub-Blog</option>
                    </select>
                    <p>Blog Description: </p><textarea name="B_description" rows="6" placeholder="Enter your Blog Description:" required></textarea>
                    <div class="pht">
                        <input type="file" name="B_image" required>
                        <input type="submit" value="upload" name="submit" class="up">
                    </div>
                </form>
            </div>
        </div>
    </div>
<style>
    .additem-Form textarea{
    width: 100%;
    border: 0;
    outline: none;
    background: whitesmoke;
    padding: 15px;
    margin: 15px 0;
    color: #000;
    font-size: 18px;
    border-radius: 6px;
}
</style>
    
</body>
</html>
