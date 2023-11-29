<?php
include "../connection.php";
$id=$_GET['id'];
$sql="DELETE FROM products WHERE id='$id'";
$result=mysqli_query($conn,$sql);

if($result){
    // echo"Deletig item successful";
    header('location:desview.php');
}else{
    echo"Failled to delete item";
}
?>