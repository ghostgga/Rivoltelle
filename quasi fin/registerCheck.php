<?php 
session_start();
$Nome=$_POST['nome'];
$Password=$_POST['password'];

require 'configLog.php';
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_database);
if ($mysqli->connect_error) {
    exit('Errore di connessione ('.$mysqli->connect_errno.') '
    .$mysqli->connect_error);
}



$query = "INSERT INTO utenti (nome, password)
VALUES ('$Nome', '$Password')";
$mysqli->query($query);

header('Location: login.php');

$mysqli->close();


?>
