<html>
<head>
	<title>ITCS ERASMO DA ROTTERDAM</title>
</head>

<body>
	<h3>Controllo credenziali</h3>
<?php
$usr=$_POST["username"];
$pwd=$_POST["password"];
if($usr!="admin" || $pwd!="password"){
?>
<h4>Attenzione! Nome utente o password sbagliate.</br>
Accesso negato!</h4>
<?php
} else {
  echo "<h4>Benvenuto " . $usr . " nell'area del sito!</h4>";
}
?>
</body>
</html>
