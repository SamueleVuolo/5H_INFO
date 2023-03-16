<?php
session_start();
require 'function.php';
?>
<html>
<head>
	<title>ITCS Erasmo da Rotterdam</title>
</head>
<body>
	<h2>Eliminazione dell'account</h2><br>

<?php
		
//definizioni info per il database
define('DB_SERVER', 'localhost');
define('DB_NAME', 'gestione_utenti');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
		
		
		if(!isset($_POST['Submit']))
		{
?>
            <form name="frmLogin" action="DeleteUser" method="post"><br>
            <h3>Inserisci le tue credenziali</h3>
            Email: <input type="text" name="email"><br><br>
            <input type="submit" name="Login">
            </form>
            <a href='index.php'>Home Page</a><br><?php
        }else {
			deletepswd();
			echo "Account eliminato<br>";
			echo "Torna alla homepage<br>";
            echo "<a href='homepage.php'>Home Page</a><br>";
		}
?>     
</body>
</html>
