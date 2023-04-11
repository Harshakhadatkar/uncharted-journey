<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$pass = $_POST['password'];

		if(!empty($user_name) && !empty($pass))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into tabl (user_id,user_name,pass) values ('$user_id','$user_name','$pass')";

			mysqli_query($con, $query);

			header("Location: login2.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>USER SIGNUP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #192041;">
	<div id="box">

		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>
			<h2>Signup</h2>
			<label>User Name</label>
          <input type="varchar" name="user_name" placeholder="user_name"><br>

          <label>Password</label>
          <input type="password" name="password" placeholder="Password"><br>


			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login2.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>