<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stili.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" lang="javascript" src="js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

    <div class="container ">
        <a class="navbar-brand" href="index.php">
            <img src="immagini/logo.png" width="200" height="40" alt="log">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>


            <li class="nav-item active">
                <a class="nav-link"  href="aboutus.php">About us</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link " href="faq.php">FAQ</a>
            </li>
        </ul>



        <form method="get" action="search.php" class="form-inline">
                <input id="ricercaLibro" autocomplete="off" class="form-control mr-sm-2" type="search" name="cerca" placeholder="Cerca per nome, ISBN o autore" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Cerca</button>
        </form>

        <!-- se il login è stato fatto -->
        <ul class="navbar-nav ml-auto">

            <li>
                <?php
                session_start(); // faccio partire la sessione da qui
                if(isset($_SESSION['user_id']))
                    if(isset($_SESSION['admin_id'])):
                // verifico che sia settata
                    ?><a class="btn btn-outline-danger mr-3" href="controllore.php">Controlla</a>
                <?php else: ?>
                    <a class="btn btn-outline-danger mr-3" href="profilo.php">I miei Annunci</a>
                <?php endif; ?>
            </li>

            <li>
                <a class="btn btn-outline-success button-vendi mr-3" href="vendi.php">Vendi</a>
            </li>

            <li class="nav-item active">
                <?php
                if(isset($_SESSION['user_id'])):  // verifico che sia settata
                ?>
                    <a class="nav-link" href="logout.php">LOGOUT </a>
                <?php else: ?>
                    <a class="nav-link" href="registrati.php">REGISTRATI </a>
                <?php endif; ?>
            </li>

        </ul>


    </div>
</nav>
