// Utilisation d'AJAX pour envoyer le form au script PHP
function ajax() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../../back-end/php/traitement-de-donnees-saisies.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // La requête a été envoyée avec succès
          console.log("Requête AJAX réussie !");
          // Vous pouvez faire quelque chose ici avec la réponse si nécessaire
        } else {
          // Il y a eu une erreur lors de l'envoi de la requête
          console.error("Erreur lors de la requête AJAX !");
        }
      }
    };
    console.log(valeur);
    xhr.send("valeur=" + encodeURIComponent(valeur));
  }
//traitement des données avant envoi du form dans bdd.
  var email = document.getElementById('email').value;
  if (!emailIsValid(email)) {
      alert('Veuillez entrer une adresse email valide.');
      return false;
  }
