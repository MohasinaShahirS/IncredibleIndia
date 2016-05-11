<?php
session_start();
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpass=$_POST['conpassword'];
if($cpass==$password)
{
	$connect = mysqli_connect("localhost","root","","T2");
	mysqli_query($connect,"INSERT INTO R2 VALUES ('".$firstname."','".$lastname."','".$dob."','".$gender."','".$email."','".$password."','".$cpass."');");
	if(mysqli_affected_rows($connect) > 0)
	{
		echo 'Success signup';
		header('Location: http://localhost/mosina/login.html');
	}
	else
	{
		echo 'login error';
			header('Location: http://localhost/mosina/mform.html');
	}

}
else
{
	header('Location: http://localhost/mosina/mform.html');
	echo 'Password Error. Please enter password correctly';
}
