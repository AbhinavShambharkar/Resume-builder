<?php
session_start();
require_once('config.php');
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username']=$username;

    $sql = "SELECT * FROM `users` WHERE email='" . $_POST["username"] . "' AND password='" . $_POST["password"] . "' ";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if(!empty($count)){
        include 'create.php';
        
        ?>
            <script>
                alert("Login Successfull !!");
            </script>
        <?php 
        
    }
    else{
        include 'main.html';
        ?>
            <script>
                alert("Invalid Credentials !!");
            </script>
        <?php  
    }

}
?>