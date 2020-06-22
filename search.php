

<?php
include 'header.php';
?>

<title>LPT &middot; Risultati</title>



<div class="container mt-5">
    <div class="row">
        <img src="immagini/ricerca.png" width="10%" height="10%" alt="ricerca">
        <h3 class="mt-5 mb-5">Ecco quello che abbiamo trovato...</h3>
    </div>
    <div class="row" >
      <div class="col-md-12" >
            <div class="panel panel-default">
              <table class="table table-hover margini-arrotondati-tabella">
                <thead class="thead-light">
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
                $q=$_GET['cerca']; // Teoria del Volo | Rizzardo Trebbi

                $dati = explode(" | ", $q)[0]; // fa una suddivisione in array di q in base al " | "

                $query = "SELECT * from libri inner join utenti on libri.utente_id = utenti.id where libri.isbn = '$dati'  or libri.titolo LIKE '%$dati%'  or libri.autore LIKE '%$dati%' ORDER BY libri.id DESC ";
                $result = mysqli_query($conn,$query);
                if(mysqli_num_rows($result)!= 0) { // se la query non è vuota mostra i risultati della ricerca
                    while ($ricerca = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>$ricerca[10]</td>";
                        echo "<td>$ricerca[1] (Di $ricerca[2])</td>";
                        echo "<td>$ricerca[7]</td>";
                        echo "<td>
                                    <button onclick=\"mostraInformazioni($ricerca[0])\" type=\"button\" class=\"btn btn-sm btn-warning\">
                                            Apri
                                    </button>
                                    </td>";
                        echo "</tr>";

                        echo "<tr id=\"id_$ricerca[0]\" class=\"informazioni\">";
                        echo "<td><strong>Mail o telefono :</strong></td>";
                        if ($ricerca[5] != "") {
                            echo "<td>$ricerca[5]</td>";
                        } else {
                            echo "<td>$ricerca[14]</td>";
                        }

                        echo "<td><strong>Prezzo:</strong></td>";
                        echo "<td>€ $ricerca[4]</td>";
                        echo "</tr>";
                    }
                }
                else {//nessun risultato
                    header("location: nessunRisultato.php");
                }
                ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="pb-5">
<?php
include 'footer.php'
?>
</div>

