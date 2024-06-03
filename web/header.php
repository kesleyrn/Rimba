<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/RimbaTradenarkt.png" type="image/x-icon">
    <title>Rimba &mdash; Shop</title>
    <link rel="stylesheet" href="webcss/header3.css">
    <style>
        .toggle-button {
            display: none;
        }
      
        .trends {
            width: 100%;
            margin: auto;
        }
        .trends img {
            height: 25rem;
            width: 100%;
        }
        .trends-buttons {
            position: relative;
            top: -18rem;
            display: flex;
            justify-content: space-between;
            padding: 40px;
        }
        .trends-buttons button {
            margin: 0 10px;
            cursor: pointer;
            background: transparent;
            color: black;
            border: none;
        }

        @media screen and (max-width: 768px) {
            .toggle-button {
                display: block;
                width: 30px;
                height: 30px;
                position: relative;
                right: 20px;
                top: 5px;
                z-index: 1001;
            } 
            .yes {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color:black;
                z-index: 1000;
                overflow-y: auto;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding-top: 4rem;
            }
            .yes.open {
                display: flex;
            }
            .yes ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
                text-align: center;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .yes ol {
                margin: 20px 0;
            }
            .yes ol a {
                color: #ff004f;
                font-size: 20px;
            }
            .dropdown-content a {
                color:black;
            } 
            .Logo {
                display: block;
                margin-left: 10px;
            }
            .trends {
                padding-top: 10px;
            }
            .trends img {
                height: 10rem;
                width: 100%;
            }
            .search {
                display: none;
            }
            nav {
                display: none;
            }
            .trends-buttons {
                display: none;
            }
            .navbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
        }
    </style>
</head>
<body>

<div class="menu" style="height: 4rem;">
    <div class="navbar">
        <a href="./index.php" class="Logo"><img src="../images/RimbaLogoB.png" style="width: 6rem; height: 90px; position: relative; padding-top:15px;"></a> 
        <button class="toggle-button" onclick="toggleMenu()">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <nav>
            <ul><b>
                <!-- <li><a href="../admin/login.php">Login</a></li> -->
                <li><a href="cart_page.php"><img class="cart" src="../images/shopping-cart-32.ico"> Cart:
                    <?php
                        include "cart_count.php";
                     ?>
                    </a>
                </li>
            </b></ul>
        </nav>
        <form class="search" action="search.php" method="POST">
            <input type="search" name="search" placeholder="search anything"> 
            <button type="submit" name="submit"><img class="Search_icon" src="../images/search_icon.svg" style="background: white;"></button>
        </form>
    </div>

    <div class="yes">
        <ul class="cont">
            <ol><a href="index.php">Home</a></ol>
            <ol>
                <div class="dropdown"><a href="#">Men</a> 
                    <div class="dropdown-content">
                        <!-- <a href="mshirt.php">Shirt</a>
                        <a href="mpant.php">Pant</a>
                        <a href="mclosedshoes.php">Closed shoes</a> -->
                        <a href="msandals.php" class="drop">Sandals</a>
                    </div>
                </div>
            </ol> 
            <ol>
                <div class="dropdown"><a href="#">Women</a> 
                    <div class="dropdown-content">
                        <!-- <a href="wdress.php">Dress</a>
                        <a href="wpant.php">Pant</a>
                        <a href="wclosedshoes.php">Closed shoes</a> -->
                        <a href="wsandals.php">Sandals</a>
                        <!-- <a href="wbag.php">Bag</a> -->
                    </div>
                </div>
            </ol>
            <ol><a href="product.php">Products</a></ol>
            <ol><a href="collection.php">Collections</a></ol>
            <ol><a href="contacts.php">Contact</a></ol>
        </ul>
    </div>

<script>
    function toggleMenu() {
        var yesDiv = document.querySelector('.yes');
        yesDiv.classList.toggle('open');
    }

</script>

</body>
</html>
