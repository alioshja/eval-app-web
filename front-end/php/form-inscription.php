<!DOCTYPE html>
<html>
<head>
    <meta lang="fr" charset="utf-8">
</head>
<body>
    <main>
        <h1>inscription</h1>
        <br>
        <form id="inscriptionForm" method="POST" action="../back-end/php/traitement-de-donnees-saisies.php">
            <!--les id servent a récupéré les valeurs saisies par l'utlisateur avant meme validation par celuis la meme-->
            <label>Prénom</label>
            <input type="text" placeholder="albert" name="prenom" id="prenom" required>
            <div id=error_message1></div>

            <br>
            <br>

            <label>Nom</label>
            <input type="text" placeholder="dupont" name="nom" id="nom" required>

            <br>
            <br>

            <label>E-Mail</label>
            <input type="mail" placeholder="mrdupont@mail.fr" name="mail" id="mail" required>
            <div id=error_message2></div>

            <br>
            <br>

            <label>Mot-de-passe</label>
            <input type="password" placeholder="......." name="password" id="password" required>
            <div id=error_message3></div>

            <br>
            <br>

            <label>Confirmation de Mot-de-passe</label>
            <input type="password" placeholder="......." name="password-confirm" id="password-confirm" required>
            <div id=error_message4></div>


            <button type="submit" class="submit-button" id="validate">Valider</button>
            <br>
            <br>
        </form>
    </main>
</body>
</html>