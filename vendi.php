
<!--barra di ricerca-->
<?php
include 'header.php';
?>

<title>LPT &middot; Vendi</title>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 offset-2">
            <div class="margini-arrotondati  shadow celeste ">
                <div class="col-md-12 center p-5">
                    <?php
                    if(isset($_SESSION['user_id'])): //verifichiamo che sia stato effettuato il login
                        ?>

                    <!---------se il login è stato effettuato allora si procede alla vendita------------>
                    <!-- Inizio form -->
                    <form action="operazioneVendita.php" class="" method="POST" name="myForm" onsubmit="">
                        <!--titolo e genere-->
                        <div class="row">
                            <div class="col-md-12">
                                <label for="Titolo">&#42;Titolo</label>
                                <input type="text" name="Titolo" class="form-control" id="Titolo"
                                       placeholder="L'elegenza della matematica" autofocus required>
                            </div>


                        </div>
                        <!--Autore e codice ISBN-->
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="Autore">&#42;Autore</label>
                                <input type="text" class="form-control" name="Autore" id="Autore" placeholder="Simonetti" required>
                            </div>

                            <div class="col-md-6">
                                <label for="ISBN">&#42;codice ISBN</label>
                                <input type="text" class="form-control" name="ISBN" id="ISBN" placeholder="01230493495237" required>
                            </div>
                        </div>

                        <!--check box-->
                        <div class="row mt-4">
                            <div class=" col-md-6 ">
                                <label for="Autore"> Vuoi rendere visibile il tuo numero di telefono? </label>
                            </div>

                            <div class="col-md-3 ">
                                <input type="checkbox" name="numTel" onclick="mostraNumero()"> Sì
                            </div>
                        </div>


                        <div id="scelta"> <!-- valore invisibile che si mostra premendo sulla checkbox sì -->
                            <div class="row mt-4">
                                <div class=" col-md-5 offset-md-1 ">
                                    <label for="Titolo"><h3>Inserisci Numero</h3></label>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="telefono" id="telefono" placeholder="3800000000" >
                                </div>
                            </div>
                        </div>


                        <!--Prezzo-->
                        <div class="row mt-4">
                            <div class=" col-md-4 offset-md-2 mt-1 ">
                                <label class="mb-2" for="Autore"><h4>Prezzo</h4></label>
                            </div>

                            <div class="col-md-6">
                                <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control" name="prezzo" id="prezzo" placeholder="€12.00" required>
                            </div>
                        </div>

                        <!--Bottoni--finali-->

                        <div class="row mt-5">
                            <div class="col-md-12 text-center">
                                <button class="col-md-4 btn btn-col-1" name="loginButton" type="submit">
                                    Vendi!
                                </button>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-sm btn-col-2" name="loginButton" type="submit">
                                    Cancella tutto
                                </button>
                            </div>
                        </div>
                    </form>

                    <?php else: ?> <!-------se non si è stati loggati------->

                        <h4 style="text-align: center">Mi spiace ma sembra che tu non abbia effettuato il login!</h4>
                            <h4 class="mt-3" style="text-align: center">Non preoccuparti, clicca qui sotto!</h4>

                        <div class="col-md-12 text-center">
                            <a href="index.php" class=" mt-2 mb-5 col-md-4 btn btn-success">Login</a>
                        </div>

                        <h5 style="text-align: center">Se devi ancora registrarti, premi qui!</h5>
                        <div class="col-md-12 text-center">
                            <a href="registrati.php" class=" mb-5 col-md-4 btn btn btn-light">Registrati</a>
                        </div>
                    <?php endif; ?>
                </div>
                <img  src="immagini/vendi.png" width="100%" alt="vendita">
            </div>

        </div>
    </div>

</div>



<!-- Copyright -->
<?php
include 'footer.php';
?>
<!-- Copyright -->
