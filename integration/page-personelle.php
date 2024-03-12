<?php
$link = '';
include_once '../back-end/php/script-de-recuperation-d\'info-personelle.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../front-end/css/stylesheet.css">
    <meta charset="utf-8" lang="fr">
</head>

</html>

<body>
    <nav>
        <button id="btn-demande-intervention">demander-intervention</button>
        <button id="btn-messagerie">messagerie</button>
        <button id="btn-interventions-en-cours">interventions-en-cours</button>
        <img class="profileImg" src="../images/anonyme-image-mâle-profil.jpg">
    </nav>
    <div id="contenu-dynamique">

</div>
<script>
    let link = '';
    
        // Fonction pour envoyer une requête AJAX
        function sendRequest(buttonId) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == XMLHttpRequest.DONE) {
                    if (xhr.status == 200) {
                        // Récupérer la nouvelle valeur de $link depuis la réponse AJAX
                        link = xhr.responseText;
                        // Mettre à jour la partie de la page avec le contenu du fichier spécifié par $link
                        loadContent(link);
                    }
                }
            };
            xhr.open("GET", "../back-end/php/update_link.php?button=" + buttonId, true);
            xhr.send();
            console.log(link);
        }
        if (link === '') {
            loadContent("../front-end/php/body-compte-perso.php")
        }
        // Fonction pour charger le contenu dynamique dans la page
        function loadContent(link) {
        console.log("Link value:", link);

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu-dynamique").innerHTML = this.responseText;
            }
        };

        if (link === '' || link === undefined) {
            console.log("No link specified, loading default page...");
            xhttp.open("GET", "../front-end/php/body-compte-perso.php", true);
        } else {
            console.log("Loading specified page:", link);
            xhttp.open("GET", link, true);
        }
        xhttp.send();
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
<?php //include_once '../front-end/php/messagerie.php';?>
</body>

</html>