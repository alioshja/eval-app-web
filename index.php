<!DOCTYPE html>
<html>
<head>
    <meta lang="fr" charset="utf-8">
    <meta content="site spécilalisé dans la mise en relation avec des mercenaires répertoriant diverses missions pour diferentes spécialitées.">
    <link rel="stylesheet" href="front-end/css/stylesheet.css">
    <script src="front-end/js/script-front.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<header>
<?php
include_once "front-end/php/barre-navigation.php";
?>
</header>
<body>
<?php
    // if ($body == 3) {
    //     include_once "front-end/php/body-menu.php";
    // }elseif ($body ==1) {
    //     include_once "front-end/php/form-connection.php";
    // }elseif ($body ==2) {
    //     include_once "front-end/php/form-inscription.php";
    // }else {
    //     include_once "front-end/php/body-menu.php";
    // }
    include_once "front-end/php/body-menu.php";
?>
</body>
<footer>
<?php
include_once "front-end/php/espace-du-bas.php";
?>
</footer>
<script>console.log(body);</script>
</html>