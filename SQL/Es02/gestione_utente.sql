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

//aggiungo attributi
ALTER TABLE utente ADD COLUMN(
    mail CHAR(20),
    nascita DATE
);

//avvaloro i nuovi attributi
UPDATE utente
SET mail='bellofigo@gmail.com'
WHERE id='100'

UPDATE utente
SET nascita='2004-06-29'
WHERE id='100'



UPDATE utente
SET mail='framma76@gmail.com'
WHERE id='101';

UPDATE utente
SET nascita='1976-10-16'
WHERE id='101'



UPDATE utente
SET mail='forza.maggica22@gmail.com'
WHERE id='102';

UPDATE utente
SET nascita='2000-04-10'
WHERE id='102'

//



















