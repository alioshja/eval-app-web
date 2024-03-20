<!DOCTYPE html>
<html>

<head>
    <meta lang="fr" chaset="utf-8">
    <link href="../../front-end/css/stylesheet.css" rel="stylesheet">
</head>
<?php session_start(); ?>
<body>
    <main>
        <nav>
        <button onclick = 'window.location.href = "../../integration/page-personelle.php";'>menu</button>
        </nav>
        <h1>
            Demande d'intervention
        </h1>
        <form action="../../back-end/php/gestionDemandeIntervention.php" method="post">
            <label for="title">Tire de la mission</label>
            <input type="text" name="titre" id="title" require>
            <br>
            <label for="goal">Description de la mission</label>
            <input type="textarea" name="description" id="goal" require>
            <br>
            <label for="mission-country">Pays de la mission</label>
            <input type="text" name="pays-mission" id="mission-country" require>
            <br>
            <label for="code-name">Nom de code</label>
            <input type="text" name="nom-de-code" id="code-name" require>
            <br>
            <hr>
            <br>
            <label for="contact-name">Nom du contact(vous)</label>
            <input type="text" name="nom-contact" id="contact-name" require>
            <br>
            <label for="contact-firstname">Prenom du contact</label>
            <input type="text" name="prenom-contact" id="contact-firstname" require>
            <br>
            <label for="contact-birth-date">Date de naissance du contact</label>
            <input require type="date" name="date-de-naissance-contact" id="contact-birth-date">
            <br>
            <label for="contact-nationnality">Nationnalitée du contact</label>
            <input type="text" name="pays-contact" id="contact-nationnality" require>
            <br>
            <hr>
            <br>
            <label for="name">Nom de la cible</label>
            <input type="text" name="nom" id="name" require>
            <br>
            <label for="firstname">Prenom de la cible</label>
            <input type="text" name="prenom" id="firstname" require>
            <br>
            <label for="birth-date">Date de naissance de la cible</label>
            <input type="date" name="date-de-naissance" id="birth-date" require>
            <br>
            <label for="nationnality">Nationnalitée de la cible</label>
            <input type="text" name="pays" id="nationnality" require>
            <br>
            <br>
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['id'];?>">
            <button type="submit">Valider</button>
            <br>
        </form>
    </main>
</body>

</html>