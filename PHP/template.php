<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="../css/resume.css" media="all" />
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<link rel="stylesheet" href="../css/print.css" type="text/css" media="print" />

</head>
<body>
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

<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1><?php echo '<span >' . $personal['firstname'] . '</span>';?>   <?php echo '<span >' . $personal['lastname'] . '</span>';?></h1>
					<h2>Web Designer</h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						<h3><a><?php echo '<span >' . $personal['emailid'] . '</span>';?></a></h3>
						<h3><a><?php echo '<span >' . $personal['linkdin'] . '</span>';?></a></h3>
						<h3><a><?php echo '<span >' . $personal['github'] . '</span>';?></a></h3>
						<h3>+91 <?php echo '<span >' . $personal['number'] . '</span>';?></h3>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Profile</h2>
						</div>
						<div class="yui-u">
						<p class="enlarge" >
							<?php echo '<span >' . $personal['objective'] . '</span>';?>
						</p>
						</div>
					</div><!--// .yui-gf -->

					
					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<div class="yui-u">
							<h2><?php echo '<span >' . $education['about'] . '</span>';?></h2>
							<h3><?php echo '<span >' . $education['cllg'] . '</span>';?> <?php echo str_repeat('&nbsp;', 5); echo '<span >' . $education['fromto'] . '</span>';?></h3>
						</div>
						<div class="yui-u">
							<h2><?php echo '<span >' . $education['about1'] . '</span>';?></h2>
							<h3><?php echo '<span >' . $education['cllg1'] . '</span>';?>  <?php echo str_repeat('&nbsp;', 5); echo '<span >' . $education['fromto1'] . '</span>';?></h3>
						</div>
						
						
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
						<div class="yui-u">

								<div class="talent">
									<h2>Skills</h2><br>
									<p>	<?php echo '<span >' . $skills['skill1'] . '</span>';?></p><br>
									<p>	<?php echo '<span >' . $skills['skill2'] . '</span>';?></p>
								</div>

								<div class="talent">
									<h2>Achievements</h2><br>
									<p>	<?php echo '<span >' . $skills['ach1'] . '</span>';?></p><br>
									<p>	<?php echo '<span >' . $skills['ach2'] . '</span>';?></p>
								</div>

								<div class="talent">
									<h2>Hobbies</h2><br>
									<p>	<?php echo '<span >' . $skills['hob1'] . '</span>';?></p><br>
									<p>	<?php echo '<span >' . $skills['hob2'] . '</span>';?></p>

								</div>
						</div>
					</div><!--// .yui-gf -->


					<div class="yui-gf exp">
	
						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">

							<div class="job">
								<h2><?php echo '<span >' . $education['job'] . '</span>';?></h2>
								<h4><?php echo '<span >' . $education['dur'] . '</span>';?></h4>
								<p><?php echo '<span >' . $education['aboutj'] . '</span>';?></p>
							</div>

							<div class="job last">
								<h2><?php echo '<span >' . $education['job1'] . '</span>';?></h2>
								<h4><?php echo '<span >' . $education['dur1'] . '</span>';?></h4>
								<p><?php echo '<span >' . $education['aboutj1'] . '</span>';?></p>
							</div>

						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					

					


					


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p><?php echo '<span >' . $personal['firstname'] . '</span>';?> <?php echo '<span >' . $personal['lastname'] . '</span>';?> &mdash; <a><?php echo '<span >' . $personal['emailid'] . '</span>';?></a> &mdash; <?php echo '<span >' . $personal['number'] . '</span>';?></p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->

<div id="ignorePDF" class="noprint">
	<form action="../Html/templates.html"><input  class="back" type="submit" name="back" value="Back" ></form>
	
	<div><input  onclick="window.print()"  type="submit" name="next1" value="Download" ></div>

</div>


<script>


		
</script>

</body>
</html>

