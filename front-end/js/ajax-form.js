let form = document.getElementById('inscriptionForm');

document.getElementById('validate').addEventListener("click", function(){
  let tchek = 'ok'; // Initialise tchek à 'ok'

  let email = document.getElementById('email').value;
  if (!emailIsValid(email)) {
    alert('Veuillez entrer une adresse email valide.');
    tchek = ''; // Si l'email n'est pas valide, réinitialise tchek
  }

  let password = document.getElementById('password').value;
  let prenom = document.getElementById('prenom').value;
  let nom = document.getElementById('nom').value;
  
  if (password.length < 10 || prenom.length < 2 || nom.length < 2 || email.length < 10) {
    alert('L\'un de vos champs ne respecte pas la taille requise.');
    tchek = ''; // Si l'une des conditions de taille n'est pas remplie, réinitialise tchek
  } else if (!hasTwoDigits(password)) {
    alert('Votre mot de passe doit contenir au moins 2 chiffres.');
    tchek = ''; // Si le mot de passe ne contient pas deux chiffres, réinitialise tchek
  }

  // Si tchek est toujours 'ok' à ce stade, cela signifie que toutes les validations sont passées avec succès
  if (tchek === 'ok') {
    // Utilisation d'AJAX pour envoyer le formulaire au script PHP
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
    xhr.send("email=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password) + "&prenom=" + encodeURIComponent(prenom) + "&nom=" + encodeURIComponent(nom));
  }
});

function emailIsValid(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function hasTwoDigits(str) {
  return (str.match(/\d/g) || []).length >= 2;
}