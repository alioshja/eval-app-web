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
    <?php
    if ($_SESSION['role'] == null) {
    echo '<nav>';
    echo '<button onclick="window.location.href = \'../front-end/php/demande-intervention.php\';">demander-intervention</button>';
    echo '<button onclick="window.location.href = \'../front-end/php/messagerie.php\';">messagerie</button>';
    echo '<button onclick="window.location.href = \'../front-end/php/interventions-en-cours.php\';">interventions-en-cours</button>';
    echo '<img class="profileImg" src="../images/anonyme-image-mâle-profil.jpg">';
    echo '</nav>';
    }else if ($_SESSION['role'] == 'mercenaire') {
        echo '<nav>';
        echo '<button onclick="window.location.href = \'.php\';">Chercher-intervention</button>';
        echo '<button onclick="window.location.href = \'../front-end/php/messagerie.php\';">messagerie</button>';
        echo '<button onclick="window.location.href = \'.php\';">Mes missions</button>';
        echo '<img class="profileImg" src="../images/anonyme-image-mâle-profil.jpg">';
        echo '</nav>';
    }else if ($_SESSION['role'] == 'modo') {
        echo '<nav>';
        echo '<button onclick="window.location.href = \'.php\';">Chercher-utilisateur</button>';
        echo '<button onclick="window.location.href = \'../front-end/php/messagerie.php\';">messagerie</button>';
        echo '<img class="profileImg" src="../images/anonyme-image-mâle-profil.jpg">';
        echo '</nav>';
    };
    ?>
    <div>
<?php include_once '../front-end/php/body-compte-perso.php' ?>
</div>

</body>

</html>