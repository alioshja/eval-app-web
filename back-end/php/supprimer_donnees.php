<?php
// Inclure le fichier de connexion à la base de données
include_once 'connection-bdd.php';
session_start();

// Supprimer les données des tables missions, contact et cible
// Vous pouvez utiliser le code de suppression précédemment fourni ici
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Suppression des données des tables missions, contact et cible pour l'utilisateur actuel
    $del_id = $_SESSION['iddeleate'];

    // Requête SQL pour supprimer les missions de l'utilisateur
    $sql_delete_missions = "DELETE FROM missions WHERE id = :del_id";
    $stmt_delete_missions = $bdd->prepare($sql_delete_missions);
    $stmt_delete_missions->bindParam(':del_id', $del_id, PDO::PARAM_INT);
    $stmt_delete_missions->execute();

    // Requête SQL pour supprimer les contacts de l'utilisateur
    $sql_delete_contact = "DELETE FROM contact WHERE id = :del_id";
    $stmt_delete_contact = $bdd->prepare($sql_delete_contact);
    $stmt_delete_contact->bindParam(':del_id', $del_id, PDO::PARAM_INT);
    $stmt_delete_contact->execute();

    // Requête SQL pour supprimer les cibles de l'utilisateur
    $sql_delete_cible = "DELETE FROM cible WHERE id = :del_id";
    $stmt_delete_cible = $bdd->prepare($sql_delete_cible);
    $stmt_delete_cible->bindParam(':del_id', $del_id, PDO::PARAM_INT);
    $stmt_delete_cible->execute();

    // Vérifier si des données ont été supprimées avec succès
    if ($stmt_delete_missions->rowCount() > 0 || $stmt_delete_contact->rowCount() > 0 || $stmt_delete_cible->rowCount() > 0) {
        echo "Les données ont été supprimées avec succès.";
        $_SESSION['responce'] = 'ok';
        echo "success";
    } else {
        echo "Aucune donnée à supprimer.";
    }
} else {
    // Si la méthode de requête n'est pas POST, renvoyer une erreur
    echo "Erreur : méthode de requête non autorisée.";
}

// Fermeture de la connexion à la base de données (si nécessaire)
$bdd = null;

?>