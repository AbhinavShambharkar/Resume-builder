<?php
require_once('config.php');
date_default_timezone_set("Asia/kolkata");
if(isset($_POST['register'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $photo_name= $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];
    $file_store = "../image/".$photo_name;
    move_uploaded_file($photo_tmp,$file_store);
    

    $stmt = $db->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute([$email]); 
    $user = $stmt->fetch();
    if ($user) {
        include 'register.html';
        ?>
            <script>
                alert("User With This Email Id Already Exists!!");
            </script>
        <?php 
        
    } else {

        $code = rand(10000000,99999999);
        $sql = "INSERT INTO users (fullname,email,photo,password) VALUES (?,?,?,?)";
        $stmt= $db->prepare($sql);
        $stmt->execute([$fullname,$email,$photo_name,$password]);

        if($stmt){
            include '../Html/main.html';
        ?>
            <script>
                alert("User registered successfully !!!");
            </script>
        <?php 

        }   
    } 
}