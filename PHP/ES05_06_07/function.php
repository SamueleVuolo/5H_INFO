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

function resetpass()
{
	//passo le variabili con POST
	$username = $_POST['username'];
    $pswd = $_POST['password'];
	$email = $_POST['email'];
	
	//query per database
	$pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	
	//interogazione database
	$inter = "SELECT * FROM utente WHERE username = '$username' AND mail = '$email'";
	//risultato interrogazione
	$ris = $pdo->query($inter);
	if($ris->rowCount()>0)
	{
		//se vero
		$_SESSION['reset']=true;
			
		$pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
		$pwreset = "UPDATE utente SET pswd='$pswd' WHERE username='$username'";
		//controllo se la query è andata a buon fine
		if($pdo->query($pwreset)==true)
		{
			echo "Password aggiornata ";
		}else
		echo "Impossibile aggiornare la password ";
	}
	else
	{
		//se falso
		$_SESSION['reset']=false;
		echo "Credenziali errate! <a href='PassReset.php'> Cambia Password</a><br>";
	}
	
	//termino connessione al db
	$pdo=null;
	
}

function delaccount(){
	$email = $_POST['email'];

    $pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
    $deluser = "DELETE FROM utente WHERE mail='$email'";
		
	//controllo se la query è andata a buon fine
    if($pdo->query($deluser)==true)
	{
        echo "Eliminazione avvenuta correttamente";
    }else
    echo "Impossibile eliminare l'account";
	
	//chiudo la connessione al database
	$pdo=null;
	session_destroy();
}
?>
