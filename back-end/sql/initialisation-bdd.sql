-- Active: 1694069296748@@127.0.0.1@3306@mercenary
CREATE DATABASE mercenary;
DROP DATABASE mercenary;
CREATE TABLE agents (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    code INT NOT NULL,
    specilisation VARCHAR(60) NOT NULL,
    pays VARCHAR(50)
)

DROP TABLE agents;

CREATE TABLE roles (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(70) NOT NULL,
    userid INT NOT NULL,
    FOREIGN KEY (userid) REFERENCES clients(id)
)

DROP TABLE roles;

CREATE TABLE planques (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    pays VARCHAR(50) NOT NULL,
    code INT NOT NULL,
    pole VARCHAR(20) NOT NULL
)

DROP TABLE planques;

CREATE TABLE clients (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    mail VARCHAR(70) NOT NULL,
    password VARCHAR(80),
    prenom VARCHAR(50),
    nom VARCHAR(50)
)

INSERT INTO clients (id, mail, password, prenom, nom) VALUES (
    1,
    'laboucheriedu12cestbeau@gmail.com',
    'loulaetup1998',
    'alio',
    'loubiere'
);

INSERT INTO clients (id, mail, password, prenom, nom) VALUES (
    2,
    'lemodo@gmail.com',
    'jesuismodo12',
    'modo',
    'mododo'
);

INSERT INTO clients (id, mail, password, prenom, nom) VALUES (
    3,
    'lemercenaire@gmail.com',
    'jesuismercenaire12',
    'mercenaire',
    'mercenairenaire'
)


DROP TABLE clients;

CREATE TABLE imagesp (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    img VARCHAR(200),
    userid INT NOT NULL,
FOREIGN KEY (userid) REFERENCES clients(id)
);

DROP TABLE imagesp;

CREATE TABLE missions (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(60) NOT NULL,
    but VARCHAR (100) NOT NULL,
    paysmission VARCHAR (40) NOT NULL,
    nomdecodemission VARCHAR (40) NOT NULL,
    iduser INT NOT NULL,
    FOREIGN KEY (iduser) REFERENCES client(id)
)

INSERT INTO missions (titre, but, paysmission,nomdecodemission, iduser) VALUES
(
    'reconnaissance',
    'faire une reconnaissance',
    'france',
    'rec1',
    '1'
)

DROP TABLE missions;

CREATE TABLE contact (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nomcontact VARCHAR(60) NOT NULL,
    prenomcontact VARCHAR (100) NOT NULL,
    datenaissancecontact VARCHAR (40) NOT NULL,
    nationnalitecontact VARCHAR (40) NOT NULL,
    iduser INT NOT NULL,
    FOREIGN KEY (iduser) REFERENCES client(id)
)

INSERT INTO contact (nomcontact, prenomcontact, datenaissancecontact,nationnalitecontact, iduser) VALUES
(
    'loubiere',
    'alio',
    '30-10-1998',
    'france',
    '1'
)

DROP TABLE contact;

CREATE TABLE cible (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nomcible VARCHAR(60) NOT NULL,
    prenomcible VARCHAR (100) NOT NULL,
    datenaissancecible VARCHAR (40) NOT NULL,
    nationnalitecible VARCHAR (40) NOT NULL,
    iduser INT NOT NULL,
    FOREIGN KEY (iduser) REFERENCES client(id)
)

INSERT INTO cible (nomcible, prenomcible, datenaissancecible,nationnalitecible, iduser) VALUES
(
    'pinot',
    'jean-marc',
    '12-02-1989',
    'france',
    '1'
)

DROP TABLE cible;

CREATE TABLE messagerie (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    message VARCHAR(60) NOT NULL,
    userid INT NOT NULL,
    FOREIGN KEY (userid) REFERENCES client(id)
)

INSERT INTO messagerie (id ,message ,userid ) VALUES (
    1,
    'votre mission \"" . $nomMission . "\" a ete atribué a un agent',
    1
)

DROP TABLE messagerie;