<?php


session_start();

$con = mysqli_connect('eu-cdbr-west-01.cleardb.com', 'b8f74754068922', '81e51a35');

mysqli_select_db($con, 'heroku_a280f85f3fd531e');

$name = $_POST['email'];
$pass = $_POST['password'];

$s = " select * from usertable where email = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['email'] = $name;
	header('location:home.php');
}

else{
	header('location:login.php');
}
?>
