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

    <title>Decision Tree</title>
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
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #edf6f9;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #118ab2;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #83c5be;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
</style>
</head>
<body style="background-color:#edf6f9">
    <?php include('includes/header.php');?>
	<?php if($_SESSION['login']!="")
{
 include('includes/menubar.php');
}
 ?>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
				<div class="page-head-line" id="main">
  <span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; open</span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i><strong>Simulation</strong></i>
</div>

                </div>

            </div>
		
            <div class="row">
                <div class="col-md-6">
			<div class="row">
                  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="exp2.php">AIM</a>
  <a href="exp2th.php">Theory</a>
  <a href="exp2ob.php">Objective</a>
  <a href="exp2pro.php">Procedure</a>
  <a href="exp2ill.php">Illustration</a>
  <a href="exp2sim.php">Simulation</a>
</div>
<p>
<a href="https://colab.research.google.com/drive/1XPqRAMYPK8ZX9ONBXboHstEK7ZYnVAf7?usp=sharing"><h2>ML02 Decision Tree Question</h2> </a>
<br>
<a href="https://colab.research.google.com/drive/1GKjfzi4CuCj6ZXCVbSbjcrV9EXMQ_kwB?usp=sharing"> <h2>ML02 Decision Tree Solution</h2></a>
</p>
<hr>
<p>
<b><h3>Datasets:</h3></b>
<br>
<a href="test_decisiontree.csv" download><h2>Data set sample 1</h2></a>
<br>
<a href="train_decisiontree.csv" download><h2>Data set sample 2</h2></a>
</p>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
 
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