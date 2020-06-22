<?php

include 'connection.php';
$chiave = $_GET['chiave'];

$sql = "SELECT titolo, autore from libri where libri.titolo LIKE '%$chiave%' or libri.autore LIKE '%$chiave%'";
$result = mysqli_query($conn, $sql);

if($result) {
    $risultati = [];
    while ($ricerca = mysqli_fetch_array($result)) {
        array_push($risultati, $ricerca[0] . " | ". $ricerca[1]); //aggiungi un record all'array
    }
}

echo json_encode($risultati); //viene utilizzata per codificare un valore nel formato JSON

?>