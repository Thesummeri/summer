<html>
<head>
<title> college webpage</title>
<style>
body{
	font-family:Arial,sans-serif;
	margin:20px;
}
header{
	background-color:#a52a2a;
	color:#fff;
	padding:10px;
	text-align:center;
}
nav{
	background-color:#f1f1f1;
	padding:10px;
	text-align:center;
}
section{
	margin:20px 0;

}

footer{
	background-color:#333;
	color:#fff;
	text-align:center;
	padding:10px;
	position:fixed;
	bottom:0;
	width:100%;
	}
	</style>
	</head>
	<body>
	<header>
	<h1>BMS College For Women</h1>
	</header>
	<img src="bms.png" align="center" hspace=750 border=5 height=150 width=300 vspace=10>
	<nav>
	<a href="#">Home</a>
	<a href="#">courses</a>
	<a href="#">admissions</a>
	<a href="#">contact</a>
	</nav>

<?php
$collegeName = "BMSCW";
$email = "contact@mycollege.edu";
$phone = "+123-456-7890";
$courses = ["Computer Science", "Business Administration", "Commerce", "Arts"];
?>

<html>
<head>
    <title><?php echo $collegeName; ?> - Welcome</title>
</head>
<body>
    <h1 align="center">Welcome to <?php echo $collegeName; ?></h1>
    <h2 align="center">About Us</h2>
    <p align="center"><?php echo $collegeName; ?> Top quality education is provided here.</p>
    <h2 align="center">Courses Offered</h2>
	<p align="center"><br>
	Computer Science<br> 
    Business Administration<br> 
    Engineering<br> 
    Arts and Humanities<br>
    <h2 align="center">Contact Information</h2>
    <p align="center">Email: <?php echo $email; ?></p>
    <p align="center">Phone: <?php echo $phone; ?></p>
</body>
</html>