<?php
include "header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rimba</title>
    <link rel="stylesheet" href="webcss/contact.css">
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
        <script type="text/javascript">
            (function(){
               emailjs.init("JEke8Pncrhz6FKrPM");
            })();
         </script>

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
                <form class="send">
                    <input type="text"  id="Name" placeholder="Enter your name" reqired>
                    <input type="email"  id="Email" placeholder="Enter your Email" reqired>
                    <textarea id="Message" rows="6" placeholder="Enter your Message"></textarea>
                    <button type="submit" class="btn btn2" onclick="sendMail()">Submit</button>
                </form>

            </div>
        </div>
       
    </div>
  
</div>
<script src="./script.js"></script>
</body>
</html>
<?php
include "footer.php";
?>