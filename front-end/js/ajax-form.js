let id = document.getElementById('validate');
let tchek = 'ok'; // Initialise tchek à 'ok'
let email = document.getElementById('mail').value;

let p1 = document.createElement('p');
let p2 = document.createElement('p');
let p3 = document.createElement('p');
let p4 = document.createElement('p');
  if (!emailIsValid(email)) {
    p1.textContent = 'Veuillez entrer une adresse email valide.';
    tchek = ''; // Si l'email n'est pas valide, réinitialise tchek
    document.getElementById('error_message2').appendChild(p1);
  }else {p1.textContent = '';}

  let password = document.getElementById('password').value;
  let passwordConfirm = document.getElementById('password-confirm').value;
  let prenom = document.getElementById('prenom').value;
  let nom = document.getElementById('nom').value;

  if (password.length < 10 || prenom.length < 2 || nom.length < 2 || email.length < 10) {
    p2.textContent = 'L\'un de vos champs ne respecte pas la taille requise. Le mot de passe et le mail doit en avoir 10 caractères, le nom et le prenom 2,';
    document.getElementById('error_message1').appendChild(p2);
    tchek = ''; // Si l'une des conditions de taille n'est pas remplie, réinitialise tchek
  }else {p2.textContent = '';}
  if (!hasTwoDigits(password)) {
    p3.textContent = 'Votre mot de passe doit contenir au moins 2 chiffres.';
    document.getElementById('error_message3').appendChild(p3);
    tchek = ''; // Si le mot de passe ne contient pas deux chiffres, réinitialise tchek
  }else {p3.textContent = '';}
  if (password =! passwordConfirm) {
    p4.textContent = 'Votre mot de passe doit etre identique au second.';
    document.getElementById('error_message4').appendChild(p4);
    tchek = ''; // Si le mot de passe n'est pas identique, réinitialise tchek
  }else {p4.textContent = '';}
id.addEventListener("click", function () {
  // Si tchek est toujours 'ok' à ce stade, cela signifie que toutes les validations sont passées avec succès
  if (tchek === 'ok') {
    alert('vos données ont été validées.')
    // Utilisation d'AJAX pour envoyer le formulaire au script PHP
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../../back-end/php/traitement-de-donnees-saisies.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
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