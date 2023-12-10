<?php
include "../connection.php";

session_start();
if (isset($_POST['login'])) {
    $User_name = $_POST['User_name'];
    $Password = $_POST['Password'];

    // Fetch the hashed password from the database based on the provided username
    $result = mysqli_query($conn, "SELECT * FROM `users` WHERE User_name='$User_name'");
    $row = mysqli_fetch_array($result);

    if ($row) {
       

        // Use password_verify to check if the entered password matches the stored hashed password
        if ($Password) {
            $_SESSION['login'] = "1";
            header('location:desview.php');
        } else {
            // Incorrect password
            echo "incorect password ".mysqli_error($conn);
            // header("location:login.php");
        }
    } else {
        // User not found
        // header("location:login.php");
        echo "user not found ".mysqli_error($conn);
    }
}
?>
