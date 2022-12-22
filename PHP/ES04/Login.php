<html>
<head>
	<title>Accedi - ITCS ERASMO</title>
	<link rel="stylesheet" href="stile.css?ts=<?=time()?>&quot">
</head>

<body>
<?php
	session_start();
	if(isset($_POST["username"])) {
		$username=$_POST["username"];
		$password=$_POST["password"];
		if($username!="admin" || $password!="pswd")
			echo "<h2>Credenziali errate.</h2>";
		else{
			$_SESSION["username"]=$_POST["username"];
			$_SESSION["password"]=$_POST["password"];
			header("Location: PagRis.php");
		}
	}
if(!isset($_SESSION["username"]))
{?>
	<div class="sezione-login">
	<form name="frmLogin" action="PagRis.php" method="POST">
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" value="Submit">
	</form>
	</div>
	<hr/><?php
}
?>
<a href="index_sessione.php"><h2>Torna alla home page</a><br/></h2>
</body>
</html>
