<link rel="stylesheet" href="../css/template2.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


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
<div class="wrapper">
    <div class="intro">
      <div class="profile">
        <div class="photo">
          <img src="#">
        </div>
        <div class="bio">
          <h1 class="name"><?php echo '<span >' . $personal['firstname'] . '</span>';?>  <?php echo '<span >' . $personal['lastname'] . '</span>';?></h1>
          <p class="profession">Web Developer</p>
        </div>
      </div>
      <div class="intro-section about">
        <h1 class="title">about me</h1>
        <p class="paragraph"><?php echo '<span >' . $personal['objective'] . '</span>';?> </p>
      </div>
      <div class="intro-section contact">
        <h1 class="title">Contact</h1>
        <div class="info-section">
          <i class="fas fa-phone"></i>
          <span>(+91) <?php echo '<span >' . $personal['number'] . '</span>';?></span>
        </div>
        <div class="info-section">
          <i class="fas fa-map-marker-alt"></i>
          <span>Pune , Maharashtra</span>
        </div>
        <div class="info-section">
          <i class="fas fa-paper-plane"></i>
          <span><?php echo '<span >' . $personal['emailid'] . '</span>';?></span>
        </div>
        <div class="info-section link">
          <i class="fab fa-facebook"></i>
          <a target="_blank" rel="author" href="<?php echo '<span >' . $personal['linkdin'] . '</span>';?>">
            <span>linkedin</span>
          </a>
        </div>
      </div>
      <div class="intro-section follow">
        <h1 class="title">Follow</h1>
        <div class="info-section link">
          <i class="fab fa-github"></i>
          <a target="_blank" rel="author" href="https://github.com/AbhinavShambharkar">
            <span>Abhinav@github</span>
          </a>
        </div>
        <div class="info-section link">
          <i class="fab fa-facebook"></i>
          <a target="_blank" rel="author" href="">
            <span>Abhinav</span>
          </a>
        </div>
        <div class="info-section link">
          <i class="fab fa-gamepad"></i>
          <a target="_blank" rel="author" href="https://medium.com/狗奴工程師">
            <span>abhinav.shambharkar19@vit.edu</span>
          </a>
        </div>
      </div>
    </div>
    <div class="detail">
      <div class="detail-section edu">
        <div class="detail-title">
          <div class="title-icon">
            <i class="fas fa-user-graduate"></i>
          </div>
          <span>Eduation</span>
        </div>
        <div class="detail-content">
          <div class="timeline-block">
            <h1>B.Tech - Information Technology</h1>
            <p>Vishwakarma Institute Of Technology Pune</p>
            <time>2019 - 2023</time>
          </div>
          <div class="timeline-block">
            <h1>12th HSC</h1>
            <p>Lal Bahadur Shastri Highschool Bhandara.</p>
            <time>2018 - 2019</time>
          </div>
        </div>
      </div>
      <div class="detail-section pg-skill">
        <div class="detail-title">
          <div class="title-icon">
            <i class="fas fa-laptop-code"></i>
          </div>
          <span>Programming skills</span>
        </div>
        <div class="detail-content">
          <ul class="pg-list">
            <li>
              <span>HTML5</span>
              <div class="sb-skeleton">
                <div class="skillbar" style="--pgbar-length: 90%"></div>
              </div>
            </li>
            <li>
              <span>CSS3</span>
              <div class="sb-skeleton">
                <div class="skillbar" style="--pgbar-length: 75%"></div>
              </div>
            </li>
            <li>
              <span>Javascript</span>
              <div class="sb-skeleton">
                <div class="skillbar" style="--pgbar-length: 70%"></div>
              </div>
            </li>
            <li>
              <span>JQuery</span>
              <div class="sb-skeleton">
                <div class="skillbar" style="--pgbar-length: 50%"></div>
              </div>
            </li>
            
          </ul>
        </div>
      </div>
      <div class="detail-section tool-skill">
        <div class="detail-title">
          <div class="title-icon">
            <i class="fas fa-tools"></i>
          </div>
          <span>Developement Tools</span>
        </div>
        <div class="detail-content">
          <ul class="tool-list">
            <li>
              <svg viewbox="0 0 100 100">
                <circle cx="50" cy="50" r="45"></circle>
                <circle class="cbar" cx="50" cy="50" r="45" style="--percent: 0.6"></circle>
              </svg>
              <span class="tl-name">VS code </span>
              <span class="tl-exp">60%</span>
            </li>
            <li>
              <svg viewbox="0 0 100 100">
                <circle cx="50" cy="50" r="45"></circle>
                <circle class="cbar" cx="50" cy="50" r="45" style="--percent: 0.8"></circle>
              </svg>
              <span class="tl-name">Sublime</span>
              <span class="tl-exp">80%</span>
            </li>
            <li>
              <svg viewbox="0 0 100 100">
                <circle cx="50" cy="50" r="45"></circle>
                <circle class="cbar" cx="50" cy="50" r="45" style="--percent: 0.7"></circle>
              </svg>
              <span class="tl-name">Git</span>
              <span class="tl-exp">70%</span>
            </li>
            
          </ul>
        </div>
  
      </div>
      <div class="detail-section interests">
        <div class="detail-title">
          <div class="title-icon">
            <i class="fas fa-heart"></i>
          </div>
          <span>Interests</span>
        </div>
        <div class="detail-content">
          <div class="outer-frame">
            <ul class="favor-list">
              <li>
                <i class="fas fa-gamepad"></i>
                <span>Game</span>
              </li>
              <li>
                <i class="fas fa-paw"></i>
                <span>Pet</span>
              </li>
              <li>
                <i class="far fa-headphones-alt"></i>
                <span>Music</span>
              </li>
              <li>
                <i class="fas fa-book-spells"></i>
                <span>Self-learning</span>
              </li>
              <li>
                <i class="fas fa-user-edit"></i>
                <span>Blog</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>