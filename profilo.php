
<?php
include 'header.php';
?>
<title>LPT &middot; Profilo</title>
<div class="container">
    <div class="row mt-5">
                <div class="col-md-6 p-5">
                    <?php
                    include 'connection.php';
                    $user_id = $_SESSION['user_id'];
                    $query = "SELECT libri.titolo ,libri.creato_il, libri.prezzo, libri.id, libri.isbn, libri.autore from libri inner join utenti on  libri.utente_id = utenti.id where utenti.id = $user_id";
                    $result = mysqli_query($conn,$query);
                    if(mysqli_num_rows($result) != 0): // se il numero di righe è diverso da 0 ovvero quell'utente ha messo in vendita qualcosa allora mostro la tabella di vendita
                    ?>
                    <h3>E' bello rivederti!</h3>
                    <h6>Qui potrai fare tutte le modifiche che vorrai sugli articoli che hai venduto!</h6>
                    <br>
                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Data di Pubblicazione</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Modifiche</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            while ($dati = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>$dati[0]</td>";
                                echo "<td>$dati[1]</td>";
                                echo "<td>€$dati[2]</td>";
                                echo "<td> 
                             
                                    <button onclick=\"modificaInfo($dati[3])\" type=\"button\" class=\"btn-sm btn btn-warning\">
                                            <svg class=\"bi bi-pencil-square\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                          <path d=\"M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z\"/>
                                          <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z\" clip-rule=\"evenodd\"/>
                                        </svg> 
                                    </button>
                                  
                                    
                                    <form method='post' class='eliminaLibro' action='eliminaLibro.php' onsubmit='return confirm(\"vuoi davvero eliminare questo libro? \")'>  
                                    <input type='hidden' name='id_libro' value='$dati[3]'>                              
                                     <button class=\"btn-sm btn btn-danger\">
                                            <svg class=\"bi bi-trash-fill\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                          <path fill-rule=\"evenodd\" d=\"M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z\" clip-rule=\"evenodd\"/>
                                        </svg>
                                    </button>
                                    </form>
                                  
                                   </td>";
                                echo "</tr>";
                                echo "<tr id=\"id_$dati[3]\" class=\"informazioni\">";

                                echo "<td colspan='4'>";
                                echo "<form method='POST' action='modificaLibro.php'>"; //piccola form in cui possiamo apportare delle modifiche
                                echo "<input type='hidden' name='id_libro' value='$dati[3]'>";
                                echo "<div class='datiLibro'>";
                                echo "<label>Titolo:</label>";
                                echo "<input type='text' name='titolo' value='$dati[0]'>";
                                echo "</div>";
                                echo "<div class='datiLibro'>";
                                echo "<label>Autore:</label>";
                                echo "<input type='text' name='autore' value='$dati[5]'>";
                                echo "</div>";
                                echo "<div class='datiLibro'>";
                                echo "<label>Prezzo:</label>";
                                echo "<input type='text' name='prezzo' value='$dati[2]'>";
                                echo "</div>";
                                echo "<div class='datiLibro'>";
                                echo "<label>ISBN:</label>";
                                echo "<input type='text' name='isbn' value='$dati[4]'>";
                                echo "</div>";
                                echo "<button class=' mb-3 btn btn-success offset-md-4 mt-2'>Modifica libro</button>";
                                echo "</form>";
                                echo "</td>";
                                echo "</tr>";
                            }

                        ?>
                        </tbody>
                    </table>
                     <?php else: ?> <!-- nel caso in cui non abbia venduto nulla -->
                 <h2>Hey, sembra che qui non ci sia niente.</h2>
            <h1>Inizia a vendere!</h1>
                    <?php endif; ?>
                </div>

                <div class="col-md-6  center p-5">
                    <img  class="fit-image" src="immagini/hey.png" width="100%" height="100%" alt="Hey"></img>
                </div>

    </div>
</div>





<?php
include 'footer.php';
?>


