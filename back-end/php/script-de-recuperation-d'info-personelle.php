<?php
require_once 'connection-bdd.php';
session_start();
if (isset($_SESSION['mail'])) {
    $email = $_SESSION['mail'];
}
// Requête SQL pour récupérer le nom et le prénom de l'utilisateur à partir de son e-mail
$sql = "SELECT id, nom, prenom FROM clients WHERE mail = :email";
$stmt = $bdd->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

// Vérification si des résultats ont été retournés
if ($stmt->rowCount() > 0) {
    // Récupérez le résultat de la requête
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION['nom'] = $row['nom'];
    $_SESSION['prenom'] = $row['prenom'];
    $_SESSION['id'] = $row['id'];
    
    // Affichez le nom et le prénom de l'utilisateur
} else {
    echo "Aucun utilisateur trouvé avec cet e-mail.";
}

$sql2 = "SELECT role FROM roles WHERE userid = :userid";
$stmt2 = $bdd->prepare($sql2);
$stmt2->bindParam(':userid', $_SESSION['id']);
$stmt2->execute();

if ($stmt2->rowCount() > 0) {
    $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
    $_SESSION['role'] = $row2['role'];
}else;

$img = '';
?>