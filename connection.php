<?php
/* Locale*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "libridatabase";

/* Altervista
$servername = "localhost";
$username = "lpt";
$password = "";
$dbname = "my_lpt";*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("CONNESSIONE CON DB FALLITA: " . $conn->connect_error);
}
?>
