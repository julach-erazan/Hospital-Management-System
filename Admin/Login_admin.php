<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login Admin</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	<body>
		
		<div class="container">
		  <h2>Login</h2>
		  <form method="post" action="Login_admin.php">
			<label for="username">
				<img src="user.png" width="30px" height="30px">
				<input type="text" id="username" name="username" placeholder="Username" required>
			</label>
			<br>
			
			<label for="password">
				<img src="lock.png" width="30px" height="30px">
				<input type="password" id="password" name="password" placeholder="Password" required>
			</label>
			<br>
			
			<input id="btn_login" type="submit" value="Login">
		  </form>
		</div>

		<?php
			// Check if form is submitted
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				// Get form input values
				$username = $_POST['username'];
				$password = $_POST['password'];

				// Check login condition
			if ($username === 'admin' && $password === '123') {
					// Successful login
				header("Location: http://localhost/Ass/Admin/index.php");
			} else {
				// Failed login
				echo 'Invalid username or password';
				}
			}
		?>

	</body>
</html>