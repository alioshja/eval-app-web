// Utilisation d'AJAX pour envoyer le form au script PHP

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "front-end/php/barre-navigation.php", true);
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
