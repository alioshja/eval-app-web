<!DOCTYPE html>
<html>
<head>
    <meta lang="fr" charset="utf-8">
</head>
<body>
    <main>
<h1>connection</h1>
<br>
<form id="myForm" method="POST" action="../back-end/php/verification-de-connection.php">
    <label>E-Mail</label>
    <input id='mail' type="email" placeholder="mrdupont@mail.fr" name="mail">

    <br>
    <br>

    <label>Mot-de-passe</label>
    <input id='pass' type="password" placeholder="Lecielbleu1234" name="password">

    <br>
    <br>

    <button class="submit-button" type="submit">Connection</button>
</form>
</main>
<script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Empêche la soumission par défaut du formulaire

            // Récupère les données du formulaire
            let formData = new FormData(this);

            // Envoie les données à une page PHP via AJAX
            fetch('../back-end/php/verification-de-connection.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log(data); // Affiche la réponse du serveur
            })
            .catch(error => {
                console.error('Erreur:', error);
            });
        });
    </script>
</body>
</html>