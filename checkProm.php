<?php 
session_start();
$Titolo=$_POST['titolo'];
$Priorita=$_POST['priorita'];
$Testo=$_POST['testo'];
$IdUtente=$_POST['idutente'];

require 'configLog.php';
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_database);
if ($mysqli->connect_error) {
    exit('Errore di connessione ('.$mysqli->connect_errno.') '
    .$mysqli->connect_error);
}

$dataCrea = date("Y-m-d");
$dataMod = date("Y-m-d");


$query = "INSERT INTO promemoria (priorita, titolo, dataCrea, dataMod, checkComp, testo, IdUtente)
	VALUES ('$Priorita', '$Titolo', '$dataCrea', '$dataMod', '0', '$Testo', '$IdUtente')";
$mysqli->query($query);

header('Location: privata.php');

$mysqli->close();


?>
