<?php 
$sql1 = 'SELECT * FROM missions';
$stmt1 = $bdd->prepare($sql1);
$stmt1->execute();

if ($stmt1->row_count() > 0) {

    while ($row = $stmt1->fetch()) {
        echo '<p> </p>';
        echo '<p> </p>';
        echo '<p> </p>';
        echo '<p> </p>';
        echo '<p> </p>';
        echo '<p> </p>';
        echo '<p> </p>';
        echo '<button>Accepter</button>';
    }
}
?>