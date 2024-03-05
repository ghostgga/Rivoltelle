<?php 
session_start();
if (!$_SESSION['autenticato'])
{
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>I miei promemoria</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="Privata.css">
</head>
<body >
<div class="hed">
  <h1>I miei promemoria</h1>
  <div>
    <a href="index.php">
      Torna alla homepage
    </a>
  </div>
  <div>
    <a href="addProm.php">
      Aggiungi un promemoria
    </a>
  </div>
</div>

<div class="allPromemoria">
<?php
function stampaNota($nota){
  if($nota['checkComp']){
            $checkbox = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check-square hidden' viewBox='0 0 16 16'>
                <path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z'/>
                <path d='M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z'/>
            </svg>";
        }
        else {
            $checkbox = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-square hidden' viewBox='0 0 16 16'>
                <path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z'/>
            </svg>";
        }
?>
<div class="card text-bg-success mb-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
      <?php
      echo $nota['titolo'];
      ?>
    </h5>
    <div >
      <div class="but">
      <?php
      echo "<a href='checkComp.php?id=" . $nota['id'] . "'> $checkbox Completato</a>"
      ?>
      </div>
    <div>
      <h6>data Creazione: 
        <?php
        echo $nota['dataCrea'];
        ?>
      </h6>
    </div>
    <div>
      <h6>data Modifica:
        <?php
        echo $nota['dataMod'];
        ?>
      </h6>
    </div>
    <div>
      <h6>Priorità:
        <?php
        echo $nota['priorita'];
        ?>
      </h6>
    </div>
	</div>
    <p class="card-text">
      <?php
      echo substr($nota['testo'],0,100).'...';
      ?>   
      </p> 
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $nota['id']; ?>">
    Focus
   </button>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $nota['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo $nota['id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel<?php echo $nota['id']; ?>">
          <?php
          echo $nota['titolo'];
          ?>       
      </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">       
      <div>
      <?php
      echo "<a href='checkComp.php?id=" . $nota['id'] . "'> $checkbox Completato</a>"
      ?>
      </div>
      <div>
      <h6>data Creazione: 
        <?php
        echo $nota['dataCrea'];
        ?>
      </h6>
    </div>
    <div>
      <h6>data Modifica: 
        <?php
        echo $nota['dataMod'];
        ?>
      </h6>
    </div>
    <div>
      <h6>Priorità: 
        <?php
        echo $nota['priorita'];
        ?>
      </h6>
    </div>
        <?php
        echo $nota['testo'];
        ?>   
      </div>
      <div class="modal-footer">
        <form method="post" 
          <?php echo "action='updateProm.php?id=" . $nota['id'] . "'";?>>
          <input type="hidden" name="id" value='<?php echo $nota['id'];?>'>
          <input type="hidden" name="titolo" value='<?php echo $nota["titolo"];?>'>
          <input type="hidden" name="priorita" value='<?php echo $nota["priorita"];?>'>
          <input type="hidden" name="testo" value='<?php echo $nota["testo"];?>'>
           <button type="submit" class="btn btn-primary" data-bs-target="#exampleModal<?php echo $nota['id']; ?>">Modifica
           </button>
        </form>
        <form method="post" 
          <?php echo "action='deleteProm.php?id=" . $nota['id'] . "'";?>>
          <input type="hidden" name="id" value='<?php echo $nota['id'];?>'>
           <button type="submit" class="btn btn-primary" data-bs-target="#exampleModal<?php echo $nota['id']; ?>">Elimina
           </button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
      </div>
    </div>
  </div>
</div>
  <?php 
}
?>
</div>

<?php 

require 'configLog.php';
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_database);
if ($mysqli->connect_error) {
    exit('Errore di connessione ('.$mysqli->connect_errno.') '
    .$mysqli->connect_error);

}

$idUtente = $_SESSION['IdUtente'];
$query = "SELECT * FROM promemoria WHERE IdUtente=$idUtente ORDER BY priorita DESC";
$result = $mysqli->query($query);

while($row = $result->fetch_assoc()) {
    stampaNota($row);
  }


?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
  

</script>
</body>
</html>
