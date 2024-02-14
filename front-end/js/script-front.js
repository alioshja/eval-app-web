document.getElementById("inscriptionForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Empêche le comportement par défaut du formulaire

    // Récupérer les valeurs des champs du formulaire
    var prenom = document.getElementById("prenom").value;
    var nom = document.getElementById("nom").value;
    var mail = document.getElementById("mail").value;
    var password = document.getElementById("password").value;

    // Créer un objet contenant les données à envoyer
    var formData = new FormData();
    formData.append("prenom", prenom);
    formData.append("nom", nom);
    formData.append("mail", mail);
    formData.append("password", password);

    // Effectuer une requête AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../../back-end/php/connection-bdd.php", true);
    xhr.onload = function() {
        if (xhr.status == 200) {
            // Réponse du serveur
            console.log(xhr.responseText);
        }
    };
    xhr.send(formData);
});