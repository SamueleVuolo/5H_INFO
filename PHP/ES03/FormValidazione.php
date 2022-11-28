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
echo "Nome: ";
if(preg_match('/^[a-zA-Z]*$/',$nome))
	{
		echo $nome, "<br>";
	}
else
	{
		echo $errNome = "nome invalido, inserire un nuovo nome. <br>";
	}

echo "Cognome: ";
if(preg_match('/^[a-zA-Z]*$/',$cognome))
	{
		echo $cognome, "<br>";
	}
else
	{
		echo $errCognome = "cognome invalido, inserire un nuovo cognome. <br>";
	}
	

/*if(preg_match("/([012]?[1-9]|[12]0|3[01])\/(0?[1-9]|1[012])\/([0-9]{4})/", $data))
	{
		echo "Data di nascita inserita: ";
		echo $data;
		echo "<br>";
	}
else
	{
		echo $errData = "<Data non accettata, inserire una nuova data. <br>";
	}*/

echo "Data di nascita inserita: ";
echo $data;
echo "<br>";

echo "Nickname inserito: ";
if(preg_match('/^[a-zA-Z0-9_]*$/',$nickname))
	{
		echo $nickname, "<br>";
	}
else
	{
		echo $errNickname = "nickname invalido, inserire un nuovo nickname. <br>";
	}
	
	
/*if(preg_match('/^[a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/',$email))
	{
		echo "Email inserita: ";
		echo $email;
		echo "<br>";
	}
else
	{
		echo $errEmail ="Caratteri non accettati, inserire una nuova mail. <br>";
	}*/
	
echo "Email: ";
if (preg_match("/^[^@]+@[^@]+\.[a-z]{2,6}$/i", $email))
    {
		echo $email, "<br>";
    }
else
	{
		echo $errEmail ="email invalida, inserire una nuova mail. <br>";
	}	
	
echo "Cellulare: ";
if(preg_match("/^(([+]|00)39)?((3[1-6][0-9]))(\d{7})$/", $cellulare))
	{
		echo $cellulare, "<br>";
	}
else
	{
		echo $errCellulare = "numero invalido, inserire un nuovo numero. <br>";
	}
	
echo "Password: ";
if(preg_match('/^[a-zA-Z_0-9]/',$password))
	{
		echo $password, "<br>";
	}
else
	{
		echo $errPassword = "password invalida, inserire una nuova password. <br>";
	}
?>

</div>
	<h2>VALIDAZIONE FORM<br>* = Campi obbligatori da compilare</h2>
	<div class="sezione-login">
	<form name="frmLogin" action="FormValidazione.php" method="POST">
		*NOME: <input type="text" name="nome"><br><br>
		*COGNOME: <input type="text" name="cognome"><br><br>
		*DATA: <input type="date" name="data"><br><br>
		*NICKNAME: <input type="text" name="nickname"><br><br>
		*EMAIL: <input type="text" name="email"><br><br>
		*CELLULLARE: <input type="text" name="cellulare"><br><br>
		*PASSWORD: <input type="password" name="password"><br><br>
		<div class="tasto-submit"><input type="submit" value="Submit" name="Invio"></div>
	</form>		
	</div>
</body>
</html>
