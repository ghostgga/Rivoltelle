<h1>Keep your thoughts organised</h1>
<a href="login.php">Login</a>
<br>
<a href="privata.php">I miei promemoria</a>
<a href="logout.php">Logout</a>

<?php 
session_start();

if(isset($_SESSION['autenticato']) and $_SESSION['autenticato'])
{
	echo "sei autenticato";
} else {
	echo "non sei";
}
?>



