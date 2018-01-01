<html>
<head>
<title>Share with friends</title>
<style>
.c1{
	font-family:Sans;
	letter-spacing:.2em;
}
h3{
	margin:auto;
	font-size:22px;
	font-family:Georgia;
.link{
	margin-left:25%;
	font-size:22px;
	font-family:sans;
	letter-spacin:.4;
	
}
img{
	margin-left:30%;
	margin-top:20px;
	border:1px solid hsl(160, 100%, 63%);
	
	
}
#a1{
	
	font-size:25px;
	font-family:sans;
	letter-spacing:.6;
}

</style>
<?php
include('header.php');
require('connect.php');
session_start();
if(!isset($_SESSION['name']))
{
	header('location:index.php');
}
$name=$_SESSION['name'];
$id=$_SESSION['id'];
?>
</head>
<body>

<div class="c1">
<h3><?php echo $name.','?>Your Quiz has been created successfully...<br><br>
Share the below link with your friends to know how much they know about you !!</h3>
</div><br>
<div class="link">
<?php echo "<a href='check.php?id={$id}'>check.php?id={$id}</a>"?>
</div>
<a id="a1"href="whatsapp://send?text=<?php echo 'check.php?id={$id}'?>"><img src="img/whatsapp.png"height="60"width="60">Share with Whatsapp</a>






</body>
</html>