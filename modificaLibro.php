<?php
include 'connection.php';

$id=$_POST['id_libro'];
$titolo=$_POST['titolo'];
$isbn=$_POST['isbn'];
$prezzo=$_POST['prezzo'];
$autore=$_POST['autore'];


session_start();
if(!isset($_SESSION['user_id'])) {
    header("location: index.php?error=nologin");
}

$user_id = $_SESSION['user_id'];


$sql = "UPDATE  libri SET titolo = '$titolo', ISBN='$isbn', prezzo='$prezzo' , autore='$autore' where id =$id"; //riporto le modifiche sul db

if(mysqli_query($conn, $sql)){
    if(isset($_SESSION['admin_id'])) header("location: controllore.php?stato=modificato");
    else header("location: profilo.php?stato=modificato");/////
    echo "modifica";
}

echo "Si è verificato un errore imprevisto, contatta l'assistenza <br> $sql". mysqli_error($conn);

?>
