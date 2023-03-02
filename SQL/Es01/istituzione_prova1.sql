//creazione database
CREATE DATABASE Istituzione; 

//creazione tabella scuola
CREATE TABLE scuola(
   	codice INT(65) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome_scuola CHAR(64) NOT NULL
);

//creo le istanze per scuola
INSERT INTO scuola(codice, nome_scuola) VALUES ('01', 'ITCS Erasmo da Rotterdam')
INSERT INTO scuola(codice, nome_scuola) VALUES ('02', 'Russell')
INSERT INTO scuola(codice, nome_scuola) VALUES ('03', 'Privo Levi')


//creazione tabella studenti
CREATE TABLE studenti(
    matricola CHAR(10) PRIMARY KEY,
    nome CHAR(15) NOT NULL,
    cognome CHAR(20) NOT NULL,
    data_nascita DATE NOT NULL,
    classe CHAR(2) NOT NULL,
    codice_scuola INT(65) NOT NULL,
    FOREIGN KEY(codice_scuola) REFERENCES scuola(codice)
    	ON UPDATE CASCADE
   	
);

//creo le istanze per studenti
INSERT INTO studenti(matricola, nome, cognome, data_nascita, classe, codice_scuola) VALUES ('101', 'Stefano', 'Befano', '2007/05/23', '2L', '01')
INSERT INTO studenti(matricola, nome, cognome, data_nascita, classe, codice_scuola) VALUES ('425', 'Giacomo', 'Poretti', '2003/11/15', '4A', '02')
INSERT INTO studenti(matricola, nome, cognome, data_nascita, classe, codice_scuola) VALUES ('58', 'Jovanni', 'Lavazza', '2006/09/13', '3F', '03')


//visualizzo una riga
SELECT * FROM studenti WHERE matricola='58';



//provare query LEFT JOIN
SELECT st.nome AS nomestudenti, st.classe, sc.nome_scuola
FROM studenti AS st LEFT JOIN scuola AS sc
ON st.codice_scuola=sc.codice

SELECT st.nome AS nomestudenti, st.classe, sc.nome_scuola
FROM scuola AS sc LEFT JOIN studenti AS st
ON st.codice_scuola=sc.codice


//SELF JOIN
SELECT s1.nome AS nome, s1.cognome AS cognome, s2.cognome AS rappresentante
FROM studenti AS s1, studenti AS s2
WHERE s1.codice_rapp = s2.matricola

//LEFT JOIN
SELECT s.nome AS nome, s.cognome AS cognome, sc.nome_scuola AS scuola
FROM studenti AS s LEFT JOIN scuola AS sc
ON s.codice_scuola = sc.codice



















