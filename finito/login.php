<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
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
	<input type="password" name="password">
	</form>
   
  
  <div>
	<button type="submit" form="loginForm" value="Submit">Submit</button>
  </div>
  <br>
  <a href="index.php">
    <button type="button" class="btn btn-primary">Indietro</button>
  </a>
</div>
  <script src="script.js"></script>
</body>
</html>
