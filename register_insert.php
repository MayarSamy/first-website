<?php
$fn = $_POST["firstName"];
$ln = $_POST["lastName"];
$un = $_POST["userName"];
$em = $_POST["email"];
$pw = $_POST["password"];
$age = $_POST["age"];
$mobile = $_POST["mobile"];

$con = mysqli_connect("localhost","root","") or die (" can not establish connection ");
mysqli_select_db($con,"aast2") or die (" can not select db ");

$statment1= "insert into  users (firstname,lastname,userName,email,password,age,mobile) 
	values('$fn','$ln','$un','$em','$pw','$age','$mobile')";
	
$flag =mysqli_query($con,$statment1);
if ($flag)
{
	include("home.php");
}
else
{
	die ("Error: ".mysqli_error($con));
}
?>