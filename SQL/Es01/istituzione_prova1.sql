//creazione database
CREATE DATABASE Istituzione; 

//creazione tabella scuola
CREATE TABLE scuola(
   	codice CHAR(10) PRIMARY KEY
);

//creazione tabella studenti
CREATE TABLE studenti(
    matricola CHAR(10),
    cognome CHAR(15) NOT NULL,
    codice_scuola CHAR(10) REFERENCES scuola(codice)
);
