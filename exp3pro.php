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

    <title>LOGISTIC REGRESSION</title>
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
ol.n {list-style-type: lower-roman;}
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
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i><strong>Procedure</strong></i>
</div>

                </div>

            </div>
		
            <div class="row">
                <div class="col-md-6">
			<div class="row">
                  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="exp3.php">AIM</a>
  <a href="exp3th.php">Theory</a>
  <a href="exp3ob.php">Objective</a>
  <a href="exp3pro.php">Procedure</a>
  <a href="exp3ill.php">Illustration</a>
  <a href="exp3sim.php">Simulation</a>
</div>
<p><h3>To implement the Logistic Regression using Python, we will use the same steps as we have done in previous topics of Regression. Below are the steps:</p>
<ul>
<li> Data Pre-processing step</li>
<li> Fitting Logistic Regression to the Training set
</li>
<li> Predicting the test result
</li> 
<li> Test accuracy of the result(Creation of Confusion matrix)</li>
<li>Visualizing the test set result.</li>
</ul>
<p>The decision for the value of the threshold value is majorly affected by the values of <u>precision and recall</u>. Ideally, we want both precision and recall to be 1, but this seldom is the case. In case of a Precision-Recall tradeoff we use the following arguments to decide upon the thresold:-
</p>
<ol>
<li><b>Low Precision/High Recall:</b> In applications where we want to reduce the number of false negatives without necessarily reducing the number false positives, we choose a decision value which has a low value of Precision or high value of Recall. </li>
<li>High Precision/Low Recall: In applications where we want to reduce the number of false positives without necessarily reducing the number false negatives, we choose a decision value which has a high value of Precision or low value of Recall. </li>
<p>Based on the number of categories, Logistic regression can be classified as:</p>
<ol class="n">
<li><b>binomial:</b> target variable can have only 2 possible types: “0” or “1” which may represent “win” vs “loss”, “pass” vs “fail”, “dead” vs “alive”, etc.</li>
<li><b>multinomial:</b> target variable can have 3 or more possible types which are not ordered(i.e. types have no quantitative significance) like “disease A” vs “disease B” vs “disease C”.</li>
<li><b>ordinal:</b> it deals with target variables with ordered categories. For example, a test score can be categorized as:“very poor”, “poor”, “good”, “very good”. Here, each category can be given a score like 0, 1, 2, 3.
</li>
</ol>
</ol>
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