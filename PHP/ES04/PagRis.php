<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>
<body>
<?php
include "functions.php";

session_start(); //inizio della sessione
	
if(isset($_SESSION["username"] || empty($_SESSION["username"])))
{
	echo "Benvenuto nel sito!";
	header("Location: PagRis.php");
	session_destroy();
}
else
{
	
}
?>
</body>
</html>
