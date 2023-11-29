<?php
include "../connection.php";
/*---uploading photo*/


if(isset($_POST['upload']) && isset($_FILES['my_image'])){
    
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

//for image//
    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];
 //for description//
 $Cname = $_POST['Cname'];
 $Gender = $_POST['Gender'];
 $Product_name = $_POST['Product_name'];
 $Amount = $_POST['Amount'];
 
 

    if($error === 0){
        if($img_size > 12500000 ){
          
            $em = "sorry,your file is too large!";
            header("location:additem.php?error=$em"); 
        }else{
           $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
           $img_ex_lc = strtolower($img_ex);

           $allowed_exs = array("jpg","jpeg","png");

           if(in_array($img_ex_lc, $allowed_exs)){
              $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
              $img_upload_path = '../uploads/'.$new_img_name;
              move_uploaded_file($tmp_name, $img_upload_path);

      //inset description and photo into db//
      $sql= "INSERT INTO products(image_url,Cname,Gender,Product_name,Amount)
               VALUES ('$new_img_name','$Cname','$Gender','$Product_name','$Amount')";
      mysqli_query($conn,$sql);
      header("location:desview.php");

           }else{
            $em = "you can't upload file of this type";
            header("location:additem.php?error=$em");
           }
        }
    }else{
        $em = "unknown error occurred";
        header("location:additem.php?error=$em"); 
    }

}else{
   
   header("location:additem.php");
}
?>