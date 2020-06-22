<?php

include 'connection.php';

$titolo=$_POST['Titolo'];;
$autore=$_POST['Autore'];
$isbn=$_POST['ISBN'];
$prezzo=$_POST['prezzo'];
$telefono=$_POST['telefono'];

session_start();
if(!isset($_SESSION['user_id'])) {
    header("location: index.php?error=nologin");
}

$user_id = $_SESSION['user_id'];

$data = date("d/m/Y");

$sql = "INSERT INTO libri (titolo, autore, ISBN, prezzo, telefono, utente_id, creato_il) VALUES ('$titolo', '$autore','$isbn','$prezzo','$telefono', $user_id, '$data')";

if(mysqli_query($conn, $sql)){
    header("location: index.php?libroinserito");/////
    echo "Libro inserito con successo";
}

echo "Si è verificato un errore imprevisto, contatta l'assistenza <br> $sql". mysqli_error($conn);


?>
