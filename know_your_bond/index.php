<html>
<head>
<title>Test your Bond</title>
<style>

p1{
	font-size:25px;
}
	.main{
		text-align:center;
		
	}
	
	
</style>
<?php include ("header.php");

session_start();
?>
</head>
<body>
<?php
if(isset($_SESSION['s']))
{
	echo 'Sorry this name is already registered, Try using some other name';
	
}
?>
<link rel="stylesheet"href="button.css"type="text/css">
<br>
<br>
<br>
<div class="main">
<h1>Which of your friends know you the most?</h1><Hr>
<form action="process.php" method="post">
<p1>Enter your Full Name:</p1><br><br>
<input type="text" name="name" placeholder="Full Name"size="25" required><br><br>
<p1> Enter your Email ID:</p1><br><br>
<input type="email" name="email" placeholder="Email ID"size="25" required><br><br>


</div>
<input type="submit" name="submit">
</body>
</html>