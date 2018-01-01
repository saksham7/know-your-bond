<?php
require('connect.php');
$uid=$_GET['id'];
session_start();
$_SESSION['uid']=$uid;
?>
<html>
<head>
<title>Test Your Bond</title>
<?php include('header.php');?>
<style>
p1{
	font-size:25px;
}
.main{
		text-align:center;
		
	}
	.fname{
		font-size:30px;
		color:red;
		font-family:palatino;
		text-transform:Capitalize;
	}
	
</style>
</head>

<body>
<link rel="stylesheet"href="button.css"type="text/css">
<?php 
$sql = "SELECT * FROM `users` where id=$uid";
$r=mysqli_query($con,$sql);
$r1=mysqli_fetch_array($r);
$_SESSION['user']=$r1['name'];
?>
<div class="main">
<h1>Check out how much you know about <div class="fname"><?php echo $r1['name']?>...</div></h1><Hr>
<form action="fprocess.php" method="post">
<p1>Enter your Full Name:</p1><br><br>
<input type="text" name="fname" placeholder="Full Name"size="25" required><br><br><br>
<input type="submit" name="Submit">
</div>
</body>
</html>