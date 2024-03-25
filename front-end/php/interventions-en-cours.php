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
        $id_mission = '';
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
                    $id_mission = $row['id'];
                    $_SESSION['iddeleate'] = $id_mission;
                    echo '<h2>Intitulé mission</h2>';
                    //var_dump($row);
                    echo "<p>Titre:   " . $row['titre'] .  "    - Objectifs: " . $row['but'] . "<br><br>Pays mission:   " . $row['paysmission'] . "   Nom de code:   " . $row['nomdecodemission'] . "</p>";
                    // Créer un bouton pour chaque ligne avec l'ID correspondant
                    echo "<br><br>";
                    //stmt2 contact

                    if ($stmt2->rowCount() > 0) {
                        // Affichage des données pour chaque ligne correspondante
                        ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC));
                            echo '<h2 style="h2">Vos informations</h2>';
                            echo "<p>Nom: " . $row2['nomcontact'] .  " - Prénom: " . $row2['prenomcontact'] . "<br><br>Date de naissance " . $row2['datenaissancecontact'] . "Nationnalité" . $row2['nationnalitecontact'] . "</p>";
                            // Créer un bouton pour chaque ligne avec l'ID correspondant
                            echo "<br>";
                            echo "<br><br>";
                        }
                    // stmt3 cibles
                    if ($stmt3->rowCount() > 0) {
                        // Affichage des données pour chaque ligne correspondante
                        $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            echo '<h2 style="h2">Info cible</h2>';
                            echo "<p>Nom: " . $row3['nomcible'] .  " - Prénom: " . $row3['prenomcible'] . "<br><br>Date de naissance " . $row3['datenaissancecible'] . "Nationnalité" . $row3['nationnalitecible'] . "</p>";
                            // Créer un bouton pour chaque ligne avec l'ID correspondant
                            echo "<br>";
                            echo "<button class='supprimer-donnees' data-id='" . $id_mission . "'>annuler mission</button>";
                            echo "<br><br>";
                        
                    }
                }
            } else {
                echo "Aucun résultat trouvé.";
            } //ok

        } catch (PDOException $e) {
            echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
        };
        if (isset($_SESSION['responce'])) {
     if ($_SESSION['responce'] == 'ok') {
         header("Refresh:0");
         $_SESSION['responce'] = null;
     }else {$_SESSION['responce'] == null;} 
    };

        // Fermeture de la connexion à la base de données
        $bdd = null;
        ?>
 <script>
    document.addEventListener("DOMContentLoaded", function() {
    var boutonsSupprimer = document.querySelectorAll(".supprimer-donnees");
    boutonsSupprimer.forEach(function(bouton) {
        bouton.addEventListener("click", function() {
            var idMission = this.getAttribute("data-id");
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "../../back-end/php/supprimer_donnees.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200 || xhr.responseText === "success") {
                        console.log("Suppression réussie");
                        // Recharge la page après suppression seulement si la suppression a réussi
                        location.reload();
                    } else {
                        console.error('Échec de la suppression : ' + xhr.status);
                    }
                }
            };
            xhr.send();
        });
    });
});
</script>

    </main>
</body>

</html>