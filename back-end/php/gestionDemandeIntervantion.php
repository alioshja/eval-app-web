<?php
include_once 'connection-bdd.php';
session_start();

//récupération des champ de form

//id de l'utilisateur
$user_id = $_POST['user_id'];

//modalitées de mission qui sera inscrit separément dans une bdd 
$titre = htmlspecialchars(htmlentities(stripslashes($_POST['title'])));
$but =  htmlspecialchars(htmlentities(stripslashes($_POST['goal'])));
$paysMission =  htmlspecialchars(htmlentities(stripslashes($_POST['mission-country'])));
$nomCode = $_POST['code-name'];


//info contact ... dans une bdd diférente
$nomContact =  htmlspecialchars(htmlentities(stripslashes($_POST['contact-name'])));
$prenomContact =  htmlspecialchars(htmlentities(stripslashes($_POST['contact-firstname'])));
$DateNaissanceContact =  htmlspecialchars(htmlentities(stripslashes($_POST['contact-birth-date'])));
$NationnaliteContact =  htmlspecialchars(htmlentities(stripslashes($_POST['contact-nationnality'])));


//info cible ... dans une bdd diférente
$nom =  htmlspecialchars(htmlentities(stripslashes($_POST['name'])));
$prenom = htmlspecialchars(htmlentities(stripslashes($_POST['firstname'])));
$dateDeNaissance = htmlspecialchars(htmlentities(stripslashes($_POST['birth-date'])));
$Nationnalite = htmlspecialchars(htmlentities(stripslashes($_POST['nationnality'])));

//implementation table mission
$sql1 = 'INSERT INTO missions (titre, but, paysmission, nomdecodemission, userid) VALUE (:titre, :but, :paysmission, :nomdecodemission, :id)';
$pdo1 = $bdd->prepare($sql1);
$pdo1->bindParam(':titre', $titre);
$pdo1->bindParam(':but', $but);
$pdo1->bindParam(':paysmission', $paysMission);
$pdo1->bindParam(':nomdecodemission', $nomCode);
$pdo1->bindParam(':id', $user_id);

$pdo1->execute();
//implementation table contact
$sql2 = 'INSERT INTO contact (nomcontact, prenomcontact, datenaissancecontact, nationnalitecontact, userid) VALUE (:titre, :but, :paysmission, :nomdecodemission, :id)';
$pdo2 = $bdd->prepare($sql2);
$pdo2->bindParam(':nomcontact', $nomContact);
$pdo2->bindParam(':prenomcontact', $prenomContact);
$pdo2->bindParam(':datenaissancecontact', $DateNaissanceContact);
$pdo2->bindParam(':nationnalitecontact', $NationnaliteContact);
$pdo2->bindParam(':id', $user_id);
$pdo2->execute();
//implementation table cible
$sql3 = 'INSERT INTO cible (nomcible, prenomcible, datenaissancecible, nationnalitecible, userid) VALUE (:titre, :but, :paysmission, :nomdecodemission, :id)';
$pdo3 = $bdd->prepare($sql3);
$pdo3->bindParam(':nomcible', $nom);
$pdo3->bindParam(':prenomcible', $prenom);
$pdo3->bindParam(':datenaissancecible', $DateDeNaissance);
$pdo3->bindParam(':nationnalitecible', $Nationnalite);
$pdo3->bindParam(':id', $user_id);
$pdo3->execute();
?>