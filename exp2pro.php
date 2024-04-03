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
  <a href="exp2.php">AIM</a>
  <a href="exp2th.php">Theory</a>
  <a href="exp2ob.php">Objective</a>
  <a href="exp2pro.php">Procedure</a>
  <a href="exp2ill.php">Illustration</a>
  <a href="exp2sim.php">Simulation</a>
</div>
<p><h3><b>Decision Tree Terminologies</b></p>
<ul>
<li> <b>Root Node:</b> <br>Root node is from where the decision tree starts. It represents the entire dataset, which further gets divided into two or more homogeneous sets.</li>
<li> <b>Leaf Node:</b> <br>Leaf nodes are the final output node, and the tree cannot be segregated further after getting a leaf node.</li>
<li> <b>Splitting: </b> <br>Splitting is the process of dividing the decision node/root node into sub-nodes according to the given conditions.</li>
<li> <b>Branch/Sub Tree:</b> <br>A tree formed by splitting the tree</li>
<li> <b>Pruning:</b> <br>Pruning is the process of removing the unwanted branches from the tree.</li>
<li> <b>Parent/Child node:</b> <br>The root node of the tree is called the parent node, and other nodes are called the child nodes.</li>
</ul>
<p><b>How does the Decision Tree algorithm Work?</p></b>
<p>In a decision tree, for predicting the class of the given dataset, the algorithm starts from the root node of the tree. This algorithm compares the values of root attribute with the record (real dataset) attribute and, based on the comparison, follows the branch and jumps to the next node.</p>
<p>For the next node, the algorithm again compares the attribute value with the other sub-nodes and move further. It continues the process until it reaches the leaf node of the tree. The complete process can be better understood using the below algorithm:</p>
<ul>
<li><b>Step-1:</b> Begin the tree with the root node, says S, which contains the complete dataset.</li>
<li><b>Step-2: </b>Find the best attribute in the dataset using <b>Attribute Selection Measure (ASM)</b>.</li>
<li><b>Step-3:</b> Divide the S into subsets that contains possible values for the best attributes.</li>
<li><b>tep-4: </b>Generate the decision tree node, which contains the best attribute.</li>
<li><b>Step-5:</b> Recursively make new decision trees using the subsets of the dataset created in step -3. Continue this process until a stage is reached where you cannot further classify the nodes and called the final node as a leaf node.
</li>
</ul>
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