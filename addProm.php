<?php session_start(); ?>
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
    <h1>Aggiungi promemoria</h1>
    <form action="checkProm.php" method="post" id="addForm">
	<label>Titolo</label>
	<input type="text" name="titolo">
	<label>Testo</label>
	<input type="text" name="testo">
	<input type="hidden" name="idutente" value=<?php echo $_SESSION['IdUtente'];?> >
	</form>
  <div>
  <a href="privata.php">
    <button type="button" class="btn btn-primary">Indietro</button>
  </a>
</div>
	<button type="submit" form="addForm" value="Submit">Submit</button>
  </div>
</body>
</html>
