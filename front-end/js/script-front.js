let menuOuvert = false;
let divNav = document.getElementById('divNav');
let body = 1;
function burger() {
    //condition pour refermer le menu burger.
    let divNav = document.getElementById('divNav');
    //body sert a définir quel body mon site vas charger en fonction de sur quel 
    //button mon utilisateur vas cliquer celas vas changer sa valeur et donc le body. 
    if (menuOuvert == true) {
        menuOuvert = false;
        divNav.innerHTML = '';
        // sinon on ouvre le menu apres click.
    } else {    //essayer d'externaliser ce bout de code via une fonction 
                //qui recupère une id pour chaque button et qui met un ecouteur
                //appelant cette fameuse fonction.
        menuOuvert = true;
        divNav.setAttribute('class', 'divNav');

        let button1 = document.createElement('button');
        button1.textContent = 'ce connecter';
        button1.setAttribute('class', 'nav-case');
        button1.setAttribute('onclick', 'ajax(1)');

        let button2 = document.createElement('button');
        button2.textContent = 'creer un compte';
        button2.setAttribute('class', 'nav-case');
        button2.setAttribute('onclick', 'ajax(2)');

        let button3 = document.createElement('button');
        button3.textContent = 'menu';
        button3.setAttribute('class', 'nav-case');
        button3.setAttribute('onclick', 'ajax(3)');

        //positionnement des button dans divNav;
        divNav.appendChild(button1);
        divNav.appendChild(button2);
        divNav.appendChild(button3);
        //positionnement de divNav en dessous de la bare de nav html

}
}
        // Utilisation d'AJAX pour envoyer la variable au script PHP
        function ajax(load) {
            if (load == 1) {
                body = 1;
            } else if (load == 2) {
                body = 2;
            } else if (load == 3) {
                body = 3;
            }
            //encodage JSON
            body = JSON.stringify(body);
        
            var xhr = new XMLHttpRequest();
        
            // Configuration de la requête AJAX
            xhr.open('GET', '../../index.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
            // Gestionnaire d'événement appelé lorsque la requête est terminée
            xhr.onload = function() {
                if (xhr.status >= 200) {
                    // La requête s'est terminée avec succès
                    console.log('Réponse du serveur PHP : ' + xhr.responseText);
                } else {
                    // La requête a échoué
                    console.error('Erreur lors de la requête AJAX : ' + xhr.statusText);
                }
            };
        
            // Gestionnaire d'événement en cas d'erreur de réseau
            xhr.onerror = function () {
                console.error('Erreur réseau lors de la requête AJAX.');
            };
        
            // Envoi de la requête avec les données, y compris la variable body
            xhr.send("body=" + body);
            console.log('Valeur de body envoyée : ' + body);
        }