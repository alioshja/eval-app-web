<!DOCTYPE html>
<html>
<head>
    <meta lang="fr" charset="utf-8">
</head>
<nav>

<button class="nav-case" onclick="burger()"><img class="burger" src="images/menu-burger.jpg"></button>
<form id="divNav"></form>
<?php
if(isset($_POST['valeur'])) {
    // Récupère la valeur envoyée via AJAX
    $valeur = $_POST['valeur'];
    
    echo "La valeur envoyée est : " . $valeur;
} else {
    // Si la valeur "valeur" n'a pas été envoyée, affiche un message d'erreur
    echo "Aucune valeur n'a été envoyée.";
}
?>
</nav>
</html>