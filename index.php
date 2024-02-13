<!DOCTYPE html>
<html>
<head>
    <meta lang="fr" charset="utf-8">
    <meta content="site spécilalisé dans la mise en relation avec des mercenaires répertoriant diverses missions pour diferentes spécialitées.">
    <link rel="stylesheet" href="front-end/css/stylesheet.css">
    <script src="front-end/js/script-front.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="front-end/js/ajax-spa.js"></script>
</head>
<body>
<header>
<?php
include_once "front-end/php/barre-navigation.php";
?>
</header>
<?php
if(isset($_POST['valeur'])) {
    // Récupère la valeur envoyée via AJAX
    $valeur = $_POST['valeur'];
    
    echo "La valeur envoyée est : " . $valeur;
} else {
    // Si la valeur "valeur" n'a pas été envoyée, affiche un message d'erreur
    echo "Aucune valeur n'a été envoyée.";
}
    if ($body == 3) {
        include_once "front-end/php/body-menu.php";
    }elseif ($body ==1) {
        include_once "front-end/php/form-connection.php";
    }elseif ($body ==2) {
        include_once "front-end/php/form-inscription.php";
    }else {
        include_once "front-end/php/body-menu.php";
    }
    var_dump($_POST);
?>
<?php
include_once "front-end/php/espace-du-bas.php";
?>
</body>
</html>