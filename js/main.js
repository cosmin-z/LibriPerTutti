
/*-------Index----------------*/
function mostraInformazioni(index) {/*setta assolvenza e poi la dissolvenza degli elementi nella tabella*/
    $(`#id_`+index).fadeToggle();
}

var a=true;
function attenzione(n) {
    if(n=="Email_alert"&&a) {
        alert("Ti informiamo che l'email verrà resa pubblica");
        a=false;
    }
    return;
}
/******************/

/*-----------vendi-------------*/
function mostraNumero() {

   $("#scelta").fadeToggle(); /* mostra la form dove inserire il numero di telefono o la nasconde*/
}
/******************/

/*----------registrati----------*/
function controllaNome() {
    var re=/^[a-zA-Z]+( [a-zA-Z]+)*$/; /* definisco una pattern dentro una variabile, che deve contenere solo lettere*/
    var v=document.myForm.nome.value;
    if(!re.test(v)){ /*verifico che l'utente non abbia inserito numeri nel cognome*/
        alert("Hai inserito caratteri numerici nel nome");
        return false
    }
    return true;
}

function controllaCognome() {
    var re=/^[a-zA-Z]+( [a-zA-Z]+)*$/;  //idem sopra
    var v=document.myForm.cognome.value;
    if(!re.test(v)){  //idem sopra
        alert("Hai inserito caratteri numerici nel cognome");
        return false
    }
    return true;
}

function verificaPassword(){
    var passUno=document.myForm.password.value;
    var passDue=document.myForm.conferma_password.value;
    if(passUno != passDue){
        alert (" Password diverse")
        return false;
    }
    return true;
}

function validaInvio() {
    if(!controllaNome()) return false;
    if(!controllaCognome()) return false;
    if(!verificaPassword()) return false;
    return true;
}
/************************/


/*-----------profilo------------*/
function modificaInfo(index) { /* mostra in miei annunci le modifiche possibili per ogni articolo */
    $(`#id_`+index).fadeToggle();

}

/*******************/


/* Ricerca */
document.getElementById('ricercaLibro').addEventListener('keyup', ricercaLibro); //ascolto l'evento keyup


function ricercaLibro(e) {
    var chiave = e.target.value; //cerco il valore all'interno dell'evento

    $.get( "ricercaLista.php", {'chiave': chiave}, //fa una chiamata http/callback , chiamata asincrona
        function(data) { // il risultato del server dentro data

        var risultati = JSON.parse(data);
        console.log(risultati);

        //standard di jQuery UI
        $( "#ricercaLibro" ).autocomplete({
            source: risultati
        });
    });

}