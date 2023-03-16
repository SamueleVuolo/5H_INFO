<?php
session_start();
require 'function.php';
?>
<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>

<body>
<h2>Reset della password</h2>
<?php
//definizioni info per il database
define('DB_SERVER', 'localhost');
define('DB_NAME', 'gestione_utenti');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

if(!isset($_POST['Reset']))
{?>
    <form name="frmLogin" action="PassReset.php" method="POST">
	    <h3>Conferma l'email e inserisci la nuova password</h3>
		Username: <input type="text" name="username"><br><br>
	    Email: <input type="text" name="email"><br><br>
        Nuova password: <input type="password" name="password"><br><br>
   	    <input type="submit" name="Reset">
 	</form><?php
	echo "<a href='homepage.php'>Homepage</a><br>";
}else {
    resetpass();
    echo " Esegui Login: <br>";
    echo "<a href='login.php'>Login</a><br>";
}
?>


</body>
</html>
