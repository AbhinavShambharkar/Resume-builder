<?php
require_once('config.php');
date_default_timezone_set("Asia/kolkata");
if(isset($_POST['next1'])){

    error_reporting(0);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $Address = $_POST['Address'];


    $link1 = $_POST['link1'];
    $git = $_POST['git'];
    $objective= $_POST['objective'];

    session_start();
    $username=$_SESSION["username"];

    
    $photo_name= $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];
    $file_store = "image/".$photo_name;
    move_uploaded_file($photo_tmp,$file_store);
    

    $code = rand(10000000,99999999);
    $_SESSION['codes']=$code;

    $sql = "INSERT INTO personal (user,code,firstname,lastname,photo,emailid,number,address,linkdin,github,objective) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $stmt= $db->prepare($sql);
    $stmt->execute([$username,$code,$firstname,$lastname,$photo_name,$email,$phonenumber,$Address,$link1,$git,$objective]);

    if($stmt){
        include '../PHP/education.php';
    }

}

if(isset($_POST['back'])){
    include '../PHP/create.php';
}

/* education */

if(isset($_POST['next2'])){

    

    $cllg = "";
    $fromto = "";
    $about = "";

    $cllg1 = "";
    $fromto1 = "";
    $about1 = "";

    $cllg2 = "";
    $fromto2 = "";
    $about2 = "";

    $job = "";
    $dur = "";
    $aboutj = "";

    $job1 = "";
    $dur1= "";
    $aboutj1 = "";

    $job2 = "";
    $dur2 = "";
    $aboutj2 = "";
    

    $cllg = $_POST['cllg'];
    $fromto = $_POST['fromto'];
    $about = $_POST['about'];

    $cllg1 = $_POST['cllg1'];
    $fromto1 = $_POST['fromto1'];
    $about1 = $_POST['about1'];

    $cllg2 = $_POST['cllg2'];
    $fromto2 = $_POST['fromto2'];
    $about2 = $_POST['about2'];

    $job = $_POST['job'];
    $dur = $_POST['dur'];
    $aboutj = $_POST['aboutj'];

    $job1 = $_POST['job1'];
    $dur1 = $_POST['dur1'];
    $aboutj1 = $_POST['aboutj1'];

    $job2 = $_POST['job2'];
    $dur2 = $_POST['dur2'];
    $aboutj2 = $_POST['aboutj2'];

    error_reporting(0);
    session_start();
    $username=$_SESSION["username"];

    $codes=$_SESSION["codes"];
    

    $sql = "INSERT INTO education (user,code,cllg,fromto,about,cllg1,fromto1,about1,cllg2,fromto2,about2,job,dur,aboutj,job1,dur1,aboutj1,job2,dur2,aboutj2) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
    $stmt= $db->prepare($sql);
    $stmt->execute([$username,$codes,$cllg,$fromto,$about,$cllg1,$fromto1,$about1,$cllg2,$fromto2,$about2,$job,$dur,$aboutj,$job1,$dur1,$aboutj1,$job2,$dur2,$aboutj2]);

    if($stmt){
        include '../PHP/skills.php';
    }

}

/* skills */
if(isset($_POST['next3'])){

    $skill1= $_POST['skill1'];
    $skill2 = $_POST['skill2'];

    $ach1 = $_POST['ach1'];
    $ach2= $_POST['ach2'];

    $hob1 = $_POST['hob1'];
    $hob2 = $_POST['hob2'];
    
    error_reporting(0);
    session_start();
    $username=$_SESSION["username"];

    $codes=$_SESSION["codes"];

    


    $sql = "INSERT INTO skills (user,code,skill1, skill2, ach1,ach2,hob1,hob2) VALUES (?,?,?,?,?,?,?,?)";
    $stmt= $db->prepare($sql);
    $stmt->execute([$username,$codes,$skill1,$skill2,$ach1,$ach2,$hob1,$hob2]);

    if($stmt){
        include '../Html/templates.html';
    }

}



?>