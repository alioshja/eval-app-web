<!DOCTYPE html>
<html>
    <head>
    <meta lang="fr" charset="utf-8">
    <meta content="site spécilalisé dans la mise en relation avec des mercenaires répertoriant diverses missions pour diferentes spécialitées.">
    <link rel="stylesheet" href="../front-end/css/stylesheet.css">
    <script src="../front-end/js/ajax-form.js"></script>
    </head>
<body>
<header>
<nav>
<button class="nav-case" onclick="burger(2)"><img class="burger" src="../images/menu-burger.jpg"></button>
<div id="divNav"></div>
    <script src="../front-end/js/script-front.js"></script>
    <!--<script src="../front-end/js/ajax-form.js"></script>-->
</nav>
</header>
<?php
require_once "../back-end/php/traitement-de-donnees-saisies.php";
include_once "../front-end/php/form-inscription.php";
include_once "../front-end/php/espace-du-bas.php";
?>
</body>
</html>