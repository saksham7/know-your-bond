<?php
require('connect.php');
session_start();
if(!isset($_SESSION['uid']))
{
	header('location:index.php');
}
else{
$uid=$_SESSION['uid'];
$fname=$_SESSION['fname'];
$user=$_SESSION['user'];
$a1=$_POST['q1'];
$a2=$_POST['q2'];
$a3=$_POST['q3'];
$a4=$_POST['q4'];
$a5=$_POST['q5'];
$a6=$_POST['q6'];
$a7=$_POST['q7'];
$a8=$_POST['q8'];
$a9=$_POST['q9'];
$a10=$_POST['q10'];
$q="SELECT * FROM `user_answers` where id='$uid'";
$r=mysqli_query($con,$q);
$arr=mysqli_fetch_array($r);
$c=0;
if($a1==$arr['q1'])
	$c++;
if($a2==$arr['q2'])
	$c++;
if($a3==$arr['q3'])
	$c++;
if($a4==$arr['q4'])
	$c++;
if($a5==$arr['q5'])
	$c++;
if($a6==$arr['q6'])
	$c++;
if($a7==$arr['q7'])
	$c++;
if($a8==$arr['q8'])
	$c++;
if($a9==$arr['q9'])
	$c++;
if($a10==$arr['q10'])
	$c++;

}
?>
<html>
<head>
<title>Result</title>
<?php include('header.php');?>
<style>
.fname{
		font-size:30px;
		color:red;
		font-family:palatino;
		text-transform:Capitalize;
		
	}
	.c1{
		text-align:center;
	}
	#names{
		font-size:30px;
		color:red;
		font-family:palatino;
		text-transform:Capitalize;
	}
	
</style>
</head>
<body>
<div class="c1"><h1>Hey, <?php echo $fname?> you scored </h1><h1><div class="fname"><?php echo $c?> out of 10 !</div></h1><Hr>
<h1><span id="names"><?php echo $user ?></span>, can now check you in his Leaderboard..<br>
Thank You for playing..</h1>
</div>
<?php
$sql="INSERT INTO `friend` (`fid`, `fname`, `score`, `uid`) VALUES (NULL, '$fname', '$c', '$uid')";
$result=mysqli_query($con,$sql);
session_destroy();
?>


