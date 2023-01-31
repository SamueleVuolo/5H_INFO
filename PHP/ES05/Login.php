<?php
require 'function.php';

session_start(); // Avvia la sessione php.
?>
<?php

if(!isset($_SESSION['login']))
{
	//il login non è ancora verificato
	if(isset($_POST['Login']))
	{
		//connessione al database
		login();
	}
	else
	{
		//Visualizzo il form
?>
		<form name="frmLogin" action="Login.php" method="post">
			<label>Username <input type="text" name="username" /></label><br />
			<label>Password <input type="password" name="password"/></label><br />
			<input type="submit" value="Login" /><input type="reset" value="Cancel" />
		</form>
		<p>Non sei registrato? <a href="Registrazione.php"> Crea un account</a>.</p>
<?php
	}
}
else
{
	//L'utente ha già fatto il login
	echo "L'utente ha già effetuato il login <br>";
	echo "<a href='homepage.php'>Home</a><br>";
	echo "<a href='Logout.php'>Esci</a><br>";
}
?>

