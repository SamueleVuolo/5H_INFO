<?php

$nome=trim($_POST["nome"]);
$cognome=trim($_POST["cognome"]);
$data=trim($_POST["data"]);
$nickname=trim($_POST["nickname"]);
$email=trim($_POST["email"]);
$cellulare=trim($_POST["cellulare"]);
$password=trim($_POST["password"]);

if(preg_match('/^[a-zA-Z]*$/',$nome))
	{
		echo "Nome inserito: ";
		echo $nome;
	}
else
	{
		echo "<br>Caratteri non accettati, inserire un nuovo nome. <br>";
	}

if(preg_match('/^[a-zA-Z]*$/',$cognome))
	{
		echo "<br>Cognome inserito: ";
		echo $cognome;
	}
else
	{
		echo "<br>Caratteri non accettati, inserire un nuovo cognome. <br>";
	}

if(preg_match("^[0-3][0-9]-[0-1][0-9]-[0-9]{4}$",$data))
	{
		echo "<br>Data di nascita inserita: ";
		echo $data;
	}
else
	{
		echo "<br>Data non accettata, inserire una nuova data. <br>";
	}

if(preg_match('/^[a-zA-Z0-9_]*$/',$nickname))
	{
		echo "<br>Nickname inserito: ";
		echo $nickname;
	}
else
	{
		echo "<br>Caratteri non accettati, inserire un nuovo nickname. <br>";
	}
?>
