<?php
require_once 'connection-bdd.php';
session_start();
if (isset($_SESSION['mail'])) {
    $email = $_SESSION['mail'];
}
// Requête SQL pour récupérer le nom et le prénom de l'utilisateur à partir de son e-mail
$sql = "SELECT nom, prenom FROM clients WHERE mail = :email";
$stmt = $bdd->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

// Vérification si des résultats ont été retournés
if ($stmt->rowCount() > 0) {
    // Récupérez le résultat de la requête
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION['nom'] = $row['nom'];
    $_SESSION['prenom'] = $row['prenom'];
    
    // Affichez le nom et le prénom de l'utilisateur
} else {
    echo "Aucun utilisateur trouvé avec cet e-mail.";
}
$img = '';
?>