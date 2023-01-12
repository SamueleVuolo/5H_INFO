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
