<!DOCTYPE html>
<html>
<head>
    <meta lang="fr" charset="utf-8">
</head>
<body>
    <main>
        <h1>inscription</h1>
        <br>
        <form id="inscriptionForm">
            <label>Prénom</label>
            <input type="text" placeholder="albert" name="prenom" id="prenom" required>

            <br>
            <br>

            <label>Nom</label>
            <input type="text" placeholder="dupont" name="nom" id="nom" required>

            <br>
            <br>

            <label>E-Mail</label>
            <input type="mail" placeholder="mrdupont@mail.fr" name="mail" id="mail" required>

            <br>
            <br>

            <label>Mot-de-passe</label>
            <input type="password" placeholder="Lecielbleu1234" name="password" id="password" required>

            <br>
            <br>

            <button class="submit-button" type="submit">Valider</button>
        </form>
    </main>
</body>
</html>