<?php
include "../connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rimba</title>
    <link rel="stylesheet" href="admincss/login.css">
</head>
<body>
<div class="container">
        <div id="Login-page">
        
                    <div class="Login-Form">
                        <h2>Login Here As Admin</h2>
                        <form method="post" class="contact-form" action="validation.php">
                            User name:
                            <input type="text" name="User_name" placeholder="Enter your User-Name" reqired>
                            Email:   
                            <input type="email" name="Email" placeholder="Enter your Email" reqired>
                            Password:
                            <input type="password" name="Password" placeholder="Enter your Password" reqired>

                            <button type="submit" class="btn btn2" name ="login">Login</button>
                            <a href="../web/index.php">Back to Website</a>
                        </form>

                    </div>
        </div>
</div>
</body>
</html>
