<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/drafts.css">
    <link rel="stylesheet" href="../css/profile.css">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    

</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../Images-used/logo-removebg-preview.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">MyResume</span>
                    <span class="profession"> Builder</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">


                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../PHP/profile.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Profile</span>
                        </a>
                    </li>

                
                    <li class="nav-link">
                        <a href="../PHP/create.php">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Create Another</span>
                        </a>
                    </li>

                    

                    <li class="nav-link">
                        <a href="../PHP/creations.php">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">My creations </span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../PHP/drafts.php">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">My Drafts</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../html/main.html">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                
            </div>
        </div>

    </nav>


    <?php
        error_reporting(0);
        session_start();
        include_once("config.php");
        $username=$_SESSION["username"];

        $stmt = $db->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute([$username]); 
        $user = $stmt->fetch();

        $image = "<img src='../image/".$user["photo"]."'>";


    ?>

    <section class="home">
        <div class="text">My Profile</div>
        <div class="container d-flex justify-content-center align-items-center">
             
             <div class="card">

              <div class="upper">

                <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid">
                
              </div>

              <div class="user text-center">

                <div class="profile">
                    <a class="rounded-circle" width="100"><?php echo "$image"; ?></a>
                
                </div>

              </div>


              <div class="data text-center">

                <h4 class="mb-0"><?php echo '<span >' . $user['fullname'] . '</span>';?></h4>

                
                <h3 class="mb-0">Email : <?php echo '<span >' . $user['email'] . '</span>';?></h3>
                

                <button class="btn btn-primary btn-sm follow change">Change Password</button>


                
                
              </div>
               
             </div>

           </div>
    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

</script>

</body>
</html>







































