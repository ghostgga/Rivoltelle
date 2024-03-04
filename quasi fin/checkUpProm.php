<?php
session_start();
$Titolo = $_POST['titolo'];
$Priorita = $_POST['priorita'];
$Testo = $_POST['testo'];
$Id = $_POST['id'];

require 'configLog.php';
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_database);
if ($mysqli->connect_error) {
    exit('Errore di connessione ('.$mysqli->connect_errno.') '
    .$mysqli->connect_error);

}

$IdUtente = $_SESSION['IdUtente'];
$dataMod = date("Y-m-d");

$query = "UPDATE promemoria SET titolo='$Titolo', priorita='$Priorita', testo='$Testo', dataMod='$dataMod' WHERE id=$Id";

$mysqli->query($query);

header('Location: privata.php');

?>