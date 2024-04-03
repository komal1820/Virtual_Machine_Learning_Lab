<?php 
		include 'dbcon.php';
		header('location:home.php');
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		$email_search = " select * from registration where username='$username/' ";
		$query = mysqli_query($con,$email_search);
		$email_count = mysqli_num_rows($query);
		if($email_count){
			$email_pass = mysqli_fetch_assoc($query);
			$db_pass = $email_pass['password'];
			$pass_decode = password_verify($password,$db_pass);
			if($pass_decode){
				echo"login success";
			}
			else{
				echo"incorrect";
			}
		}
	
	?>