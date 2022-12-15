<?php
//controllo il campo nome
function nome(){
if(preg_match('/^[a-zA-Z]*$/',$nome))
    echo $errNome = "Il nome deve contenere solo caratteri";
else if($nome=="")
    echo $errNome="Campo obbligatorio";
}

//controllo il campo cognome
function cognome(){
if(preg_match('/^[a-zA-Z]*$/',$cognome))
    echo "Cognome non valido. Ammessi solo caratteri";
else if($cognome=="")
    echo $errCognome = "Campo obbligatorio";
}
?>
