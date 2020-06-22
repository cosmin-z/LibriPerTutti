<?php
session_start();
session_destroy(); // cancella l'id dentro user_id
header("location:index.php");
?>