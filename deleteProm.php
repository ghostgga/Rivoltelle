<?php 
session_start();
$Id = $_POST['id'];

require 'configLog.php';
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_database);
if ($mysqli->connect_error) {
    exit('Errore di connessione ('.$mysqli->connect_errno.') '
    .$mysqli->connect_error);
}

$query = "DELETE FROM promemoria WHERE id=$Id";

$mysqli->query($query);

header('Location: privata.php');

$mysqli->close();


?>
