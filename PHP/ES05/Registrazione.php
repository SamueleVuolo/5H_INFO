<html>
<head>
<title>Login</title>
</head>

<body>
<h2>Crea un account</h2>

<?php
  define('DB_SERVER', 'localhost');
  define('DB_NAME', 'gestione_utenti');
  define('DB_USER', 'username');
  define('DB_PASSWORD', 'pswd');

  try {
    //Connessione al database
    $pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
    //Imposto la modalità di gestione degli errori
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    //Gestione dell'eccezione
    echo "Errore di connessione: " . $e->getMessage();
    exit;
  }
  
  $pdo = new PDO("mysql:host=localhost;dbname=gestione_utenti", 'username', 'pswd');

  //Chiusura della connessione
  $pdo = null;
?>


<form action="Login.php" method="post">
   <label>Username <input type="text" name="username" /></label><br />
   <label>Password <input type="password" name="password"/></label><br />
   <input type="submit" value="Login" /><input type="reset" value="Cancel" />
</form>        

</body>
</html>
