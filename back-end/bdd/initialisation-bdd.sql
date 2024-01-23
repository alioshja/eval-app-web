CREATE NEW DATABASE merecenary.com;

CREATE TABLE agents (
    id INT NOT NULL AUTO_INCREMENT,
    code INT NOT NULL,
    specilisation VARCHAR(60) NOT NULL,
    pays VARCHAR(50)
)

CREATE TABLE administrateur (
    id INT NOT NULL AUTO_INCREMENT,
    mail VARCHAR(70) NOT NULL,
    password VARCHAR(60) NOT NULL
)

CREATE TABLE planques (
    id INT NOT NULL AUTO_INCREMENT,
    pays VARCHAR(50) NOT NULL,
    code INT NOT NULL,
    pole VARCHAR(20) NOT NULL
)

CREATE TABLE clients (
    id INT NOT NULL AUTO_INCREMENT,
    mail VARCHAR(70) NOT NULL,
    password VARCHAR(80),
    nomDeCode VARCHAR(50)
)