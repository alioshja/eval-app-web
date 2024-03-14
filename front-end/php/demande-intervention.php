<!DOCTYPE html>
<html>

<head>
    <meta lang="fr" chaset="utf-8">
</head>

<body>
    <main>
        <h1>
            Demande d'intervention
        </h1>
        <form action="../../back-end/php/gestion-demande-intervention.php" method="post">
            <label for="titre">Tire de la mission</label>
            <input type="text" name="titre" id="title">
            <br>
            <label for="description">Description de la mission</label>
            <input type="textarea" name="description" id=goal>
            <br>
            <label for=pays-mission>Pays de la mission</label>
            <input type="text" name="pays-mission" id="mission-country">
            <br>
            <label for="nom-de-code">Nom de code</label>
            <input type="text" name="nom-de-code" id="code-name">
            <br>
            <hr>
            <br>
            <label for="nom-contact">Nom du contact(vous)</label>
            <input type="text" name="nom-contact" id="contact-name">
            <br>
            <label for="prenom-contact">Prenom du contact</label>
            <input type="text" name="prenom-contact" id=contact-firstname>
            <br>
            <label for=date-de-naissance-contact>Date de naissance du contact</label>
            <input type="text" name="date-de-naissance-contact" id="contact-birth-date">
            <br>
            <label for="pays-contact">Nationnalitée du contact</label>
            <input type="text" name="pays-contact" id="contact-nationnality">
            <br>
            <hr>
            <br>
            <label for="nom">Nom de la cible</label>
            <input type="text" name="nom" id="name">
            <br>
            <label for="prenom">Prenom de la cible</label>
            <input type="text" name="prenom" id=firstname>
            <br>
            <label for=date-de-naissance>Date de naissance de la cible</label>
            <input type="text" name="date-de-naissance" id="birth-date">
            <br>
            <label for="pays">Nationnalitée de la cible</label>
            <input type="text" name="pays" id="nationnality">
            <br>
            <br>
            <button type="submit">Valider</button>
            <br>
        </form>
    </main>
</body>

</html>