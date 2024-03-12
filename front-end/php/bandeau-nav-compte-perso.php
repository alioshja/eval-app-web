<!Doctype html>
<html>
    <meta charset="utf-8" lang="fr">
    <body>
        <nav>
            <button id="btn-demande-intervention">demander-intervention</button>
            <button id="btn-messagerie">messagerie</button>
            <button id="btn-interventions-en-cours">interventions-en-cours</button>
            <img class="profileImg" src="../images/anonyme-image-mâle-profil.jpg" >
        </nav>
        <script>
   // Fonction pour envoyer une requête AJAX
   function sendRequest(buttonId) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == XMLHttpRequest.DONE) {
                if (xhr.status == 200) {
                    // Redirection vers la page personnelle avec la variable $link mise à jour
                    window.location.href = "../../integration/page-personnelle.php?link=" + xhr.responseText;
                }
            }
        };
        xhr.open("GET", "../back-end/php/update_link.php?button=" + buttonId, true);
        xhr.send();
    }

    // Ajouter des gestionnaires d'événements à chaque bouton
    document.getElementById('btn-demande-intervention').addEventListener('click', function() {
        sendRequest('demande-intervention');
    });

    document.getElementById('btn-messagerie').addEventListener('click', function() {
        sendRequest('messagerie');
    });

    document.getElementById('btn-interventions-en-cours').addEventListener('click', function() {
        sendRequest('interventions-en-cours');
    });
</script>
    </body>
</html>