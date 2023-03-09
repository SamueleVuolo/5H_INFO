<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
<!--link rel="stylesheet" href="stile.css?ts=</?=time()?>&quot"-->
</head>
<body>
<?php
session_start(); //inizio della sessione
if(!isset($_SESSION['login']))
{
	echo "<h1>Effettuare prima il login.</h1>";?>
	<a href="Login.php"><h1>Effettua il login</h1></a>
<?php
}
else
{
	echo "<h1>Benvenuto nella pagina riservata!</h1>";
?>
	<a href="Logout.php"><h2>Esci</h2></a>
<?php
}
?>
</body>
</html>
