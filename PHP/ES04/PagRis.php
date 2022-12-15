<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>
<body>
<?php
include "fucntions.php";

session_start(); //inizio della sessione
	
if(!isset($_SESSION["username"] && empty($_SESSION["username"])))
	echo "Benvenuto nel sito!";
else
{
	
}
?>



</body>
</html>
