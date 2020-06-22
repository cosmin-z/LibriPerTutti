
<!--barra di ricerca-->
<?php
include 'header.php';
?>
<title>LPT &middot; Registati</title>

<div class="text-center">

<img  class="" src="immagini/ragazziRegistrazione.png" alt="ragazziConLibri" width="500" height="400"/>

<div class="container cont-dim bg-light margini-arrotondati text-align:center">
    <div class="col-md-12 center pt-5">

        <!-------- Inizio form ----------->
        <form action="registraUtente.php" class="" method="POST" name="myForm" onsubmit="return validaInvio()">

            <h1 class="h3 mb-3 form-weight-normal font-registra">
                Pronto ad entrare in un mondo di libri? <br>
                Registrati adesso! <br>
            </h1>


            <!-- Riga Nome e cognome-->
            <div class="form-row mt-5">
                    <label for="Nome">&#42;Nome</label>
            </div>
            <div class="form-row mt-2">
                <input type="text" class="offset-md-2 col-md-8 form-control" name="nome" id="Nome" placeholder="Es: Mario" autofocus required onChange="return controllaNome();">
            </div>
            <div class="form-row mt-4">
                    <label for="Cognome">&#42;Cognome</label>
            </div>
            <div class="form-row mt-2">
                    <input type="text" class="offset-md-2 col-md-8 form-control" name="cognome" id="Cognome" placeholder="Es: Rossi" required onChange="return controllaCognome();">
            </div>


            <!-- Riga data di nascita-->
            <div class="form-row mt-4">
                <label for="Nascita" class="mt-3">&#42;Data di nascita</label>
            </div>
            <div id="Nascita" class="form-row mt-2">
                <div class="col-md-2 mb-3 div-align offset-md-3">
                    <select class="custom-select" id="Giorno" value="giorno" name="Giorno" required>
                        <option selected disabled value="">- Giorno -</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <select class="custom-select" id="Mese" value="mese" name="Mese" required>
                        <option selected disabled value="">- Mese -</option>
                        <option value="1">Gennaio</option>
                        <option value="2">Febbraio</option>
                        <option value="3">Marzo</option>
                        <option value="4">Aprile</option>
                        <option value="5">Maggio</option>
                        <option value="6">Giugno</option>
                        <option value="7">Luglio</option>
                        <option value="8">Agosto</option>
                        <option value="9">Settembre</option>
                        <option value="10">Ottobre</option>
                        <option value="11">Novembre</option>
                        <option value="12">Dicembre</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <select class="custom-select" id="Anno" value="anno" name="Anno" required>
                        <option selected disabled value="">- Anno -</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                        <option value="1950">1950</option>
                        <option value="1949">1949</option>
                        <option value="1948">1948</option>
                        <option value="1947">1947</option>
                        <option value="1946">1946</option>
                        <option value="1945">1945</option>
                        <option value="1944">1944</option>
                        <option value="1943">1943</option>
                        <option value="1942">1942</option>
                        <option value="1941">1941</option>
                        <option value="1940">1940</option>
                        <option value="1939">1939</option>
                        <option value="1938">1938</option>
                        <option value="1937">1937</option>
                        <option value="1936">1936</option>
                        <option value="1935">1935</option>
                        <option value="1934">1934</option>
                        <option value="1933">1933</option>
                        <option value="1932">1932</option>
                        <option value="1931">1931</option>
                        <option value="1930">1930</option>
                    </select>
                    </select>
                </div>
            </div>


            <!--Email e password-->
            <div class="form-row mt-4">
                <div class="col-md-1 mr-2"></div>
                <div class="col-md-3 mb-3 ml-4">
                    <label class="mb-2" for="Email">&#42;Email</label>
                    <input type="email" class="form-control" id="Email" name="email" placeholder="example@email.com" onfocus="attenzione('Email_alert')" required>
                    <!-- quando il focus va sulla label email appare un messaggio di avviso, una sola volta! -->
                </div>
                <div class="col-md-3 mb-3">
                    <label class="mb-2" for="Password1">&#42;Password</label>
                    <input type="password" class="form-control" id="Password1" name="password" placeholder="Password" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="mb-2" for="Password2">&#42;Ripetere password</label>
                    <input type="password" class="form-control" id="Password2" name="conferma_password" placeholder="Password" required onchange="return verificaPassword()">
                </div>
            </div>

            <!--Bottoni-->
            <div class="form-row">
                <button class="col-md-4 offset-md-4 mt-4 btn btn-lg btn-block btn-col-1" name="loginButton" type="submit">Registrati</button>

            </div>
            <div class="form-row ">
                <button class="mt-2 offset-md-4 col-md-4 btn mb-5 btn-sm btn-col-2 btn-block" name="reset" type="reset">Cancella tutto</button>
            </div>

            <?php //messaggio di errore se si inserisce una mail già presente nel database
            if(isset($_GET['error'])) {
                $err = $_GET['error'];
                if ($err == "emailduplicata") {
                    echo "<strong>Attenzione, questo indirizzo email è già stato utilizzato</strong>";
                }
            }
            ?>
        </form>
    </div>
</div>

</div>
    <!-- Copyright -->
    <?php
    include 'footer.php';
    ?>
    <!-- Copyright -->


