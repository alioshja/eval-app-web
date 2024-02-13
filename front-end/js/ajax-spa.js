// Utilisation d'AJAX pour envoyer la variable au script PHP
let body = 1;
function ajax(i) {
    if(i == 1) {
       body = 1;
    }if(i == 2) {
       body = 2;
    }if(i == 3) {
       body = 3;
    }
    // console.log(body);
    //verifié
    let valeur = body;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "index.php", true);
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