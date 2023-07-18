<?php
include("db.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$result = mysqli_query($con,"SELECT * FROM mhs");
	$c_rows = mysqli_num_rows($result);
	$sql="SELECT nim FROM mhs WHERE username='$username' and password='$password'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	$active=$row['active'];
	$count=mysqli_num_rows($result);
	if($count==1) {
		$_SESSION['login_user']=$username;
		header("location: index.php");
	}
}
?>
