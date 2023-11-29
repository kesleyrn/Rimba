<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rimba</title>
    <link rel="stylesheet" href="webcss/contact.css">
</head>
<body>
  <!------------------contact -------------------->

<div id="Contact">
    <div class="container2">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Us</h1>
                <p><i class="fas fa-paper-plane"></i>Rimba@gmail.com</p>
                <p><i class="fas fa-phone-square-alt"></i>+1 6377384384</p>
                <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://www.instagram.com/rimbaquality/"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>

                </div>
               
            </div>

            <div class="contact-right">
                <h2>Message Us</h2>
                <form method="post" class="send">
                    <input type="text" name="Name" placeholder="Enter your name" reqired>
                    <input type="email" name="Email" placeholder="Enter your Email" reqired>
                    <textarea name="Message" rows="6" placeholder="Enter your Message"></textarea>
                    <button type="submit" class="btn btn2">Submit</button>
                </form>

            </div>
        </div>
       
    </div>
  
</div>
</body>
</html>
<?php
include "footer.php";
?>