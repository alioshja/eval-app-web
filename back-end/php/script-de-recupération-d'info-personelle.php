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
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    
    // Affichez le nom et le prénom de l'utilisateur
} else {
    echo "Aucun utilisateur trouvé avec cet e-mail.";
}
$img = '';

if ($img = null) {
    $img = 'https://previews.123rf.com/images/afe207/afe2071307/afe207130700241/20888193-anonyme-image-m%C3%A2le-profil.jpg';
}
?>