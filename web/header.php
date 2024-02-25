<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/RimbaTradenarkt.png" type="image/x-icon">
    <title>Rimba &mdash; HighQuality</title>
    <link rel="stylesheet" href="webcss/header2.css">
    <style>
        .toggle-button {
            display: none;
        }
      
        .trends{
            width:100%;
            margin:auto;
            /* padding-top:20px; */
            
        }
        .trends img{
            height:25rem;
            width:100%;
        }
        @media screen and (max-width: 768px) {
        .toggle-button {
            display: block;
            width:30px;
            height:30px;
            position:relative;
            right:5px;
            top:5px;
        } 
        .yes {
            display: none;
        }
        .yes.open {
            display: block;
        }
        .trends{
            padding-top:10px;
            
        }
        .trends img{
            height:10rem;
            width:100%;
        }
        .search{
            display:none;
        }

       
        }
    </style>
</head>
<body>

<div class="menu" style="height: 4rem;">
    <div class="navbar">
        <a href="#"><img src="../images/RImbaLogo.png" style="width: 9rem;height: 10rem; padding-top:30px;"></a> 
        <nav>
            <ul><b>
                <li><a href="../admin/login.php">Login</a></li>
                <li><a href="cart_page.php"><img class="cart" src="../images/shopping-cart-32.ico"> Cart:
                    <?php
                        include "cart_count.php";
                     ?>
                    </a>
                </li>
            </b></ul>
        </nav>
        <form class="search" action="search.php" method="POST">
            <input type="search" name="search" placeholder="search anything" > 
            <button type="submit" name="submit"><img class="Search_icon" src="../images/search_icon.svg" style="background: white;"></button>
        </form>
        <button class="toggle-button" onclick="toggleMenu()">
        <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
    </div>

    <div class="yes">
        <ul class="cont">
            <ol><a href="index.php">Home</a></ol>
            <ol>
                <div class="dropdown"><a href="#">Men  </a> 
                    <div class="dropdown-content">
                        <a href="mshirt.php">Shirt</a>
                        <a href="mpant.php">Pant</a>
                        <a href="mclosedshoes.php">Closed shoes</a>
                        <a href="msandals.php">Sandals</a>
                    </div>
                </div>
            </ol> 
            <ol>
                <div class="dropdown"><a href="#">Women </a> 
                    <div class="dropdown-content">
                        <a href="wdress.php">Dress</a>
                        <a href="wpant.php">Pant</a>
                        <a href="wclosedshoes.php">Closed shoes</a>
                        <a href="wsandals.php">Sandals</a>
                        <a href="wbag.php">Bag</a>
                    </div>
                </div>
            </ol>
            <ol><a href="product.php">Products</a></ol>
            <ol><a href="collection.php">collections</a></ol>
            <ol><a href="contacts.php">Contact</a></ol>
        <ul>
    </div>
    <div class="trends">
        <img src="../images/sample.jpg">
    </div>

    <script>
        function toggleMenu() {
            var yesDiv = document.querySelector('.yes');
            yesDiv.classList.toggle('open');
        }
    </script>
</body>
</html>
