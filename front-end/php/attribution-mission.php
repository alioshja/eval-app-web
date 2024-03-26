<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"  lang="fr">
    <meta content="récuperation des missions en attente d'attribution d'agent">
    <link href="../css/stylesheet.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <button onclick="window.location.href ='../../integration/page-personelle.php';">Revenir au menu</button>
        </nav>
    </header>
    <main>
        <h1>Missions en attente d'agent.</h1>
        <?php
        include_once '../../back-end/php/connection-bdd.php';
        include_once '../../back-end/php/gestion-attribution-mission.php';
        ?>
    </main>
    
</body>
</html>