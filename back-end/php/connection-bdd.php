<?php
$user = 'root';
$password = '';
try {
$bdd = new PDO('mysql:host=localhost;dbname=mercenary', $user, $password);
// Configuration du mode d'erreur PDO pour générer des exceptions
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
echo "La connection a échoué :" . $e->getMessage();
}
?>