<?php
include "../connection.php";
session_start();
if(!isset($_SESSION['login'])){
header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rimba</title>
    <link rel="stylesheet" href="admincss/desheader.css">
    
</head>
<body>

<div class="menu">

    <div class="navbar">
        <a href="#"><img src="../images/official-website-3-48.png"></a> 
            <nav>
                <ul>
                    <b><li><a href="logout.php">Logout</a></li></b>  
                </ul>
            </nav>
                    <i><a href="desprofile.php">
                        <i class="fa-solid fa-user" style="font-size: 28px;margin-right: 20px;">
                    </i></a>
    </div>    


    <div class="yes">
           <ul class="cont">
                <ol><a href="desview.php">Home</a></ol>
                <ol><a href="additem.php">Add-products</a></ol>
                <ol><a href="#">Monthly-Report</a></ol>
                <ol><a href="signup.php">Sign_user</a></ol>
               
            </ul> 
    </div>
   
</body>
</html>