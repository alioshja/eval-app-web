<?php
include_once 'connection-bdd.php';
session_start();

//récupération des champ de form
//id de l'utilisateur
$user_id = $_POST['user_id'];

//modalitées de mission qui sera inscrit separément dans une bdd 
$titre = htmlspecialchars(htmlentities(stripslashes($_POST['titre'])));
$but =  htmlspecialchars(htmlentities(stripslashes($_POST['description'])));
$paysMission =  htmlspecialchars(htmlentities(stripslashes($_POST['pays-mission'])));
$nomCode = htmlspecialchars(htmlentities(stripslashes($_POST['nom-de-code'])));


//info contact ... dans une bdd diférente
$nomContact =  htmlspecialchars(htmlentities(stripslashes($_POST['nom-contact'])));
$prenomContact =  htmlspecialchars(htmlentities(stripslashes($_POST['prenom-contact'])));
$DateNaissanceContact =  htmlspecialchars(htmlentities(stripslashes($_POST['date-de-naissance-contact'])));
$NationnaliteContact =  htmlspecialchars(htmlentities(stripslashes($_POST['pays-contact'])));


//info cible ... dans une bdd diférente
$nom =  htmlspecialchars(htmlentities(stripslashes($_POST['nom'])));
$prenom = htmlspecialchars(htmlentities(stripslashes($_POST['prenom'])));
$dateDeNaissance = htmlspecialchars(htmlentities(stripslashes($_POST['date-de-naissance'])));
$Nationnalite = htmlspecialchars(htmlentities(stripslashes($_POST['pays'])));

//implementation table mission
$sql1 = 'INSERT INTO missions (titre, but, paysmission, nomdecodemission, iduser) VALUE (:titre, :but, :paysmission, :nomdecodemission, :id)';
$pdo1 = $bdd->prepare($sql1);
$pdo1->bindParam(':titre', $titre);
$pdo1->bindParam(':but', $but);
$pdo1->bindParam(':paysmission', $paysMission);
$pdo1->bindParam(':nomdecodemission', $nomCode);
$pdo1->bindParam(':id', $user_id);
$pdo1->execute();
//implementation table contact
$sql2 = 'INSERT INTO contact (nomcontact, prenomcontact, datenaissancecontact, nationnalitecontact, iduser) VALUE (:nomcontact, :prenomcontact, :datenaissancecontact, :nationnalitecontact, :id)';
$pdo2 = $bdd->prepare($sql2);
$pdo2->bindParam(':nomcontact', $nomContact);
$pdo2->bindParam(':prenomcontact', $prenomContact);
$pdo2->bindParam(':datenaissancecontact', $DateNaissanceContact);
$pdo2->bindParam(':nationnalitecontact', $NationnaliteContact);
$pdo2->bindParam(':id', $user_id);
$pdo2->execute();
//implementation table cible
$sql3 = 'INSERT INTO cible (nomcible, prenomcible, datenaissancecible, nationnalitecible, iduser) VALUE (:nomcible, :prenomcible, :datenaissancecible, :nationnalitecible, :id)';
$pdo3 = $bdd->prepare($sql3);
$pdo3->bindParam(':nomcible', $nom);
$pdo3->bindParam(':prenomcible', $prenom);
$pdo3->bindParam(':datenaissancecible', $dateDeNaissance);
$pdo3->bindParam(':nationnalitecible', $Nationnalite);
$pdo3->bindParam(':id', $user_id);
$pdo3->execute();
?>