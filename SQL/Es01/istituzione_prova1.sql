//creazione database
CREATE DATABASE Istituzione; 

//creazione tabella scuola
CREATE TABLE scuola(
   	codice INT NOT NULL AUTO_INCREMENT PRIMARY KEY
);

//creazione tabella studenti
CREATE TABLE studenti(
    matricola CHAR(10),
    cognome CHAR(15) NOT NULL,
    codice_scuola INT REFERENCES scuola(codice)
);

//aggiungo un campo in studenti
ALTER TABLE studenti ADD COLUMN(
	classe CHAR(2)    
);

//creo un'istanza di studenti
INSERT
INTO studenti(matricola, cognome, codice_scuola, classe)
VALUES ('H33KL9OE', 'Rambi', 'm4hhU7e', '5A');

//modifico-aggiorno la tabella
UPDATE studenti
SET codice_scuola='17739164826';

//creo un'istanza di scuola
INSERT
INTO scuola(codice)
VALUES ('8344261984');

//modifico-aggiorno la tabella
UPDATE scuola
SET codice='259352502';
