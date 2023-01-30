<?php
require 'function.php';

session_start(); // Avvia la sessione php.

define('DB_SERVER', 'localhost');
define('DB_NAME', 'gestione_utenti');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
?>
<?php

if(!isset($_SESSION['login']))
{
	//il login non è ancora verificato
	if(isset($_POST['Login'])
	{
		//verifichiamo che username e password sono presenti nel db
		//connessione al database
		connessionedb($_POST['username'], $_POST['password']);
		
		//interrogazione
		//SELECT * FROM Utente WHERE username='' and password=''
		$stmt = $pdo->prepare("SELECT * FROM utente WHERE username = :username AND password = :password");
		
		//controllo del record restituito
	}
	else
	{
		//E' la prima volta che viene caricata la pagina
		//Visualizzo il form
	}
}
else
{
	//L'utente ha già fatto il login
	//Faccio redirect a riservata.php
	//oppure visualizzo il link a riservata.php
}
?>

<html>
<head><title>Login</title></head>
<body>
  <h3>Esegui Login</h3>
  <?=$errmsg?>
  <form action="Login.php" method="post">
    <label>Username <input type="text" name="username" /></label><br />
    <label>Password <input type="password" name="password"/></label><br />
    <input type="submit" value="Login" /><input type="reset" value="Cancel" />
  </form>
  <p>Non sei registrato? <a href="Registrazione.php"> Crea un account</a>.</p>        
</body>
</html>
