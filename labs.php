<?php
session_start();
error_reporting(0);
include("includes/config.php");

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Your Labs</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
<style>
body {
	background-image: url("17973908.jpg");
	 background-size: 1700px 800px;
	 
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #006d77;
   color: #fff;
   text-align: left;
}
.rcorners3 {
  border-radius: 15px 50px;
  background: #fff;
  padding: 20px; 
  width: 800px;
  height: 95px; 
} 

</style>
<section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                             <li><a href="enroll.php">Courses </a></li>
							  <li><a href="labs.php">Labs  </a></li>
							  <li><a href="enroll-history.php">Enroll History  </a></li>
                              <li><a href="my-profile.php">My Profile</a></li>
                               <li><a href="change-password.php">Change Password</a></li>
                            <li><a href="logout.php">Logout</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
</head>
<body style="background-color:#edf6f9">
    <?php include('includes/header.php');?>
	<?php if($_SESSION['login']!="")
{
 include('includes/menubar.php');
}
 ?>
    <!-- MENU SECTION END-->

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Your Labs!</h4>

                </div>

            </div>
		
            <div class="row">
                <div class="col-md-6">
				<div class="rcorners3">
				<a href="exp1.php"><h3>Linear Regression</h3></a>
				</div>
				<br>
				<br>
				<div class="rcorners3">
				<a href="exp2.php"><h3>Desicion Tree</h3></a>
				</div>
				<br>
				<br>
				<div class="rcorners3">
				<a href="exp3.php"><h3>Logistic Regression</h3></a>
				
				</div>
			<div class="row">


                  
 
</div>
				   
                </div>
                <div class="col-md-6">
                   

            </div>
        </div>
    </div>
    <div class="footer">
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&copy; Virtual Labs | By : TE-B</p>
</div>

</body>
</html>