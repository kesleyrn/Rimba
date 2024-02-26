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
            
            
        }
        .trends img{
            height:25rem;
            width:100%;
        }
        .trends-buttons {
            position: relative;
            top: -18rem;
            display:flex;
            justify-content:space-between;
            padding:40px;
        }
        .trends-buttons button {
            margin: 0 10px;
            cursor: pointer;
            background:transparent;
            color:black;
            border:none;
        }

        @media screen and (max-width: 768px) {
            .toggle-button {
                display: block;
                width:30px;
                height:30px;
                position:relative;
                right:20px;
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
            .Logo{
                position:relative;
                left:-3rem;
            }
            nav{
                position:relative;
                padding-right:15px;
            }
            nav ul li a {
                display:flex;
            }
            .trends-buttons {
              display:none;
            }
        }
    </style>
</head>
<body>

<div class="menu" style="height: 4rem;">
    <div class="navbar">
        <a href="./index.php" class="Logo"><img src="../images/RImbaLogo1.png"  style="width: 5rem;height: 60px; position:relative; top:8px; left:55px;"></a> 
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

    <div class="yes" style="padding-top: 40px;">
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
    <img src="../images/DiscountUpdated.jpg" id="trendsImage">
    <div class="trends-buttons">
        <button onclick="prevImage()"><i class="fas fa-chevron-left" style="font-size: 70px; "></i></button>
        <button onclick="nextImage()"><i class="fas fa-chevron-right" style="font-size: 70px; "></i></button>
    </div>
</div>


<script>
    var images = [
        
        '../images/Hotsales.jpg',
        '../images/Shineyourfeet.jpg',
        '../images/DiscountUpdated.jpg',
     
    ];
    var currentImageIndex = 0;
    var trendsImage = document.getElementById('trendsImage');

    function nextImage() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        trendsImage.src = images[currentImageIndex];
    }

    function prevImage() {
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        trendsImage.src = images[currentImageIndex];
    }

    function toggleMenu() {
        var yesDiv = document.querySelector('.yes');
        yesDiv.classList.toggle('open');
        if (yesDiv.classList.contains('open')) {
            yesDiv.style.display = "block";
        } else {
            yesDiv.style.display = "none";
        }
    }

    // Auto image rotation
    setInterval(nextImage, 5000); // Change image every 5 seconds
</script>

</body>
</html>
