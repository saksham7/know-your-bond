<?php
session_start();
require('connect.php');
$uid=$_SESSION['uid'];
$fname=$_POST['fname'];
$_SESSION['fname']=$fname;


?>
<html>
<head>
<style>
.main{
		text-align:center;
		
	}
	.fname{
		font-size:30px;
		color:red;
		font-family:palatino;
		text-transform:Capitalize;
	}
	.ques{
	
	word-spacing:.1em;
	font-family:Segoe Script;
	font-size:20px;
	padding-left:35px;
	
}
.boxed{
	background-color:white;
	border:0px blue;
	
}
	
</style>
<title>Answer Questions</title>
<?php include('header.php');?>
</head>
<body>
<link rel="stylesheet"href="button.css"type="text/css">
<div class="main">
<h1>Check out how much you know about <div class="fname"><?php echo $_SESSION['user']?>...</div></h1><Hr>
</div>
<div class="ques">
<form action="check-ans.php" method="post">
Q1. What makes you feel afraid ?<br>
<div class="boxed">
<input type="radio" name="q1"value="1a"required >Dark<br>
<input type="radio" name="q1"value="1b"required>Losing your loved one's<br>
<input type="radio" name="q1"value="1c" required>High Places<br>
<input type="radio" name="q1"value="1d"required>Nothing<br>
</div><hr>
Q2. If you had to be on a reality TV show, which one would you choose ?<br>
<div class="boxed">
<input type="radio" name="q2"value="2a" required>MTV Dropouts Pvt. Ltd.<br>
<input type="radio" name="q2"value="2b"required>Big Boss<br>
<input type="radio" name="q2"value="2c" required>Indian Idol<br>
<input type="radio" name="q2"value="2d"required>Laughter Challenge<br>
</div><hr>
Q3. What is the thing you are regretful for doing in your life ?<br>
<div class="boxed">
<input type="radio" name="q3"value="3a" required>Love<br>
<input type="radio" name="q3"value="3b"required>College Selection<br>
<input type="radio" name="q3"value="3c" required>Alcohol<br>
<input type="radio" name="q3"value="3d"required>Betray<br>
</div><hr>
Q4. Which ice-cream flavor is your favorite one ?<br>
<div class="boxed">
<input type="radio" name="q4"value="4a" required>Butter Scotch<br>
<input type="radio" name="q4"value="4b"required>Vanilla<br>
<input type="radio" name="q4"value="4c"required >Chocholate<br>
<input type="radio" name="q4"value="4d"required>Strawberry<br>
</div><hr>
Q5. What do you like to cook on weekends ?<br>
<div class="boxed">
<input type="radio" name="q5"value="5a" required>Chicken or Mutton<br>
<input type="radio" name="q5"value="5b"required>Maggi<br>
<input type="radio" name="q5"value="5c" required>Macroni<br>
<input type="radio" name="q5"value="5d"required>Eggs<br>
</div><hr>
Q6. What is your idea of a perfect evening ?<br>
<div class="boxed">
<input type="radio" name="q6"value="6a" required>Candle Light Dinner<br>
<input type="radio" name="q6"value="6b"required>Sleeping<br>
<input type="radio" name="q6"value="6c" required>Party and Nightout<br>
<input type="radio" name="q6"value="6d"required>Movie with Friends<br>
</div><hr>
Q7. Where would you like to go with your soulmate ?<br>
<div class="boxed">
<input type="radio" name="q7"value="7a" required>Paris<br>
<input type="radio" name="q7"value="7b"required>Thailand<br>
<input type="radio" name="q7"value="7c" required>Singapore<br>
<input type="radio" name="q7"value="7d"required>Maldives<br>
</div><hr>
Q8. Which fast food restaurant do you prefer the most ?<br>
<div class="boxed">
<input type="radio" name="q8"value="8a" required>Pizza Hut<br>
<input type="radio" name="q8"value="8b"required>Dominos<br>
<input type="radio" name="q8"value="8c" required>McDonald&#039;s<br>
<input type="radio" name="q8"value="8d"required>KFC<br>
</div><hr>
Q9. What you drink the most?<br>
<div class="boxed">
<input type="radio" name="q9"value="9a" required>Tea<br>
<input type="radio" name="q9"value="9b"required>Coffee<br>
<input type="radio" name="q9"value="9c" required>Juice<br>
<input type="radio" name="q9"value="9d"required>Alcohol<br>
</div><hr>
Q10. Which songs you like to listen to ?<br>
<div class="boxed">
<input type="radio" name="q10"value="10a" required>Romantic Songs<br>
<input type="radio" name="q10"value="10b"required>Party Songs<br>
<input type="radio" name="q10"value="10c" required>Sufi,Classical<br>
<input type="radio" name="q10"value="10d"required>Pop,Rock<br>
</div><br>
<input type="submit"name="Submit">

</form>
</div>
</body>
</html>