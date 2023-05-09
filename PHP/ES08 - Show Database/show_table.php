<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>
<body>
<table border="1" cellspacing="3" cellpadding="2">
<?php

	//definizioni del db
	session_start();
	define('DB_SERVER', 'localhost');
	define('DB_NAME', 'utenti');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	  
	//query per connessione al database
	$pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	
	//query per la visualizzazione della tabella
	$query = "SELECT * FROM utente";
	$ris = $pdo->query($query);
	$qs="Niente";
	foreach($ris as $riga){
		echo "<tr>";
		echo "<td align=\"center\">"; 
		print $riga["id"] ."<td align=\"center\">". $riga["nome"] ."<td align=\"center\">". $riga["cognome"] . "<td align=\"center\">" . $riga["nascita"] . "</td>";
		echo "</tr>";
	}
?>
</body>
</html>
