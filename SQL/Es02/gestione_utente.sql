//crea database
CREATE DATABASE gestione_utenti;

//crea tabella utente
CREATE TABLE utente(
id INT NOT NULL AUTO_INCREMENT,
username VARCHAR(64) NOT NULL,
pswd VARCHAR(64) NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=100;

//inserimento dei campi
INSERT 
INTO utente(id, username, pswd)
VALUES (NULL, 'Billy', 'blokka');

//modifico tabella utente
UPDATE utente
SET email='billy.blokka@gmail.com'
WHERE id=100;
