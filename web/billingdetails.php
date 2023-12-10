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
                        
                    <button type="submit" class="btn btn2">Submit</button>
                </form>

            </div>
    </div>
</body>

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
}
.btn2:hover{
    background-color:white;
    color: black;
    transform: translateY(-5px);
    border:none;
}
button.btn.btn2{
    margin-left:250px;
}
    </style>
</html>