<?php

function login()
{	
	//passo variabili del login con POST
	$username=$_POST['username'];
	$pswd=$_POST['password'];
	
	//query per database
	$pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);	
	
	//interogazione database
	$inter = "SELECT * FROM utente WHERE username = '$username' AND pswd = '$pswd'";
	//risultato interrogazione
	$ris = $pdo->query($inter);
	
	if($ris->rowCount()>0){
		//se vero
		$_SESSION['login']=true;
		echo "Benvenuto nella Homepage<br>";
		echo "<a href='PagRis.php'>Pagina Riservata</a>";
	}
	else
	{
		//se falso
		$_SESSION['login']=false;
		echo "Credenziali errate!";
	}
}

function signup()
{
	$nome=$_POST['nome'];
	$cognome=$_POST['cognome'];
	$email=$_POST['email'];
	$nascita=$_POST['nascita'];
	$username=$_POST['username'];
	$pswd=$_POST['password'];
	
	//query per database
	$pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	
	//inserisco i valori del POST
	$regis = "INSERT INTO utente(id, nome, cognome, nascita, mail, username, pswd) VALUES(NULL, '$nome','$cognome','$nascita','$email','$username','$pswd')";
	
	if($pdo->query($regis)==true){
            echo "Registrazione avvenuta ";
        }else
            echo "Errore. Impossibile registrarsi ";

        //imposto la var di sessione a true
        $_SESSION['login'] = true;
		
	//termino connessione al db
	$pdo=null;
}


function (){}
?>
