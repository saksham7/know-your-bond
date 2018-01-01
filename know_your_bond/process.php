<?php
session_start();
require('connect.php');
$name=$_POST['name'];
$email=$_POST['email'];

$sql="SELECT * from `users` where name='$name'";
$a=mysqli_query($con,$sql);

if(mysqli_affected_rows($a)>0)
{
	$s=1;
	$_SESSION['s']=$s;
	header('location:index.php');
	
}
/*$result=mysqli_query($con,"SELECT name FROM users WHERE name='$name'");
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if(($result)==0)
{
	$s=1;
	$_SESSION['s']=$s;
	header('location:index.php');
	
}*/
else{
$_SESSION['name']=$name;
$_SESSION['email']=$email;
$q="INSERT INTO `users` (`id`, `name`, `email`) VALUES (NULL, '$name', '$email')";
$q1="INSERT INTO `user_answers` (`id`, `q1`, `q2`,`q3`,`q4`,`q5`,`q6`,`q7`,`q8`,`q9`,`q10`) VALUES (NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
$result1=mysqli_query($con,$q1);
$result=mysqli_query($con,$q);
if(($result AND $result1)==1)
{
	header('location:create.php');
	
}
else{
	session_destroy();
	header('location:index.php');
}

}

?>