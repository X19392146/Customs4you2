<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Technology</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link href="../CSS/calculator.css" rel="stylesheet" type="text/css" />
	
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
		
		<center>
<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "customs4you";

//create connection
$connection = mysqli_connect($host, $user, $pass, $db_name);

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

//get results from database
$result = mysqli_query($connection,"SELECT * FROM websites WHERE category='technology'");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';   //get field name for header

    array_push($all_property, $property->name);  //save those to array
		
}

echo '</tr>'; //end tr tag 



//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
	
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items
	
    }

    echo '</tr>';
	
} 

echo "</table>";
?>
</center>


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
		<span><i class="fas fa-desktop"></i> &nbsp; <a href="#"> Contact Form</a> </span>
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



</body>
</html>