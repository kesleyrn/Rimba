<?php
//db connection
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="rimba";

$conn = mysqli_connect($servername,$username,$password,$dbname);

//check connection

if($conn){
   // echo "db connected";

}else{
 die ("failled to connect");
}
?>