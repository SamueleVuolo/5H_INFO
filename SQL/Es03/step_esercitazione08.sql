CREATE DATABASE Utenti;

CREATE TABLE utente(
	id INT NOT NULL PRIMARY KEY,
    nome CHAR(40) NOT NULL,
    cognome CHAR(40) NOT NULL,
    data_nascita DATE NOT NULL
);
