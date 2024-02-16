<?php
require_once 'connection-bdd.php';

 // Vérification si des données ont été envoyées depuis le formulaire
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $valeur = $_POST['valeur'];

    // Préparation de la requête SQL avec une requête préparée
    $sql = "INSERT INTO nom_de_votre_table (nom_colonne) VALUES (:valeur)";
    $stmt = $conn->prepare($sql);

    // Liaison des paramètres et exécution de la requête
    $stmt->bindParam(':valeur', $valeur);
    $stmt->execute();

    echo "Données insérées avec succès dans la base de données.";
}
?>