<?php
$user = 'localhost';
$password = '';
try {
$bdd = new PDO('mysql:host=localhost;dbname=test' ,$user ,$password);
// Configuration du mode d'erreur PDO pour générer des exceptions
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
echo $e;
}
?>