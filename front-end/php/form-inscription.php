<!DOCTYPE html>
<html>
<head>
    <meta lang="fr" charset="utf-8">
    <script src="front-end\js\ajax-form.js"></script>
</head>
<body>
    <main>
<h1>inscription</h1>
<br>
<form id="inscriptionForm">
    <label for="prenom">Prénom</label>
    <input type="text" placeholder="albert" name="prenom" id="prenom" required>

    <label for="nom">Nom</label>
    <input type="text" placeholder="dupont" name="nom" id="nom" required>
    
    <label for="mail">E-Mail</label>
    <input type="mail" placeholder="mrdupont@mail.fr" name="mail" id="mail" required>

    <label for="password">Mot-de-passe</label>
    <input type="password" placeholder="Lecielbleu1234" name="password" id="password" required>

    <button type="submit">Valider</button>
</form>
</main>
</body>
</html>