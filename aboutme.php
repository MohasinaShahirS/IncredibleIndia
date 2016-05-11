<?php
session_start();
$name=$_POST['name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$nationality=$_POST['nationality'];
$state=$_POST['state'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$bio=$_POST['user_bio'];
$job=$_POST['user_job'];
$exp=$_POST['user_exp'];



if(5>4)
{

	$connect = mysqli_connect("localhost","root","","dive media");
	if(!$connect){
		echo"fail";

	}

	mysqli_query($connect,"INSERT INTO aboutme VALUES ('".$email."','".$name."','".$gender."','".$dob."','".$nationality."','".$state."','".$city."','".$bio."','".$job."','".$exp."');");
	if(mysqli_affected_rows($connect) > 0)
	{

		echo 'Success signup';
		header('Location: http://localhost/Dive Media/login.html');
	}
	else
	{
		echo 'login error';

	}

}
else
{
	header('Location: http://localhost/Dive Media/registration.html');
	echo 'Password Error. Please enter password correctly';
}
