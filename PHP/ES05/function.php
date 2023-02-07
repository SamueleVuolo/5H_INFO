<?php

function login() {
	
	/*define('DB_SERVER', 'localhost');
	define('DB_NAME', 'gestione_utenti');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');*/
	
	//passo variabili del login con POST
	$username=$_POST['username'];
	$pswd=$_POST['password'];
	
	//query per database
	$pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	
	//interogazione database
	$inter = "SELECT * FROM utente WHERE username = '$username' AND password = '$pswd'";
	
	//risultato interrogazione
	$ris = $pdo->query($inter);
	
	if($ris->rowCount()>0){
		//se vero
		$_SESSION['login']=true;
		echo "Benvenuto nella Homepage";
		echo "<a href='PagRis.php'>Pagina Riservata</a>";
	}
	else
		//se falso
		$_SESSION['login']=false;
		echo "Credenziali errate!";
}

/*function login($username, $password) {}*/



