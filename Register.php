<?php
    session_start();

	include("db.php");

	if($_SERVER['REQUEST_METHOD']=="POST"){

		$uname=$_POST['username'];
		$gmail=$_POST['mail'];
		$pass=$_POST['password'];

		if(!empty($uname) && !empty($pass) && !is_numeric($gmail)){
			$query="insert into regform(username,email,password) values('$uname','$gmail','$pass')";

			mysqli_query($con,$query);

			echo  "<script type='text/javascript'> alert('Registration was successful')</script>";
		}
		else{
			echo  "<script type='text/javascript'> alert('Please Enter Some Valid Information')</script>";
		}
	}
?>