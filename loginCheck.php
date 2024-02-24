<?php 
session_start();
$nome=$_POST['nome'];
$password=$_POST['password'];

echo $nome;
echo $password;
echo '<br>';

require 'configLog.php';
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_database);
if ($mysqli->connect_error) {
    exit('Errore di connessione ('.$mysqli->connect_errno.') '
    .$mysqli->connect_error);

}
$query = "SELECT * FROM utenti where nome='$nome' AND password='$password'";
$result = $mysqli->query($query);

if ($result->num_rows ==1){
	$_SESSION['autenticato']=true;
	header('Location: index.php');

}
else
{
	header('Location: login.php');
}
$mysqli->close();


?>
