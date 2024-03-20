<?php
// Vérifier quel bouton a été cliqué
if (isset($_GET['button'])) {
    $button = $_GET['button'];
    switch ($button) {
        case 'messagerie':
            // Réinitialiser $link en fonction de la messagerie
            $link = '../front-end/php/messagerie.php';
            break;
        case 'interventions-en-cours':
            // Réinitialiser $link en fonction des interventions en cours
            $link = '../front-end/php/interventions-en-cours.php';
            break;
        default:
            // Par défaut, utiliser un lien par défaut
            $link = '../front-end/php/body-compte-perso.php';
            break;
    }
} else {
    // Si aucun bouton n'est spécifié, utiliser un lien par défaut
    $link = '../front-end/php/body-compte-perso.php';
}
echo $link;
?>