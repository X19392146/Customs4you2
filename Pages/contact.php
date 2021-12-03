<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="../CSS/contact.css" type="text/css" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
	<title>
	Contact Form
	</title>


<script> 
 
function validateform(){  
<!--first name validation-->	
var first_name=document.myform.first_name.value;  

  
if (first_name==null || first_name==""){  
  alert("First Name can't be blank");  
  return false;  
}

<!--Last name validation-->	
var last_name=document.myform.last_name.value;  

  
if (last_name==null || last_name==""){  
  alert("Last Name can't be blank");  
  return false;  
}

<!--Gender validation-->	
var Gender=document.myform.Gender.value;  

  
if (Gender==null || Gender==""){  
  alert("Gender can't be blank");  
  return false;  
}

<!--validation for email address -->
<!-- must have @ sign and dot in the correct place, the @ cannot be the first value-->
 var emailID = document.myform.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.myform.email.focus() ;
            return false;
         
         return( true );
}		 
<!--validation for country select menu-->
         if( document.myform.Country.value == "-1" ) {
            alert( "Please provide your country!" );
            return false;
         
         return( true );
}
<!--Commment validation-->	
var comment=document.myform.comment.value;  

  
if (comment==null || comment==""){  
  alert("Commment cant be blank ");   
  return false;  
}
}
  
</script>  	


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
				<li><a href="../pages/contactpage.html">&nbsp; Contact Us &nbsp;</a></li>
				<li><a href="../pages/privatepolicy.php">&nbsp; Private Policy &nbsp;</a></li>
				</div>	
			</div>
		</nav>	
		<!--All information on the page inside the main-body div-->
	<div id="main-body">
		
    <center>
	<h3>Contact us here!</h3>
		<br/>
  
  <!--action="insert.php"
   put this in form tag to insert into database   "-->
        <form  name="myform" method="post"  action="insert.php" action="abc.jsp" onsubmit="return validateform()">
              
            <p>
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName">
            </p>
  
                
            <p>
                <label for="lastName">Last Name:</label>
                <input type="text" name="last_name" id="lastName">
            </p>
  
                
           
              <p>  <label for="Gender">Gender:</label>	</p>
				<input type="radio" id="Gender" name="Gender" value="Female">
	 			 <label for="Female">Female</label><br>
	 			 <input type="radio" id="Gender" name="Gender" value="Male">
	  			<label for="Male">Male</label><br>
	 			 <input type="radio" id="Gender" name="Gender"value="noSay">
	 			 <label for="noSay">Prefer not to say</label>
           
  <br/> <br/>
                            
            <p>
                <label for="country">Country:</label>
				   <select name = "Country">
                     <option value = "-1" selected>[choose yours]</option>
                     <option value = "USA">USA</option>
                     <option value = "UK">UK</option>
                     <option value = "Ireland">Ireland</option>
                  </select>
            </p>

  
                           
            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailID">
            </p>
			
			<p>
                <label for="comment">Comment:</label>
				<textarea id="comment" name="comment" rows="4" cols="50">
				</textarea>
                <!--<input type="textarea" name="comment" id="comment">-->
            </p>
                
            <input type="submit" value="Submit">
        </form>
		<br/><br/><br/><br/>
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