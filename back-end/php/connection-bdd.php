<?php
$user = 'localhost';
$password = '';
try {
$bdd = NEW PDO('mysql:host=localhost;dbname=test' ,$user ,$password);
} catch(PDOException $e) {
echo $e;
}
?>