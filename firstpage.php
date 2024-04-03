<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
}

.parallax {
  /* The image used */
  background-image: url('homeimage.jpg');
 


  /* Full height */
  height: 100%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax1 {
  /* The image used */
   background-image: url('pexels-alex-knight-2599244.jpg');
 


  /* Full height */
  height: 100%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax2 {
  /* The image used */
   background-image: url('arnold-francisca-f77Bh3inUpE-unsplash.jpg');
 


  /* Full height */
  height: 100%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.container {
  position: absolute;
  margin: 40px;
  width: auto;
}

/* The navbar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Navbar links */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 18px 20px;
  text-decoration: none;
  font-size: 25px;
  font-family:sans-serif;
}

.topnav a:hover {
  background-color: #83c5be;
  color: black;
}
.topnav-right {
  float: right;
}

@font-face {
  font-family: "ubuntu";
  font-style: italic;
  font-weight: 300;
  src: local("Lato Light Italic"), local("Lato-LightItalic"), url(https://fonts.gstatic.com/s/ubuntucondensed/v8/u-4k0rCzjgs5J7oXnJcM_0kACGMtT-Dfqw.woff2) format("woff2");
}
a {
  text-decoration: none;
  color: #f48c06;
}

.wrapper {
  text-align: center;
}
.wrapper h1 {
  color: #fff;
  font-size: 92px;
  font-family: "ubuntu";
  text-transform: uppercase;
  font-weight: 700;
  font-family: "Josefin Sans", sans-serif;
  background: linear-gradient(to right, #e72a3a 10%, #fff 50%, #5bdaff 60%);
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 1.5s linear infinite;
  display: inline-block;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
.Iam {
  padding: 2em 5em;
  font: normal 40px/50px Montserrat, sans-serif;
  color: #999;
}
.Iam p {
  height: 50px;
  float: left;
  margin-right: 0.3em;
}
.Iam b {
  float: left;
  overflow: hidden;
  position: relative;
  height: 50px;
  top: 40px;
}
.Iam .innerIam {
  display: inline-block;
  color: #e74c3c;
  position: relative;
  white-space: nowrap;
  top: 0;
  left: 0;

  /*animation*/
  -webkit-animation: move 5s;
  -moz-animation: move 5s;
  -ms-animation: move 5s;
  -o-animation: move 5s;
  animation: move 5s;
  /*animation-iteration-count*/
  -webkit-animation-iteration-count: infinite;
  -moz-animation-iteration-count: infinite;
  -ms-animation-iteration-count: infinite;
  -o-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  /*animation-delay*/
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  -ms-animation-delay: 1s;
  -o-animation-delay: 1s;
  animation-delay: 1s;
}
@keyframes move {
  0% {
    top: 0px;
  }
  20% {
    top: -50px;
  }
  40% {
    top: -100px;
  }
  60% {
    top: -150px;
  }
  80% {
    top: -200px;
  }
}

@-webkit-keyframes move {
  0% {
    top: 0px;
  }
  20% {
    top: -50px;
  }
  40% {
    top: -100px;
  }
  60% {
    top: -150px;
  }
  80% {
    top: -200px;
  }
}
@-moz-keyframes move {
  0% {
    top: 0px;
  }
  20% {
    top: -50px;
  }
  40% {
    top: -100px;
  }
  60% {
    top: -150px;
  }
  80% {
    top: -200px;
  }
}
@-o-keyframes move {
  0% {
    top: 0px;
  }
  20% {
    top: -50px;
  }
  40% {
    top: -100px;
  }
  60% {
    top: -150px;
  }
  80% {
    top: -200px;
  }
}
@keyframes move {
  0% {
    top: 0px;
  }
  20% {
    top: -50px;
  }
  40% {
    top: -100px;
  }
  60% {
    top: -150px;
  }
  80% {
    top: -200px;
  }
} 

h4 {
  text-align: center;
  font-family: monospace;
  cursor: pointer;
  color: #fff;
  position: fixed;
  bottom: 5px;
  right: 5px;
  height: 10px;
}

.wraper {
  margin-top: 5%;
  position: absolute;
  top: 30%;
  left: 75%;
  right: 0%;
  width: 30%;
  transform: translate(-50%, -50%);
  padding: 12%;
}
.animated {
            background-repeat: no-repeat;
            padding-top:90px;
            margin-bottom:86px;
			background-position: right top;
			width: 950px;
			
            -webkit-animation-duration: 3s;
            animation-duration: 3s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
         }
         
         @keyframes flash {
            0%, 50%, 100% {
               opacity: 1;
            }
            25%, 75% {
               opacity: 0;
            }
         }
         
         .flash {
            animation-name: flash;
         }
.text-animation{
list-style: none;
position: absolute;
left: 68%;
top: 50%;
transform: translateX(-50%) translateY(-50%);
}
.text-animation li{
  display: inline-block;
  margin-right: 5px;
  font-family: sans-serif;
  font-weight: 300;
  font-size: 5.6em;
  color: #272640;
  opacity: 1;
  transition: all 3.5s ease;
}
.text-animation li:last-child{
  margin-right: 0;
}
.text-animation.hidden{
  opacity: 0;
}
.text-animation.hidden li:nth-child(1) {transform: translateX(-200px) translateY(-200px);}
.text-animation.hidden li:nth-child(2) {transform: translateX(20px) translateY(100px);}
.text-animation.hidden li:nth-child(3) {transform: translateX(-150px) translateY(-80px);}
.text-animation.hidden li:nth-child(4) {transform: translateX(10px) translateY(-200px);}
.text-animation.hidden li:nth-child(5) {transform: translateX(-300px) translateY(200px);}
.text-animation.hidden li:nth-child(6) {transform: translateX(20px) translateY(-20px);}
.text-animation.hidden li:nth-child(7) {transform: translateX(-300px) translateY(-20px);}
.text-animation.hidden li:nth-child(8) {transform: translateX(200px) translateY(-150px);}
.text-animation.hidden li:nth-child(9) {transform: translateX(-250px) translateY(-90px);}
.text-animation.hidden li:nth-child(10) {transform: translateX(20px) translateY(-80px);}
.text-animation.hidden li:nth-child(11) {transform: translateX(-200px) translateY(-60px);}
.text-animation.hidden li:nth-child(12) {transform: translateX(-200px) translateY(-60px);}
</style>
</head>
<body style="background-color:#edf6f9">
<div class="container">
    <div class="topnav">
	<div class="topnav-right">
      <a href="#home">Home</a>
      <a href="about1.php">About Us</a>
      <a href="explore.php">Explore Labs</a>
      <a href="login.php">Log In</a>
    </div>
  </div>
 </div>
<div class="parallax">
<div class="wraper" onClick="window.location.href=window.location.href">

</div>
 <script> 
$("html,h4,.wraper").click(function () {
  //location.reload();
  $(".wraper").load(" .wraper > *");
});
</script>
<div id = "animated-example" class = "animated flash"><img src="vlablogo.jpeg.png" height="150" style="float: right"></div>
<ul class="text-animation hidden">
<b>

    <li>V</li>
    <li>I</li>
    <li>R</li>
    <li>T</li>
    <li>U</li>
    <li>A</li>
	<li>L</li>
	<li> </li>
	<li>L</li>
	<li>A</li>
	<li>B</li>
	<li>S</li>
	</b>
  </ul>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

  </script>

  <script type="text/javascript">
    $(function() {
      setTimeout(function() {
        $('.text-animation').removeClass('hidden');
      }, 500);
    })();
  </script>

</div>

<h1><center>Welcome to the Virtual Labs.</center></h1>
<div class="parallax1">
<div class="Iam">

    <p>This is</p>
    <b>
      <div class="innerIam">
        Virtual Lab<br />
        A Machine Learning Source<br />
        Your way to learn<br />
        how I learn stuff<br />
        where you will understand
      </div>
    </b>

  </div>
  </div>
  <div class="wrapper">
	<h1><center>code compute compile</center></h1>
</div>

<div class="parallax2"></div>
</body>
</html>
