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

</head>
<body>
  <!------------------contact -------------------->

<div id="Contact">
    <div class="container2">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Us</h1>
                <p><i class="fas fa-paper-plane"></i>hello@rimbashop.com</p>
                <p><i class="fas fa-phone-square-alt"></i>+250 787888596/+250 734594179</p>
                <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://www.instagram.com/rimbaquality/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/company/rimbashop/" target="_blank"><i class="fab fa-linkedin-in"></i></a>

                </div>
               
            </div>

            <div class="contact-right">
                <h2>Message Us</h2>
                <form class="send"  onsubmit="sendToWhatsAp(event)">
                    <input type="text"  id="Names" placeholder="Enter your names" required>
                    <input type="email"  id="Email" placeholder="Enter your Email" required>
                    <textarea id="Message" rows="6" placeholder="Enter your Message" required></textarea>
                    <button type="submit" class="btn btn2">Submit</button>
                </form>

            </div>
        </div>
       
    </div>
  
</div> 
    <style>
     .send .btn2{
        padding:8px;
        background: #e91e63;
        border:none;
        border-radius:1px;
        cursor: pointer;
        font-weight:500;
        border:1px solid  #e91e63;
        width:15%;
        margin:8px;
        }

    .send .btn2:hover{
        transition:all 0.5s ease-in-out;
        background:white;
        color:#e91e63;
       }

    /* media query for small screen */
        @media screen and (max-width: 768px) {
        
            .contact-left{
                flex-basis: 90%;
                margin-left: 30px;
                padding-top: 20px;
            }
            .contact-left h1{
                position:relative;
                top:10px;
            }
            .contact-right{
                flex-basis: 90%;
                margin-left: 30px;
            }
            .send .btn2{
                width:35%;
            }
            .send input,.send textarea{
                width: 98%;

           }
        }

    </style>
        <script>
                function sendToWhatsAp(event) {
                    event.preventDefault();

                    const names = document.getElementById("Names").value;
                    const email = document.getElementById("Email").value;
                    const message = document.getElementById("Message").value;

                    const whatsappMessage = `Full Names: ${names}%0AEmail: ${email}%0AMessage ToSend: ${message}`;
                    const whatsappUrl = `https://wa.me/787888596?text=${whatsappMessage}`;

                    window.open(whatsappUrl, '_blank');

    }
        </script>
</body>
</html>
<?php
include "footer.php";
?>