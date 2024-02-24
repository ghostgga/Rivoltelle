<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="Login.css">
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form action="loginCheck.php" method="post" id="loginForm">
	<label>Nome</label>
	<input type="text" name="nome">
	<label>Password</label>
	<input type="text" name="password">
	</form>
	<button type="submit" form="loginForm" value="Submit">Submit</button>
  </div>
  <script src="script.js"></script>
</body>
</html>
