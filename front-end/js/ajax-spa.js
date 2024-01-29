// Utilisation d'AJAX pour envoyer la variable au script PHP
function ajax() {
    $.ajax({
        type: 'POST',
        url: '../../index.php',
        data: {
            body
        },
        success: function(response) {
            console.log('Réponse du serveur :', response);
        },
        error: function(error) {
            console.error('Erreur lors de la requête AJAX :', error);
        }
    });
};