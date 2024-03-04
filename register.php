<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <link rel="stylesheet" href="Login.css">
</head>
<body>
  <div class="container">
    <h1>Registrati</h1>
    <form action="registerCheck.php" method="post" id="registerForm">
	<label>Nome</label>
	<input type="text" name="nome">
	<label>Password</label>
	<input type="password" name="password">
	</form>
   <div>
  <a href="index.php">
    <button type="button" class="btn btn-primary">Indietro</button>
  </a>
</div>
	<button type="submit" form="registerForm" value="Submit">Submit</button>
  </div>
  <script src="script.js"></script>
</body>
</html>
