<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rimba</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <button class="btn" type="submit" onclick="openPopup()">Submit</button>
  
        <div class="popup" id="popup">
          <img src="../images/tick.JPG">
            <h2>Thank You!</h2> 
            <p>your Details Was Successfully Submitted. Thanks!</p>
            <button type="button"  onclick="closePopup()">OK</button>
        </div>
    </div>
</body>
<script>
    let popup = document.getElementById("popup");

    function openPopup(){
         popup.classList.add("open-popup");
    }
    function closePopup(){
         popup.classList.remove("open-popup");
    }
</script>




</html>

<style>

    *{
        margin:0;
        padding:0;
    }
    .container{
        width:100%;
        height:100vh;
        background:#3c5077;
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .btn{
        padding:10px 60px;
        background:#fff;
        border:0;
        outline:none;
        cursor:pointer;
        font-size:22px;
        font-weight:500px;
        border-radius:30px;
    }
    .popup{
        width:400px;
        background:#fff;
        border-radius:6px;
        position:absolute;
        top:0;
        left:50%;
        transform:translate(-50%,-50%) scale(0.1);
        text-align:center;
        padding:0 30px 30px;
        color:#333;
        visibility:hidden;
        transition: transform 0.4s,top 0.4s;

    }
    .open-popup{
        visibility:visible;
        top:50%;
        transform:translate(-50%,-50%) scale(1);
    }
    .popup img {
        width:80px;
        margin-top:-50px;
        border-radius:50%;
        box-shadow:0 2px 5px rgba(0,0,0,0.2);
    }
    .popup h2{
        font-size:38px;
        font-weight:500;
        margin:30px 0 10px ;

    }
    .popup button{
        width:100%;
        margin-top:50px;
        padding:10px 0;
        background:#6fd649;
        border:none;
        outline:none;
        font-size:18px;
        border-radius:4px;
        cursor:pointer;
        box-shadow:0 3px 5px rgba(0,0,0,0.2);
    }
</style>