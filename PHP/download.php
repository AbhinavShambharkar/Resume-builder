<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="download.css">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    

</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo-removebg-preview.png" alt="">
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
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Profile</span>
                        </a>
                    </li>

                    

                    

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Create Another</span>
                        </a>
                    </li>

                    

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">My creations </span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">My creations </span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Download</div>


        <div class="box">
            
            <div class="created">
                <img src="https://www.goodcv.com/images/cv/screenshots/thumbs/en/outstanding_10.png?v=1.0.1" alt="">
            </div>

            <div class="download">
                <h4>Contrary to popular belief, Lorem Ipsum is not </h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
                It has roots in a piece of classical Latin literature from 45 BC, making it over 
                2000 years old</p>
                <div class="options">
                    <i id="options" role="button" onclick="showDiv()" class="user-login"><img src="https://cdn-icons-png.flaticon.com/128/1828/1828911.png" alt=""></i>
            
                    <input type="text" placeholder="Enter File name">
                    <input href="education.php" type="submit" value="Download" >
                    
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
