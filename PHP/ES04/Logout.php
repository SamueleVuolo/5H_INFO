<html>
<head>
	<title>Esci - ITCS ERASMO</title>
	<link rel="stylesheet" href="stile.css?ts=<?=time()?>&quot">
</head>
<body>
<?php 
	session_start();
	session_destroy();
	echo "Logout avvenuto. Arrivederci";
?>
<hr/>
<a href="Login.php"><h2>Accedi di nuovo</h2></a>
<a href="index_sessione.php"><h2>Torna alla home</h2></a>
</body>
</html>
