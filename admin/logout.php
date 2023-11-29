<?php
include "../connection.php";
session_start();
session_destroy();
unset($_GET['User_name']);
unset($_GET['Password']);
header('location:login.php');
?>