<!DOCTYPE html>
<html>

<head>
    <meta lang="fr" chaset="utf-8">
</head>
<?php session_start(); ?>
<body>
    <main>
        <h1>
            Demande d'intervention
        </h1>
        <form action="../../back-end/php/gestionDemandeIntervention.php" method="post">
            <label for="titre">Tire de la mission</label>
            <input type="text" name="titre" id="title" require>
            <br>
            <label for="description">Description de la mission</label>
            <input type="textarea" name="description" id="goal" require>
            <br>
            <label for="pays-mission">Pays de la mission</label>
            <input type="text" name="pays-mission" id="mission-country" require>
            <br>
            <label for="nom-de-code">Nom de code</label>
            <input type="text" name="nom-de-code" id="code-name" require>
            <br>
            <hr>
            <br>
            <label for="nom-contact">Nom du contact(vous)</label>
            <input type="text" name="nom-contact" id="contact-name" require>
            <br>
            <label for="prenom-contact">Prenom du contact</label>
            <input type="text" name="prenom-contact" id="contact-firstname" require>
            <br>
            <label for="date-de-naissance-contact">Date de naissance du contact</label>
            <input require type="date" name="date-de-naissance-contact" id="contact-birth-date">
            <br>
            <label for="pays-contact">Nationnalitée du contact</label>
            <input type="text" name="pays-contact" id="contact-nationnality" require>
            <br>
            <hr>
            <br>
            <label for="nom">Nom de la cible</label>
            <input type="text" name="nom" id="name" require>
            <br>
            <label for="prenom">Prenom de la cible</label>
            <input type="text" name="prenom" id="firstname" require>
            <br>
            <label for="date-de-naissance">Date de naissance de la cible</label>
            <input type="date" name="date-de-naissance" id="birth-date" require>
            <br>
            <label for="pays">Nationnalitée de la cible</label>
            <input type="text" name="pays" id="nationnality" require>
            <br>
            <br>
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">
            <button type="submit">Valider</button>
            <br>
        </form>
    </main>
</body>

</html>