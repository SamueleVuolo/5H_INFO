<?php
session_start();
?>
<html>
<head>
	<title>Accedi - ITCS ERASMO</title>
	<link rel="stylesheet" href="stile.css?ts=<?=time()?>&quot">
</head>
<body>
<?php
	if(isset($_POST["username"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		if($username!="admin" || $password!="pswd")
			echo "<h2>Credenziali errate.</h2>";
		else{
			$_SESSION["username"] = $_POST["username"];
			$_SESSION["password"] = $_POST["password"];
			header("location: PagRis.php");
		}
	}
if(!isset($_SESSION["username"]))
{?>
	<form name="frmLogin" action="Login.php" method="post">
		Username: <input type="text" name="username" placeholder="username"><br>
		Password: <input type="password" name="password" placeholder="password"><br>
		<input type="submit" value="Invio">
	</form><hr/><?php
}
?>
<a href="index_sessione.php"><h2>Torna alla home page</a><br/></h2>
</body>
</html>
