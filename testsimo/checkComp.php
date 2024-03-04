<?php
session_start();

require 'configLog.php';
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_database);
if ($mysqli->connect_error) {
    exit('Errore di connessione ('.$mysqli->connect_errno.') '
    .$mysqli->connect_error);

}

$IdUtente = $_SESSION['IdUtente'];
$id = $_GET['id'];

$query = "UPDATE promemoria SET checkComp = NOT checkComp WHERE id=$id AND IdUtente=$IdUtente";
echo $query;
$mysqli->query($query);

header('Location: privata.php');
?>