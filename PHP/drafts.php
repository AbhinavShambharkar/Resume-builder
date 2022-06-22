<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/creations.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    

</head>
<body id="body">
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
                            <span  class="text nav-text">Create Another</span>
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
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home" id="home">
    <section id="notification_section">
        <h1>Drafts Created</h1>
        <table class="notification-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date Created</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                        session_start();
                        include_once("config.php");
    
                        $username=$_SESSION["username"];

                        $stmt = $db->prepare("SELECT * FROM resume_created WHERE email=?");
                        $stmt->execute([$username]); 
                        
                        $user = $stmt->fetchAll();

                        $count = 0;

                        while($count < Sizeof($user))
                        {
                            
                            $mark1= '<img style="height:30px;width:30px;margin-top:10px;" src="https://cdn.imgbin.com/21/14/11/imgbin-computer-icons-editing-font-awesome-graphics-editor-advertising-GasA3YjEDg9X1DbvZwBNj5JYC.jpg" alt="">';
                            $mark2=  '<img style="height:30px;width:30px;margin-top:10px;" src="data:image/png;base64,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" alt="">';
                            
                            
                            
                            $id=$user[$count]['Unique_Number'];
                            $Date=$user[$count]['created'];
                            $message=$user[$count]['name'];
                            

                        echo 
                            '<tr>
                            <td>'.$id.'</td>
                                <td>'.$Date.'</td>
                                <td>'.$message.'</td>
                                <td>
                                    '.$mark1.'
                                </td>
                                <td>
                                    '.$mark2.'
                                </td>
            
                            </tr>';

                        $count++;   
                        }
                    ?>

                    
                    	
                    
                </tr>

            </tbody>
        </table>
    </section>
        
        
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

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

  

</body>
</html>













    
        
    

    


