<?php
include "../connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/RimbaTradenarkt.png" type="image/x-icon">
    <title>Rimba &mdash; HighQuality</title>
    <link rel="stylesheet" href="admincss/login.css">
</head>
<body>
<div class="container">
        <div id="Login-page">
        
                    <div class="Login-Form">
                        <h2>Login Here As Admin</h2>
                        <form method="post" class="contact-form" action="validation.php">
                            User name:
                            <input type="text" name="User_name" placeholder="Enter your User-Name" required>
                            Email:   
                            <input type="email" name="Email" placeholder="Enter your Email" required>
                            Password:
                            <input type="password" name="Password" placeholder="Enter your Password" reqired>

                            <button type="submit" class="btn btn2" name ="login">Login</button>
                            <a href="../web/index.php">Back to Website</a>
                        </form>

                    </div>
        </div>
</div>
      <style>
         .Login-Form .btn2{
            padding:8px;
            background: black;
            border:none;
            border-radius:1px;
            cursor: pointer;
            font-weight:500;
            border:1px solid  black;
            width:15%;
        }

       .Login-Form .btn2:hover{
            transition:all 0.5s ease-in-out;
            background:white;
            color:#e91e63;
       }
        /* Responsive styles */
 @media screen and (max-width: 769px) {
    .Login-Form .btn2{
            width:25%;
        }
    .Login-Form a{
        display:inline;
        padding-left:15px;
        font-size:13px;
        color:#e91e63;
    }
  }
   </style>
</body>
</html>
