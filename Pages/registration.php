<?php

session_start();


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registration');

$name = $_POST['email'];
$pass = $_POST['password'];

$s = " select * from usertable where email = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" Email Already Taken";
}

else{
	$reg = "insert into usertable(email, password) values ('$name' , '$pass')";
	mysqli_query($con, $reg);
	echo" Registration Successful";
}
?>