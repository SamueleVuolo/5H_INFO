<?php
session_start();
require 'function.php';
?>
<html>
<head>
<title>Cambia password</title>
</head>

<body>
<h2>Imposta nuova password</h2>

<?php
//definizioni del db
  define('DB_SERVER', 'localhost');
  define('DB_NAME', 'gestione_utenti');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');

  if(!isset($_SESSION['login']))
  {
?>	
	<form name="frmLogin" action="PassReset.php" method="POST">
			<label>Username <input type="text" name="username" placeholder="username"></label><br/>
			<label>Nuova Password <input type="password" name="password" placeholder="password"></label><br/>
			<input type="submit" name="Login" />
	</form>
	
