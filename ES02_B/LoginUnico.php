<html>
<head>
	<title>ITCS ERASMO DA ROTTERDAM</title>
</head>

<body>
<h3>Controllo credenziali</h3>
<?php
	if(isset($_POST["username"])) {
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
}	else {
?>

	<form name="frmLogin" action="LoginUnico.php" method="POST">
		User name: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" value="Submit">
	</form>
	
<?php
}
?>
