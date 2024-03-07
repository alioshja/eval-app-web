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

CREATE TABLE administrateur (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    mail VARCHAR(70) NOT NULL,
    password VARCHAR(60) NOT NULL
)

DROP TABLE administrateur;

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

DROP TABLE clients;

CREATE TABLE imagesp (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    img VARCHAR(200),
    userid INT NOT NULL,
FOREIGN KEY (userid) REFERENCES clients(id)
);

DROP TABLE imagesp;