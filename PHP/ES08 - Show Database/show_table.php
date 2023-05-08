<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>
<body>
<?php

	//definizioni del db
	define('DB_SERVER', 'localhost');
	define('DB_NAME', 'Utenti');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	  
	//query per connessione al database
	$pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	
	//query per la visualizzazione della tabella
	$query = "SELECT * FROM utente";
	$ris = $pdo->query($query);
	foreach ($ris as $row) {
        print $row["nome"] . " " . $row["cognome"] ."<br/>";
    }
  
?>
</body>
</html>
