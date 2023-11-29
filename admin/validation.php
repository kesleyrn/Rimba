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
        $hashedPassword = $row['Password'];

        // Use password_verify to check if the entered password matches the stored hashed password
        if (password_verify($Password, $hashedPassword)) {
            $_SESSION['login'] = "1";
            header('location:desview.php');
        } else {
            // Incorrect password
            header("location:login.php");
        }
    } else {
        // User not found
        header("location:login.php");
    }
}
?>
