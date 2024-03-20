<?php
$link = '';
include_once '../back-end/php/script-de-recuperation-d\'info-personelle.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../front-end/css/stylesheet.css">
    <meta charset="utf-8" lang="fr">
</head>

</html>

<body>
    <nav>
        <button onclick="window.location.href = '../front-end/php/demande-intervention.php';">demander-intervention</button>
        <button onclick="window.location.href = '../front-end/php/messagerie.php';">messagerie</button>
        <button onclick="window.location.href = '../front-end/php/interventions-en-cours.php';">interventions-en-cours</button>
        <img class="profileImg" src="../images/anonyme-image-mâle-profil.jpg">
    </nav>
    <div>
<?php include_once '../front-end/php/body-compte-perso.php' ?>
</div>

</body>

</html>