
<!--barra di ricerca-->
<?php
    include 'header.php';
?>
<title>LPT &middot; Home</title>

<?php //nel caso qualcuno riuscisse a vendere nonostante non sia loggato viene mandato un messaggio di errore
    if(isset($_GET['error'])) {
        $err = $_GET['error'];
        if ($err == "nologin") {
            echo "<script> jQuery(document).ready(function(){ alert('Vendita negata! Assicurati di aver fatto il login');}); </script>";
        }
    }
?>


    <!-------- CAROSELLO----------->
    <div class="container">

        <div class="row">

            <div class="col-md-8 mt-5 mb-4 ">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner margini-arrotondati">
                            <div class="carousel-item active">
                                <img src="immagini/primafoto.jpg" class="d-block w-100" alt="primaFotoCarosello">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>I nostri libri</h5>
                                    <p>Una vasta gamma di libri usati in perfetto stato ti aspettano</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="immagini/secondafoto.jpg" class="d-block w-100" alt="secondaFotoCarosello">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Libro su misura</h5>
                                    <p>Lettore, universitario, liceale questo è il tuo posto!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="immagini/terzafoto.jpg" class="d-block w-100" alt="terzaFotoCarosello">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Prova a vedere</h5>
                                    <p>Dare una seconda chance a un libro è utile a tutti!</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
            </div>

            <!--------LOGIN-------->

            <div class="col-md-4 mt-5 ">
                <div>
                    <?php
                    if(!isset($_SESSION['user_id'])):  // verifico che sia settato l'utente e poi mostro o il login o il benvenuto
                        ?>
                            <div class="jumbotron pb-5 colore-primario margini-arrotondati">
                                    <h4>Fai subito il login!</h4>
                                            <form method="post" action="login.php"> <!-- faccio il login-->
                                                <div class="form-group">
                                                    <label for="Nome">Email</label>
                                                    <input type="email" class="form-control" name="email" id="Nome" aria-describedby="nome">
                                                    <small id="emailHelp" class="form-text text-muted"></small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Password">Password</label>
                                                    <input type="password"  name="password" class="form-control" id="Password">
                                                </div>
                                                <div class="form-group form-check">
                                                    <input name="ricordami" type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Ricordami</label>
                                                </div>

                                                <?php
                                                if(isset($_GET['msg'])) {
                                                    $err = $_GET['msg'];
                                                    if ($err == 'Nome utente o password errati') {
                                                        echo "<div class='errore-login mb-1'>$err!</div>";
                                                    }
                                                }
                                                ?>

                                                <button type="submit" class="btn btn-primary">Accedi</button>
                                            </form>
                                    </div>
                    <?php else: ?>

                        <div class="jumbotron pb-1 coloresfondo margini-arrotondati">
                        <img  src="immagini/bentornato.png" width="100%" height="100%" alt="bentornato">

                            <?php
                            include 'connection.php';
                            $user_id = $_SESSION['user_id'];
                            // scrivo la query da eseguire
                            $query = "SELECT nome, cognome FROM utenti WHERE id = $user_id";
                            // eseguo la query
                            $result = mysqli_query($conn, $query);
                            // trasformo la riga che mi restituisce il database in un array
                            $utente = mysqli_fetch_row($result);
                            ?>
                            <div class="policymargin">
                            <h6>Sei identificato/a come <?php echo $utente[0] . " ". $utente[1]?> </h6>
                            </div>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!--------- tabella annunci------------>

        <div class="row" >
            <div class="col-md-12" >
                <div class="panel panel-default">
                    <table class="table table-hover margini-arrotondati-tabella">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Venditore</th>
                            <th scope="col">Testo</th>
                            <th scope="col">data pubblicazione</th>
                            <th scope="col">Altre informazioni</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        include 'connection.php';
                        $query = "SELECT libri.titolo, libri.prezzo, libri.telefono, utenti.nome, utenti.cognome, utenti.email, utenti.id, libri.creato_il, libri.id, libri.autore from libri inner join utenti on libri.utente_id = utenti.id ORDER BY libri.id DESC LIMIT 35  ";
                        $result = mysqli_query($conn,$query);

                            while ($vendita = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>$vendita[4]</td>";
                                echo "<td>$vendita[0] (Di $vendita[9]) </td>";
                                echo "<td>$vendita[7]</td>";
                                /*richiamo la funzione che fa comparire le informazioni su quell'articolo */
                                echo "<td> 
                                    <button onclick=\"mostraInformazioni($vendita[8])\" type=\"button\" class=\"btn btn-sm btn-warning\">
                                            Apri 
                                    </button> 
                                    </td>";
                                echo "</tr>";
                                /* queste sono le informazioni che verrano mostrate cliccando sul bottone*/
                                echo "<tr id=\"id_$vendita[8]\" class=\"informazioni\">";
                                echo "<td><strong>Mail o telefono :</strong></td>";
                                if ($vendita[2] != "") {
                                    echo "<td>$vendita[2]</td>";
                                } else {
                                    echo "<td>$vendita[5]</td>";
                                }

                                echo "<td><strong>Prezzo:</strong></td>";
                                echo "<td>€$vendita[1]</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>


        <!-- Copyright -->
        <?php
        include 'footer.php';
        ?>
        <!-- Copyright -->
