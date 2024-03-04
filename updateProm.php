<?php session_start(); 
$Id = $_POST['id'];
$Titolo = $_POST['titolo'];
$Testo = $_POST['testo'];

?>
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
    <h1>Modifica promemoria <?php echo $Id;?></h1>
    <form action="checkUpProm.php" method="post" id="upForm">
  <label>Titolo</label>
  <input type="text" name="titolo" value='<?php echo $Titolo;?>'>
  <label>Testo</label>
  <input type="textarea"  style="height: 50%;"name="testo" value='<?php echo $Testo;?>'>
  <input type="hidden" name="id" value=<?php echo $Id;?>>
  </form>
  <a href="privata.php">
    <button type="button" form="back">Indietro</button>
  </a>
  <button type="submit" form="upForm" value="Submit">Submit</button>
  </div>
</body>
</html>

