<!DOCTYPE html>
<html>
    <head>
        <meta chaset="utf-8" lang="fr">
        <link href="../css/stylesheet.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav>
                <button onclick="window.location.href = '../../integration/page-personelle.php'">Revenir au menu</button>
            </nav>
        </header>
        <main>
        <h1>Vos messages</h1>
            <?php
            session_start();
            include_once '../../back-end/php/connection-bdd.php';
            $user_id = $_SESSION['id'];

            $sql = 'SELECT * FROM messagerie WHERE userid = :userid';
            $stmt= $bdd->prepare($sql);
            $stmt->bindParam(':userid', $user_id);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {

                // Affichage des données pour chaque ligne correspondante
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<p>" . $row['message'] . "</p>";
                }
            }//faire des bulles différentes pour chaques messages
        
            ?>
        </main>
    </body>
</html>