<?php
    
	include("db.php");

	if($_SERVER['REQUEST_METHOD']=="POST"){

		$uname=$_POST['username'];
		$pass=$_POST['password'];

		if(!empty($uname) && !empty($pass) && !is_numeric($uname)){
			$query="select * from regform where username='$uname' limit 1";
			$result=mysqli_query($con,$query);

			if($result){
				if($result && mysqli_num_rows($result)>0){
					$user_data=mysqli_fetch_assoc($result);

					if($user_data['password']==$pass){
						echo  "<script type='text/javascript'> alert('Welcome to najInd')</script>";
						header("location: index.html");
                        die;
					}else{
                        echo  "<script type='text/javascript'> alert('Wrong username or wrong password')</script>";
                    }
				}
			}
            else{
				echo  "<script type='text/javascript'> alert('Wrong username or wrong password')</script>";
			}
		}
		else{
			echo  "<script type='text/javascript'> alert('Please Enter Some Valid Information')</script>";
		}
	}
?>