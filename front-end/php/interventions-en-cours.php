<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" lang="fr">
        <link href="../css/stylesheet.css" rel="stylesheet">
    </head>
    <body>
    <header>
        <nav>
        <button onclick="window.location.href = '../../integration/page-personelle.php';">Retourner au menu</button>
        </nav>
    </header>
    <main>
        <h1>Vos demandes d'intervention.</h1>
        <?php 
        //partie de recupération dans la bdd.
            include_once '../../back-end/php/connection-bdd.php';
            session_start();

            $user_id = $_SESSION['id'];
try {
    // Requête SQL pour récupérer les données correspondant à l'ID de l'utilisateur connecté
    $sql = "SELECT * FROM missions WHERE iduser = :user_id";
    $sql2 = "SELECT * FROM contact WHERE iduser = :user_id";
    $sql3 = "SELECT * FROM cible WHERE iduser = :user_id";

    // Préparation de la requête
    $stmt = $bdd->prepare($sql);
    $stmt2 = $bdd->prepare($sql2);
    $stmt3 = $bdd->prepare($sql3);

    // Liaison des paramètres
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt2->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt3->bindParam(':user_id', $user_id, PDO::PARAM_INT);

    // Exécution de la requête
    $stmt->execute();
    $stmt2->execute();
    $stmt3->execute();

    // Vérification s'il y a des résultats
    // stmt mission
    if ($stmt->rowCount() > 0) {
        // Affichage des données pour chaque ligne correspondante
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<h2>vos informations</h2>';
            //var_dump($row);
            echo "<p>Titre:   " . $row['titre'].  "    - Objectifs: " . $row['but']. "<br><br>Pays mission:   ". $row['paysmission'] . "   Nom de code:   " . $row['nomdecodemission'] . "</p>";
            // Créer un bouton pour chaque ligne avec l'ID correspondant
            echo "<button onclick=''>annuler mission</button>";
            echo "<br><br>";
        }
    } else {
        echo "Aucun résultat trouvé.";
    }//ok

    //stmt2 contact
    if ($stmt2->rowCount() > 0) {
        // Affichage des données pour chaque ligne correspondante
        while ($row2 = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
            echo '<h2>vos informations</h2>';
            echo "Nom: " . $row2['nomcontact'].  " - Prénom: " . $row2['prenomcontact']. "<br><br>Date de naissance ". $row2['datenaissancecontact'] . "Nationnalité" . $row2['nationnalitecontact'];
            // Créer un bouton pour chaque ligne avec l'ID correspondant
            echo "<button onclick=''>annuler mission</button>";
            echo "<br><br>";
        }
    } else {
        echo "Aucun résultat trouvé.";
    }

    // stmt3 cibles
    if ($stmt->rowCount() > 0) {
        // Affichage des données pour chaque ligne correspondante
        while ($row3 = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
            echo '<h2>vos informations</h2>';
            echo "Nom: " . $row3['nomcontact'].  " - Prénom: " . $row3['prenomcontact']. "<br><br>Date de naissance ". $row3['datenaissancecontact'] . "Nationnalité" . $row3['nationnalitecontact'];
            // Créer un bouton pour chaque ligne avec l'ID correspondant
            echo "<button onclick=''>annuler mission</button>";
            echo "<br><br>";
        }
    } else {
        echo "Aucun résultat trouvé.";
    }
} catch(PDOException $e) {
    echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
}

// Fermeture de la connexion à la base de données
$bdd = null;
?>

    </main>
    </body>
</html>