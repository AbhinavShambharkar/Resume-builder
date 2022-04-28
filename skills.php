<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyResume Builder</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="skills.css">
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

                            
?>
<body>
    <nav>

    
        <div class="left">
            <ul>
                <img src="image (2).png" alt="">
                <li><a>MyResume Builder</a></li>
            </ul>
        </div>
        <div class="right">
            <ul>
                <li><a><?php echo '<span >' . $user['fullname'] . '</span>';?></a></li>
                <li><i id="options" role="button" onclick="showDiv1()" class="user-login"><img src="https://cdn-icons-png.flaticon.com/128/1177/1177568.png" alt=""></i></li>
            </ul>
        </div>
        
    </nav>
    <div class="figure">
        

    </div>
    <div class="progress">
        <div class="personal">
            <div class="one1">
                <span class="indicator"><img src="man.png" alt=""></span><br><br>
                <span class="title">Personal</span>
                

            </div>
        </div>
        <div class="personal">
            <div class="one1">
                <span class="indicator"><img src="education.png" alt=""></span><br><br>
                <span class="title">Education</span>
                
            </div>
        </div>
        <div class="personal">
            <div class="one1">
                <span class="indicator"><img src="https://cdn-icons-png.flaticon.com/128/3095/3095221.png" alt=""></span><br><br>
                <span class="title">Skills</span><br>
                
            </div>
        </div>
        
        <div class="personal">
            <div class="one">
                <span class="indicator"><img src="cv.png" alt=""></span><br><br>
                <span class="title">Templates</span>
                
            </div>
        </div>
        
    </div>
    
    <div class="box">
        <div class="top">
            <h3>Skills</h3><hr>
        </div>
        <form action="dataentry.php" method="post" enctype='multipart/form-data'>
            
            
            <div class="data3">
                <div class="inputbox">
                    <input type="text" placeholder="Description" name="skill1">
                </div>

            </div>
            <div class="data3">
                <div class="inputbox">
                    <input type="text" placeholder="Description" name="skill2" >
                </div>

            </div>
            
            <div class="top">
                <h2>Achievements</h2><hr>
            </div>

            
            <div class="data3">
                <div class="inputbox">
                    <input type="text" placeholder="Description" name="ach1">
                </div>

            </div>
            <div class="data3">
                <div class="inputbox">
                    <input type="text" placeholder="Description" name="ach2">
                </div>

            </div>
            

            <div class="top">
                <h2>Hobbies</h2><hr>
            </div>

            
            <div class="data3">
                <div class="inputbox">
                    <input type="text" placeholder="Description" name="hob1">
                </div>

            </div>
            <div class="data3">
                <div class="inputbox">
                    <input type="text" placeholder="Description" name="hob2">
                </div>

            </div>
            
            
            <div class="next">
                <input type="submit" value="Next" name="next3">
            </div>



        </form>
        
        
    </div>


    <div class="hint">
        <div class="content">
            <img src="https://cdn-icons-png.flaticon.com/128/1378/1378578.png" alt="">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                 when an unknown printer took a galley of type and scrambled it to make a type 
                 specimen book. </p>
            <a href="www.google.com">Related videos</a>

        </div>
        
            
    </div>

    
<div id="dropdown" class="dropdown">
    <div class="top">
    </div>
    <div class="content">
        <ul>
            <a href="profile.html"><li>Profile</li></a>
            <a><li>My Creations</li></a>
            <a href="drafts.html"><li>Drafts</li></a>
            <a><li>Help</li></a>
            <a href="main.html"><li>Logout</li></a>
        </ul>
    </div>
</div>


<div id="save" class="save">
    <h3>Draft Saved !!</h3>
</div>
<footer>
    <div class="footer-content">
        <h3>MyResume Builder</h3>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
            It has roots in a piece of classical Latin literature from 45 BC, making it over 
            2000 years old.</p>

        <ul class="socials">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
    </div>

    <div class="footer-bottom">
        <p>copyright &copy;2022 <a href="#">MyResume Builder</a>  </p>
     </div>
</footer>
    
<script>
    function showDiv1() {
            document.getElementById('dropdown').style.display = "block";
        }

        document.addEventListener('mouseup', function(e) {
        var container = document.getElementById('dropdown');
        if (!container.contains(e.target)) {
            container.style.display = 'none';
        }
        });
</script>
<script>
    setTimeout(() => {
    const box = document.getElementById('save');
    box.style.display = 'none';

    }, 5000); 

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>