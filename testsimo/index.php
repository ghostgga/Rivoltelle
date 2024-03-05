<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Promemoria</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<div class="hed">
	<h1>Keep your thoughts organised</h1>
</div>

<div class="hed">

	<a href="logout.php">Logout</a>
	<a href="login.php">Login</a>
	<a href="register.php">Register</a>
	<a href="privata.php">I miei promemoria</a>


	<img src="img chill.jpeg" alt="banner">

</div>

<div class="but">
	<a href="privata.php" class="button">Promemoria</a>
</div>

<?php 
session_start();

if(isset($_SESSION['autenticato']) and $_SESSION['autenticato'])
{
	echo "sei autenticato";
} else {
	echo "non sei";
}
?>



