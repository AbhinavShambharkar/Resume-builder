<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyResume Builder</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="preview.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    
</head>
<?php             
    session_start();                
    include_once("config.php");
    $username=$_SESSION["username"];
    $stmt = $db->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute([$username]); 
    $user = $stmt->fetch();    
    
    
    error_reporting(0);
    
    
    $codes=$_SESSION["codes"];

    $stmt = $db->prepare("SELECT * FROM personal WHERE code=?");
    $stmt->execute([$codes]); 
    $personal = $stmt->fetch();  

    $stmt = $db->prepare("SELECT * FROM education WHERE code=?");
    $stmt->execute([$codes]); 
    $education = $stmt->fetch(); 

    $stmt = $db->prepare("SELECT * FROM skills WHERE code=?");
    $stmt->execute([$codes]); 
    $skills = $stmt->fetch(); 
?>
<body>
    <div class="data">
        <?php
        print_r($user);
        print_r($personal);
        print_r($education);
        print_r($skills);

        ?>


    </div>
</body>
</html>