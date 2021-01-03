<?php
$un=$_POST["userName"];
$pw=md5($_POST["password"]);
$pw2=$_POST["password"];

	$con = mysqli_connect("localhost","root","") or die (" can not establish connection ");
	mysqli_select_db($con,"aast2") or die (" can not select db ");
	
	$statment1 = "SELECT * from users where username = '$un' ";
	$result1 = mysqli_query($con,$statment1);
	if( mysqli_affected_rows($con) > 0){
		$row = mysqli_fetch_array($result1);
		$answer=$row ["password"];
		if( $pw2 == $answer ) {
			session_start();
			$_SESSION['logged_user'] = $un;
			header('Location: sign in student.php');
		}
		else {
			header('Location: login_failed.php');
		}
	}

?>