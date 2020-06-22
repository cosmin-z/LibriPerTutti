<?php

include 'connection.php';

$nome = $_POST['nome'];
$cognome=$_POST['cognome'];
$email=$_POST['email'];
$giorno = $_POST['Giorno'];
$mese=$_POST['Mese'];
$anno=$_POST['Anno'];
$password=password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO utenti (nome, cognome, giorno, mese, anno, email, password) VALUES ('$nome', '$cognome' , '$giorno','$mese','$anno','$email', '$password')";
$query = "SELECT id FROM utenti where email='$email' ";


if(mysqli_query($conn, $sql)){ //se l'inserimento va a buon fine

    $result = mysqli_query($conn, $query);
    $utente = mysqli_fetch_row($result); //la riga nel database in cui si trovano le informazioni di result

    session_start();
    $_SESSION['user_id'] = $utente[0]; // assegno a user_id l'id dell'utente nel db
    header("location: registrazioneCompletata.php");
} else{
    if(mysqli_errno($conn) == 1062) { //1062 errore di email duplicata
        header("location: registrati.php?error=emailduplicata");
    }

    echo "Si è verificato un errore imprevisto, contatta l'assistenza <br> $sql". mysqli_error($conn);
}

?>