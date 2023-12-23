<?php
include "../connection.php";

if(isset($_POST['submit'])){
    $Flname = $_POST['Flname'];
    $User_name = $_POST['User_name'];
    $Email = $_POST['Email'];
    $Telphone = $_POST['Telphone'];
    $Password = $_POST['Password'];


    $sql = "INSERT INTO `users` (Flname, User_name, Email, Telphone, Password) 
            VALUES ('$Flname', '$User_name', '$Email', '$Telphone', '$Password')";

    $result = mysqli_query($conn, $sql);

    // Check query if it is working
    if($result){
        header("location:login.php");
    } else {
        die(mysqli_error($conn));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rimba</title>
    <link rel="stylesheet" href="admincss/signup.css">
</head>
<body>
    <div class="container">
        <div id="Signup-page">
        
                    <div class="Signup-Form">
                        <h2>Signup Here</h2>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            First & last names
                            <input type="text" name="Flname" placeholder="Enter your First and Last Names" reqired>
                            User name :
                            <input type="text" name="User_name" placeholder="Enter your User-Name" reqired>
                            Email:   
                            <input type="email" name="Email" placeholder="Enter your Email" reqired>
                            Telphone  :   
                            <input type="telphone" name="Telphone" placeholder="Enter your Telephone Number" reqired>
                            Password:
                            <input type="password" name="Password" placeholder="Enter your Password" reqired>

                            <button type="submit" class="btn btn2" name ="submit">Signup</button>
                            <a href="desview.php">Back-to Dashboard</a></a>
                        </form>

                    </div>
        </div>
</div>


</body>
</html>
