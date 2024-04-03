<?php 
	session_start();
	header('location:login.php');
		include 'dbcon.php';

			$username = $_POST['username'];
			$email = $_POST['email'];
			$phno = $_POST['phno'];
			$dob = $_POST['dob'];
			$address = $_POST['address'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];

			$pass = password_hash($password, PASSWORD_BCRYPT);
			$cpass= password_hash($cpassword, PASSWORD_BCRYPT);

			$emailquery = " select * from registration where email='$email' ";
			$query = mysqli_query($con,$emailquery);

			$emailcount = mysqli_num_rows($query);

			if($emailcount>0){
				?>
							<script>
								alert("email already exists");
							</script>
						<?php
				
			}
			else{
				if($password === $cpassword){
					$insertquery = "INSERT INTO registration(username,email,phnno,dob,address,password,cpassword) VALUES ('$username','$email','$phno','$dob','$address','$pass','$cpass')";

					$iquery = mysqli_query($con,$insertquery);
					if($iquery){
						?>
							<script>
								alert("Inserted Successful");
							</script>
						<?php

					}else{
						?>
							<script>
								alert("Inserted UnSuccessful");
							</script>	
						<?php
					}
				}else{
					?>
						<script>
						alert ("password are not matching");
						</script>
					<?php
				}
			}
		
	
	?>