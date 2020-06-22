<?php

include 'connection.php';

// recupero il nome e la password inseriti dall'utente
$email = ($_POST['email']);
$password = $_POST['password'];



// verifico se devo eliminare gli slash inseriti automaticamente da PHP
if(get_magic_quotes_gpc()) {
    $email      = stripslashes($email);
    $password  = stripslashes($password);
}

// preparo ed invio la query
$query = "SELECT * FROM utenti WHERE email = '$email'";
$result = mysqli_query($conn, $query);
$utente = mysqli_fetch_row($result);

if (!$result) {
    die("Errore nella query $query: " . mysqli_error($conn)); //?
}

if(password_verify($password, $utente[7])) {
    session_start();
    $_SESSION['user_id'] = $utente[0];
    if($utente[8] == 1){
        $_SESSION['admin_id'] = $utente[0];
    }
    $messaggio = urlencode('Login avvenuto con successo');
    header("location: index.php?msg=$messaggio?");
} else {
    $messaggio = urlencode('Nome utente o password errati');
    header("location: index.php?msg=$messaggio");
}



// controllo l'esito
/*if (!$result) {
    die("Errore nella query $query: " . mysqli_error($conn));
}

$record = mysqli_fetch_array($result);

if(!$record) {
    $messaggio = urlencode('Nome utente o password errati');
    header("location: index.php?msg=$messaggio");
} else {
    session_start();
    $_SESSION['user_id'] = $record['id'];
    $messaggio = urlencode('Login avvenuto con successo');
    header("location: index.php?msg=$messaggio");
}*/
?>