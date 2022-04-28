<?php
require_once('config.php');
date_default_timezone_set("Asia/kolkata");
if(isset($_POST['register'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

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
        $sql = "INSERT INTO users (fullname,email,password) VALUES (?,?,?)";
        $stmt= $db->prepare($sql);
        $stmt->execute([$fullname,$email,$password]);

        if($stmt){
            include 'main.html';
        ?>
            <script>
                alert("User registered successfully !!!");
            </script>
        <?php 

        }

        /*$otp = rand(100000,999999);
        $to_email = $email;
        $subject = "OTP for Myresume Builder";
        $body = "One Time Password for Registration on Myfastag Manager is (OTP is Valid Only for 15 minutes)  ".$otp ;
        $headers = "From: sender email";

        if (mail($to_email, $subject, $body, $headers)) {
            include 'otp.html';
           /// $date=date("Y-m-d H:i:s");
            $sql = "INSERT INTO otp (email,otp,is_expired,Timestamp) VALUES (?,?,0,'" . date("Y-m-d H:i:s") ."')";
            $stmt= $db->prepare($sql);
            $stmt->execute([$email,$otp]);


        } else {
            echo "Email sending failed...";
        }*/   
    } 
}