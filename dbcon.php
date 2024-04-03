 <?php
$server = "localhost";
$user = "root";
$password = "";
$db = "onlinecourse";

//$con = mysqli_connect($server,$user,$password,$db);
$con = new mysqli($server, $user, $password,$db) or die("Connect failed: %s\n". $con -> error);

if($con){
	?>
		<script>
		alert("Connection Successful");	
		</script>
		<script>
		 		location.replace("labs.php");
		 	</script>
	<?php
}else{
	?>
		<script>
			alert("Connection UnSuccessful");
		</script>	
	<?php
}
?>