<html>
<head>
<title>Login</title>
</head>

<body>
<h2>Crea un account</h2>

<?php
  define('DB_SERVER', 'localhost');
  define('DB_NAME', 'gestione_utenti');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');

  if(!isset())
  
  
  
  
  
?>


<form action="" method="post">
   <label>Nome: <input type="text" name="nome" /></label><br />
   <label>Cognome: <input type="text" name="cognome" /></label><br />
   <label>Email: <input type="text" name="email" /></label><br />
   <label>Data di nascita: <input type="date" name="data" /></label><br />
   <label>Username: <input type="text" name="username" /></label><br />
   <label>Password: <input type="password" name="password"/></label><br />
   <input type="submit" value="Invio" />
</form>        

</body>
</html>
