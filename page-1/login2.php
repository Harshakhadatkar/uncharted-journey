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

			//read from database
			$query = "select * from tabl where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $Pass)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						$_SESSION['user_name'] = $user_data['user_name'];
						header("Location: proj2.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>USER LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #192041;">

	
	
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>
			<h2>LOGIN</h2>

			

			<label>User Name</label>
          <input type="varchar" name="user_name" placeholder="user_name"><br>

          <label>Password</label>
          <input type="password" name="password" placeholder="Password"><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>