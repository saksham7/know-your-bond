<?php
require('connect.php');
session_start();

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
//for setting session variable id

$n=$_SESSION['name'];
$q="SELECT * FROM `users` WHERE name='$n' ";
$r=mysqli_query($con,$q);
$arr=mysqli_fetch_array($r);
$_SESSION['id']=$arr['id'];
$m=$arr['id'];
//for updating row in db user_answers
$query="UPDATE `user_answers` set q1='$a1',q2='$a2',q3='$a3',q4='$a4',q5='$a5',q6='$a6',q7='$a7',q8='$a8',q9='$a9',q10='$a10' WHERE id=$m";
$result=mysqli_query($con,$query);
if($result)
{   $status=1;
	header('location:generate-link.php');
	
}
else
	header('location:index.php');


?>