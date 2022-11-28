<html>
<head>
	<title>ITCS ERASMO DA ROTTERDAM</title>
	<link rel="stylesheet" href="stile.css?ts=<?=time()?>&quot">
</head>
<body>

<div class="dati-inseriti">
	<h3>Dati Inseriti:</h3>

<?php

//inizializzazione variabili
$nome = $cognome = $data = $nickname = $email = $cellulare = $password = "";

//errori
$errNome = $errCognome = $errData = $errNickname = $errEmail = $errCellulare = $errPassword = "";

if(isset($_POST["nome"])){
	$nome=trim($_POST["nome"]);
	$cognome=trim($_POST["cognome"]);
	$data=trim($_POST["data"]);
	$nickname=trim($_POST["nickname"]);
	$email=trim($_POST["email"]);
	$cellulare=trim($_POST["cellulare"]);
	$password=trim($_POST["password"]);
}

//controllo campi
if(preg_match('/^[a-zA-Z]*$/',$nome))
	{
		echo "Nome inserito: ";
		echo $nome;
	}
else
	{
		echo $errNome = "Caratteri non accettati, inserire un nuovo nome. <br>";
	}

if(preg_match('/^[a-zA-Z]*$/',$cognome))
	{
		echo "<br>Cognome inserito: ";
		echo $cognome;
	}
else
	{
		echo $errCognome = "Caratteri non accettati, inserire un nuovo cognome. <br>";
	}

/*if(preg_match("[0-3][0-9]-[0-1][0-9]-[0-9]{4}$",$data))
	{
		echo "<br>Data di nascita inserita: ";
		echo $data;
	}
else
	{
		echo $errData = "Data non accettata, inserire una nuova data. <br>";
	}*/

if(preg_match('/^[a-zA-Z0-9_]*$/',$nickname))
	{
		echo "<br>Nickname inserito: ";
		echo $nickname;
	}
else
	{
		echo $errNickname = "Caratteri non accettati, inserire un nuovo nickname. <br>";
	}
	
if(preg_match('/^[a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/',$email))
	{
		echo "<br>Email inserita: ";
		echo $email;
	}
else
	{
		echo $errEmail ="Caratteri non accettati, inserire un nuovo nickname. <br>";
	}
	
if(preg_match('/^[0-9]/',$cellulare))
	{
		echo "<br>Numero di cellulare inserito: ";
		echo $cellulare;
	}
else
	{
		echo $errCellulare = "Caratteri non accettati, inserire un nuovo numero. <br>";
	}
	
if(preg_match('/^[a-zA-Z_0-9]/',$password))
	{
		echo "<br>Password inserita: ";
		echo $password;
	}
else
	{
		echo $errPassword = "Caratteri non accettati, inserire una nuova password. <br>";
	}
?>
</div>
	<h2>VALIDAZIONE FORM</h2>
	<p>* = Campi obbligatori da compilare</p>
	<div class="sezione-login">
	<form name="frmLogin" action="FormValidazione.php" method="POST">
		NOME*: <input type="text" name="nome"><br><br>
		COGNOME*: <input type="text" name="cognome"><br><br>
		DATA*: <input type="date" name="data"><br><br>
		NICKNAME*: <input type="text" name="nickname"><br><br>
		EMAIL*: <input type="text" name="email"><br><br>
		CELLULLARE: <input type="text" name="cellulare"><br><br>
		PASSWORD*: <input type="password" name="password"><br><br>
		<div class="tasto-submit"><input type="submit" value="Submit"></div>
	</form>		
	</div>
</body>
</html>
