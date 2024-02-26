<?php
require_once 'connection-bdd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = filter_var(htmlspecialchars($_POST['name']));
    $email = filter_var(htmlspecialchars($_POST['email']));

    // Validation des données (vous pouvez ajouter d'autres validations au besoin)
    if (empty($email)) {
        echo "L'adresse email est requise.";
    } else {
        // Requête SQL pour vérifier si l'e-mail existe dans la base de données
        $sql = "SELECT * FROM clients WHERE mail = :email";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        // Vérifiez si une ligne est retournée (c'est-à-dire si l'e-mail existe dans la base de données)
        if ($stmt->rowCount() > 0) {
            echo "L'adresse email existe déjà dans la base de données.";
            header("Location: ../../index.php");
exit; // Assurez-vous d'utiliser exit() après la redirection pour arrêter l'exécution du script
        } else {
            echo "L'adresse email n'existe pas dans la base de données.";
        }
    }
}
// Afficher les données récupérées
echo 'Nom: ' . $name . '<br>';
echo 'Email: ' . $email . '<br>';
?>