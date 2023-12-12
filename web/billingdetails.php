<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rimba</title>
</head>
<body>
<div class="container">
    <div class="Billing-Details">
        <h2>Billing-Details</h2>
            <form class="send">

                <label for="Email">Email</label> <br>
                    <input type="email"  reqired> <br><br>
                
                    <section>
                    <label for="Fname">First name</label>
                    <label for="Lname" class="second">Last name</label> 
                    </section>
                        <section>

                        
                                <input type="text"   reqired> &nbsp;&nbsp;
                     
                                <input type="text"  reqired>

                        </section> <br>

                <label for="Company">Company name</label> <br>
                    <input type="text"   reqired> <br><br>

                <label for="country">Country / Region</label><br>
                    <input type="text"  reqired> <br><br>

                    

                    <section>
                    <label for="Sector">Sector</label> 
                    <label for="Cell" class="secnd">Cell</label> 
                    </section>
                        <section>

                        
                                <input type="text"   reqired> &nbsp;&nbsp;
                     
                                <input type="text"  reqired>

                        </section> <br>

                <label for="street">Street Adress</label> <br>
                    <input type="text"   reqired><br><br>

                <label for="district">District</label> <br><br>
                    <input type="text"   reqired><br><br>
 
                <label for="Phone">Phone Number </label> <br>
                    <input type="text"   reqired><br><br>

                <label for="message">Order Message</label>  <br>
                    <textarea id="Message" rows="6"></textarea><br>
                        
          
            </form>

            </div>
    </div>
    <div class="container2">
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
<style>
body{
    line-height: 1.5;
    font-family: 'poppins',sans-serif;
    background:whitesmoke;
}

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family:'Robot,'sans-serif;
}
h2{
    text-align:center;

}

.Billing-Details > form{
    width: 60%;
    height: auto;
    border: 1px solid black;
    margin:auto;
    padding:20px;
    margin-top:20px;
    margin-bottom:30px;

}

form > section{
    display:flex;
}
form > input{
    width: 700px;
    height:40px;
    border:1px solid;
}
section input{
    width: 345px;
    height:40px;
    border:1px solid;
}
.second{
    padding-left:280px;
}
.secnd{
    padding-left:308px;
}
textarea{
    width: 700px;
    height:150px;
}
.btn2{
    width:200px;
    height:40px;
    margin-top:20px;
    cursor: pointer;
    background-color:black;
    color: white;
    text-align:center;
    border:none;
}
.btn2:hover{
    background-color:white;
    color: black;
    transform: translateY(-5px) ;
    border:none;
}
button.btn.btn2{
    margin-left:250px;
}



    .container2{
        display:flex;
        position:relative;
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
    }
    .popup{
        width:400px;
        background:#fff;
        border-radius:6px;
        position:absolute;
        top:0;
        left:50%;
        transform:translate(-50%,-50%) scale(1);
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
</html>