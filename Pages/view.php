<?php

    include "logic.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Forum</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

   	<link rel="stylesheet" href="../CSS/writing.css" >
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<header class="header">
		<nav class="navbar navbar-style">
			<div class="container">
				<div class="navbar-header">
				
			
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuicon">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				
				<a href="../Index.php"><img class="logo" src="../Images/Logo2.jpg"/></a>
				</div>
				<div class="collapse navbar-collapse" id="menuicon">
				<ul class="nav navbar-nav navbar-right">
				<li><a href="../Pages/About.php">&nbsp; About Us &nbsp; </a></li>
				<li><a href="../pages/login.php">&nbsp; Login &nbsp;</a></li>
				<li><a href="../pages/calculator.php">&nbsp; Calculate  &nbsp;</a></li>
				<li><a href="../pages/contact.php">&nbsp; Contact Us &nbsp;</a></li>
				<li><a href="../pages/privatepolicy.php">&nbsp; Private Policy &nbsp;</a></li>
				</ul>
				</div>	
			</div>
		</nav>	

   <div class="container mt-5">

        <?php foreach($query as $q){?>
            <div style= "background-color: #80bfff" class=" p-5 rounded-lg text-white text-center">
                <h1><?php echo $q['title'];?></h1>

                <div class="d-flex mt-2 justify-content-center align-items-center">
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                        
                    </form>
                </div>

            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
        <?php } ?>    

        <a href="writing.php" class="btn btn-outline-dark my-3" style="background-color: #80bfff">Go Home</a>
   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<!-- Footer -->

<div class = "footer">
	<div class = "footer-content">
		<div class= "footer-section about">
		<h1 class="logo-text"><span>Customs4You</span></h1>
		<span>
		Customs4You is a website that allows users to access 
		information on what companies cover customs fees when importing into Ireland from the UK.
		</span>
		<br/>
		<br/>
		<div class="socials">
		<a href="#"><i class="fab fa-facebook"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>
		
		</div>
		</div>
		<div class= "footer-section links">
		<h2>Quick Links</h2>
		<br/>
		<ul>
		<a href="../Index.php"><li>Home</li></a>
		<a href="../pages/login.php"><li>Login</li></a>
		<a href="../pages/login.php"><li>Signup</li></a>
		<a href="../pages/about.php"><li>About Us</li></a>
		<a href="../pages/privatepolicy.php"><li>T&Cs </li></a>
		<a href="../pages/calculator.php"><li>Customs Information</li></a>
		</ul>
		
		</div>
		<div class= "footer-section contact">
		<h2>Contact Us</h2>
		<br/>
		<span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
		<br/>
		<span><i class="fas fa-envelope"></i> &nbsp; info@C4You.com</span>
		<br/>
		<span><i class="fas fa-desktop"></i> &nbsp; <a href="../Pages/contact.php"> Contact Form</a> </span>
		<br/>
		<span><i class="fas fa-map-pin"></i> &nbsp;National College of Ireland, <br/>&nbsp &nbsp Mayor Square, <br/>&nbsp &nbsp Dublin 1.</a> </span>
		
		</div>
	</div>
	
	<div class = "footer-bottom">
	&copy; Customs4You | Designed In Ireland
	</div>

</div>



</body>

</html>