// Initialisation des éléments de message d'erreur
let p1 = document.createElement('p');
let p2 = document.createElement('p');
let p3 = document.createElement('p');
let p4 = document.createElement('p');

let bouton = document.getElementById('validate');
bouton.addEventListener('click', function() {
event.preventDefault();

    // Effacez les anciens messages d'erreur
    document.getElementById('error_message1').innerHTML = '';
    document.getElementById('error_message2').innerHTML = '';
    document.getElementById('error_message3').innerHTML = '';
    document.getElementById('error_message4').innerHTML = '';

    let email = document.getElementById('mail').value;
    if (!emailIsValid(email)) {
        p1.textContent = 'Veuillez entrer une adresse email valide.';
        document.getElementById('error_message2').appendChild(p1);
    }

    let password = document.getElementById('password').value;
    let passwordConfirm = document.getElementById('password-confirm').value;
    let prenom = document.getElementById('prenom').value;
    let nom = document.getElementById('nom').value;
    let isValid = true;

    if (password.length < 10 || prenom.length < 2 || nom.length < 2 || email.length < 10) {
        p2.textContent = 'L\'un de vos champs ne respecte pas la taille requise. Le mot de passe et le mail doivent avoir 10 caractères minimum, le nom et le prenom 2,';
        document.getElementById('error_message1').appendChild(p2);
        isValid = false;
    }

    if (!hasTwoDigits(password)) {
        p3.textContent = 'Votre mot de passe doit contenir au moins 2 chiffres.';
        document.getElementById('error_message3').appendChild(p3);
        isValid = false;
    }

    if (password !== passwordConfirm) {
        p4.textContent = 'Votre mot de passe doit être identique au second.';
        document.getElementById('error_message4').appendChild(p4);
        isValid = false;
    }
    if (isValid) {
      // Si toutes les conditions sont remplies, soumettez le formulaire
      alert('votre compte a bien été crée.')
      document.getElementById('inscriptionForm').submit();
  } else {
      // Sinon, ne faites rien et laissez l'utilisateur corriger les erreurs
  }
});

function emailIsValid(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function hasTwoDigits(str) {
    return (str.match(/\d/g) || []).length >= 2;
}
