
<!--barra di ricerca-->
<?php
include 'header.php';
?>

<title>LPT &middot; FAQ</title>

    <!--Immagine fqa-->
    <img   src="immagini/domandefrequentiimmagine.png" class="fqa mx-auto pt-3" alt="FAQ" >


    <!--FQA-->
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto pt-5">
                <div class="accordion" id="faqExample"> <!-- la classe accordion insieme a collapse nei vari bottoni, permette di espandere o contrarre i testi-->

                    <div class="card">
                        <div class="card-header p-2" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Chi siamo?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#faqExample">
                            <div class="card-body">
                                <b>Libri per tutti</b> è un'idea nata per aiutare tutti gli studenti di ogni grado per
                                riuscere a vedere i propri libri che talvolta rimagono
                                in qualche scatolone dimenticato per poi avere come unica destinazione il bidone della
                                carta.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header p-2" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Come funziona?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                            <div class="card-body">
                                E' semplice!
                                <br><b>Se vuoi acquistare</b> ti basterà registrarti e pubblicare il tuo annuncio e se
                                qualcuno sarà interessato ti contatterà.
                                <br><b>Se vuoi comprare</b> cercha il tuo libro nella tabella della home. Non preoccuparti
                                se non trovi il tuo testo, usa la barra di ricerca qui sopra in alto
                                e inserisci il titolo, autore, codice a barre o altri dati e noi cercheremo nel nostro
                                catalogo l'articolo!
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header p-2" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Voglio vedere un libro ma non voglio usare il mio numero di telefono?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                            <div class="card-body">
                                <b>Non proeccuparti</b> questo sito è come una bacheca universitaria, puoi mettere anche
                                solo la tua mail per sertiti più sicuro/a.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header p-2" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Posso acquistare in sicurezza?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                            <div class="card-body">
                                <b>Assolutamente</b> sarai tu a contattare il venditore e a mettervi d'accordo sulla
                                l'acquisto. Non ci sarà alcun vincolo e potrai in qualsiasi momento abbandonare
                                l'acquisto.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header p-2" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Posso vendere solo libri?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqExample">
                            <div class="card-body">
                                <b>Forse</b> il sito è nato con l'idea di vendere testi usati, ma se tu volessi vendere
                                libri di lettura o appunti presi a lezione nulla lo vieta!
                                Tuttavia non ti assicuriamo una vendita sicura del prodotto al 100%!
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header p-2" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Come posso cercare un libro?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqExample">
                            <div class="card-body">
                                <b>E' semplice</b> usa la barra di ricerca che vedi qui in alto! ti basta scrivere qualsiasi
                                info che possa identificare il tuo libro
                                e non ti mostreremo i risultati più pertinenti nel nostro catalogo!
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header p-2" id="headingSeven">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Come posso cancellare un mio annuncio?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#faqExample">
                            <div class="card-body">
                                <b>E' semplice</b> Una volta che hai fatto il login vedrai in alto a destra comparire un pulsante
                                con scritto "i miei annunci" ti basterà cliccare lì e troverai tutti i tuoi annunci.

                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header p-2" id="headingEight">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                   Ho sbagliato il titolo/autore/prezzo del Libro o voglio modificarli, come faccio?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#faqExample">
                            <div class="card-body">
                                <b>Non preoccuparti!</b> Fai il login, clicca in alto a destra su "i miei annunci" e vicino ad ogni
                                tua pubblicazione troverai una penna su uno sfondo arancione e vicino un secchielo su uno sfondo rosso.
                                Il primo ti permette di modificare i dati su quel libro, il secondo di cancellarlo.

                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <!--/row-->
    </div>
    <!--container-->




<!-- Copyright -->
<?php
include 'footer.php';
?>
<!-- Copyright -->

