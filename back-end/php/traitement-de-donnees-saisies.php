<!DOCTYPE html>
<html>
<meta lang="fr">
<link rel="stylesheet" href="../../front-end/css/stylesheet.css">

<body>
    <h1>Inscription validée</h1>
    <br>
    <br>
    <button class="center"><a href="../../index.php">revenir au menu</a></button>
</body>

</html>
<?php
require_once 'connection-bdd.php';
// Vérification si des données ont été envoyées depuis le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $email = $_POST['mail'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];


    // Validation des données (vous devriez ajouter plus de validation selon vos besoins)
    if (empty($email) || empty($password) || empty($prenom) || empty($nom)) {
        // Gérer les cas où des champs obligatoires sont vides
        echo "Tous les champs doivent être remplis.";
        exit; // Arrêter l'exécution du script
    }

    // Préparation de la requête SQL avec une requête préparée pour éviter les injections SQL
    $sql = "INSERT INTO clients (mail, password, prenom, nom) VALUES (:email, :password, :prenom, :nom)";
    $stmt = $bdd->prepare($sql);

    // Liaison des paramètres et exécution de la requête
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':nom', $nom);

    // Exécution de la requête préparée
    if ($stmt->execute()) {
        echo "<p class='center'>Données insérées avec succès dans la base de données.</p>";
    } else {
        echo "<p class='center'>Erreur lors de l'insertion des données, veuillez recharger le site et recommencer.</p>";
    }
}
?>