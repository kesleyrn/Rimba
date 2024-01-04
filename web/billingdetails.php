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

                <label for="Email">Email</label> 
                    <input type="email"  reqired> 
                
                    <div class="name-section">
                <div class="input-group">
                    <label for="Fname">First Name</label>
                    <input type="text" required>
                </div>
                <div class="input-group">
                    <label for="Lname">Last Name</label>
                    <input type="text" required>
                </div>
            </div>

                <label for="Company">Company name</label> 
                    <input type="text"   reqired>

                <label for="country">Country / Region</label>
                    <input type="text"  reqired> 

                    

                     <div class="contact-section">
                <div class="input-group">
                    <label for="Sector">Sector</label>
                    <input type="text" required>
                </div>
                <div class="input-group">
                    <label for="Cell">Cell</label>
                    <input type="text" required>
                </div>
            </div>

                <label for="street">Street Adress</label> 
                    <input type="text"   reqired>

                    <label for="district">District</label> 
                        <input type="text"   reqired>
    
                    <label for="Phone">Phone Number </label> 
                        <input type="text"   reqired>
                <label for="message">Order Message</label>
                    <textarea id="Message" rows="6"></textarea>

                <button class="btn" type="button" onclick="openPopup()">Submit</button>    
          
            </form>

         </div>
    </div>

         

           <div class="container2">
                    <div class="popup" id="popup">
                            <img src="../images/tick.JPG">
                                <h2>Thank You!</h2> 
                                <p>your Details Was Successfully Submitted. Thanks!</p>
                                <button type="submit"  onclick="closePopup()">Continue With Payment</button>
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

                /* Base styles */
                .container {
                    width: 100%;
                    max-width: 800px;
                    margin: 0 auto;
                    padding: 20px;
                    box-sizing: border-box;
                    
                }

                .Billing-Details {
                    background-color: #f9f9f9;
                    padding: 20px;
                    border-radius: 8px;
                }

                .Billing-Details h2 {
                    font-size: 24px;
                    margin-bottom: 20px;
                }

                label {
                    display: block;
                    margin-bottom: 6px;
                }

                input[type="text"],
                input[type="email"],
                textarea {
                    width: 100%;
                    padding: 8px;
                    margin-bottom: 12px;
                    border-radius: 4px;
                    border: 1px solid #ccc;
                    box-sizing: border-box;
                }

                section {
                    display: flex;
                    flex-wrap: wrap;
                    gap: 10px;
                    margin-bottom: 12px;
                }

                section label {
                    flex: 1 1 50%; /* Adjust this value as needed */
                }
                .input-group{
                    display: inline-block;
                }
                .input-group input{
                    width:55.3vh;
                }
                
                .btn{
                        padding:10px 60px;
                        background:#fff;
                        border:1px solid #e91e63;
                        outline:none;
                        cursor:pointer;
                        font-size:20px;
                        font-weight:300;
                        position:relative;
                    
                    
                    }

                .btn:hover{
                    background: rgba(0, 0, 0, 0.816);
                    color:white;
                    transition:all 0.3s ease-in-out;
                    transform: translateY(-5px) ;
                    border:none;
                }
                .container2{
                    display:flex;
                    position:relative;
                    align-items:center;
                    justify-content:center;
                    bottom:28em;
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
            /* Media queries for responsiveness */
            @media screen and (max-width: 600px ) {
                section label {
                    flex: 1 1 100%;
                    margin-bottom: 6px;
                }   

                .input-group{
                    display: inline;
                }
                .input-group input{
                    width:100%;
                }
            }

            @media screen and (max-width: 1200px) {
                section label {
                    flex: 1 1 100%;
                    margin-bottom: 6px;
                }   

                .input-group{
                    display: inline;
                }
                .input-group input{
                    width:100%;
                }
            }
            @media screen and (max-width: 2560px) {
                section label {
                    flex: 1 1 100%;
                    margin-bottom: 6px;
                }   

                .input-group{
                    display:inline;
                }
                .input-group input{
                    width:100%;
                }
            }

            


    </style>
</html>