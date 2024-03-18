<?php
include_once 'connection-bdd.php';
session_start();

//récupération des champ de form

//modalitées de mission qui sera inscrit separément dans une bdd 
$titre = $_POST['title'];
$but = $_POST['goal'];
$paysMission = $_POST['mission-country'];
$nomCode = $_POST['code-name'];


//info contact ... dans une bdd diférente
$nomContact = $_POST['contact-name'];
$prenomContact = $_POST['contact-firstname'];
$DateNaissanceContact = $_POST['contact-birth-date'];
$NationnaliteContact = $_POST['contact-nationnality'];


//info cible ... dans une bdd diférente
$nom = $_POST['name'];
$prenom = $_POST['firstname'];
$dateDeNaissance = $_POST['birth-date'];
$Nationnalite = $_POST['nationnality'];

//implementation table mission
$sql1 = 'INSERT INTO missions ("titre, but, paysmission, nomdecodemission, userid") VALUE (":titre", ":but", ":paysmission", ":nomdecodemission", ":id")';
$pdo1 = $bdd->prepare($sql1);
$pdo1->bindParam($titre, ':titre');
$pdo1->bindParam($but, ':but');
$pdo1->bindParam($paysMission, ':paysmission');
$pdo1->bindParam($nomCode, ':nomdecodemission');
$pdo1->bindParam($_SESSION['id'], ':id');
//implementation table contact
$sql2 = 'INSERT INTO contact ("nomcontact, prenomcontact, datenaissancecontact, nationnalitecontact, userid") VALUE (":titre", ":but", ":paysmission", ":nomdecodemission", ":id")';
$pdo2 = $bdd->prepare($sql2);
$pdo2->bindParam($nomContact, ':nomcontact');
$pdo2->bindParam($prenomContact, ':prenomcontact');
$pdo2->bindParam($DateNaissanceContact, ':datenaissancecontact');
$pdo2->bindParam($NationnaliteContact, ':nationnalitecontact');
$pdo2->bindParam($_SESSION['id'], ':id');

//implementation table cible
$sql3 = 'INSERT INTO cible ("nomcible, prenomcible, datenaissancecible, nationnalitecible, userid") VALUE (":titre", ":but", ":paysmission", ":nomdecodemission", ":id")';
$pdo3 = $bdd->prepare($sql3);
$pdo3->bindParam($nom, ':nomcible');
$pdo3->bindParam($prenom, ':prenomcible');
$pdo3->bindParam($DateDeNaissance, ':datenaissancecible');
$pdo3->bindParam($Nationnalite, ':nationnalitecible');
$pdo3->bindParam($_SESSION['id'], ':id');
?>