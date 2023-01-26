<?php
require 'function.php';

session_start(); // Avvia la sessione php.
//$_SESSION['pag_count']++; echo $_SESSION['pag_count'];

$username = (isset($_POST['username'])) ? $_POST['username'] : "";
$password = (isset($_POST['password'])) ? $_POST['password'] : "";


list($retval,$errmsg)=login($username, $password);
if($retval) {header("location: PagRis.php"); die();} 
?>

<html>
<head><title>Login</title></head>
<body>
  <h3>Esegui Login</h3>
  <?=$errmsg?>
  <form action="Login.php" method="post">
    <label>Username <input type="text" name="username" /></label><br />
    <label>Password <input type="password" name="password"/></label><br />
    <input type="submit" value="Login" /><input type="reset" value="Cancel" />
  </form>
  <p>Non sei registrato? <a href="Registrazione.php"> Crea un account</a>.</p>        
</body>
</html>
