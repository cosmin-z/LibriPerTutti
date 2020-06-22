<?php
include 'connection.php';

$id=$_POST['id_libro'];

session_start();
if(!isset($_SESSION['user_id'])) {
    header("location: index.php?error=nologin");
}


$user_id = $_SESSION['user_id'];

//se cancella l'admin
$query = "SELECT amministratore FROM utenti WHERE id=$user_id";
$result = mysqli_query($conn, $query);
$utente = mysqli_fetch_row($result);

//per evitare che qualcuno manometta la cancellazione
$sql = "SELECT utente_id FROM libri WHERE id=$id";
$val = mysqli_query($conn, $sql);
$valore = mysqli_fetch_row($val);

//se non sono amministratore
if($utente[0]!=1){
    if($user_id != $valore[0]){ // se il libro non è mio
        header("location: profilo.php?error=noaccess");
        die();
    }
}

//cancella libro
$sql = "DELETE FROM libri WHERE id=$id";


if(mysqli_query($conn, $sql)){
    if($utente[0] == 1){
        header("location: controllore.php?stato=eliminato");
    }
    else
    header("location: profilo.php?stato=eliminato");
    echo "modifica";
}

echo "Si è verificato un errore imprevisto, contatta l'assistenza <br> $sql". mysqli_error($conn);

?>
