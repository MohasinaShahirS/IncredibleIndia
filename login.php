<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
if($email&&$password)
{
	$connect = mysql_connect("localhost","root","","T2");
	mysql_select_db("T2")or die("couldn't connect to data");


	$query=mysql_query("SELECT * FROM R2 WHERE email='".$email."' and password='".$password."'" );
	$numrows=mysql_num_rows($query);

	if($numrows!==0)
	{
		while($row= mysql_fetch_assoc($query))
		{
			$dbemail = $row['email'];
			$dbpassword = $row['password'];

		}
		if($email===$dbemail&&($password)==$dbpassword)
		{
			echo "You are logged in ! ";
			$_SESSION['email']=$email;
			header('Location: http://localhost/mosina/frames.html');
		}
		else
			echo "Your pass is incrrt";
	}
	else
	{
		die("That user doeasnt exist");
	}


}
else
{
	die("Please enter a valid email");
}
?>
