<?php
require_once 'connection-bdd.php';

// Vérification si des données ont été envoyées depuis le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];

var_dump($_POST);
    // Validation des données (vous devriez ajouter plus de validation selon vos besoins)
    if (empty($email) || empty($password) || empty($prenom) || empty($nom)) {
        // Gérer les cas où des champs obligatoires sont vides
        echo "Tous les champs doivent être remplis.";
        exit; // Arrêter l'exécution du script
    }

    // Préparation de la requête SQL avec une requête préparée pour éviter les injections SQL
    $sql = "INSERT INTO nom_de_votre_table (email, password, prenom, nom) VALUES (:email, :password, :prenom, :nom)";
    $stmt = $conn->prepare($sql);

    // Liaison des paramètres et exécution de la requête
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':nom', $nom);

    // Exécution de la requête préparée
    if ($stmt->execute()) {
        echo "Données insérées avec succès dans la base de données.";
    } else {
        echo "Erreur lors de l'insertion des données dans la base de données.";
    }
}
?>