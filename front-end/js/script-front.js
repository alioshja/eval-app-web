let menuOuvert = false;
const divNav = document.getElementById('divNav');
        function burger() {
            if (menuOuvert == false) {
            menuOuvert = true;
            divNav.setAttribute('class', 'divNav');

            let button1 = document.createElement('button');
            button1.textContent = 'ce connecter';
            button1.setAttribute('class', 'nav-case');
            button1.setAttribute('type', 'submit');
            button1.setAttribute('id', 'bouton1');

            let button2 = document.createElement('button');
            button2.textContent = 'creer un compte';
            button2.setAttribute('class', 'nav-case');
            button2.setAttribute('type', 'submit');
            button2.setAttribute('id', 'bouton2');

            let button3 = document.createElement('button');
            button3.textContent = 'menu';
            button3.setAttribute('class', 'nav-case');
            button3.setAttribute('type', 'submit');
            button3.setAttribute('id', 'bouton3');

            //création des liens dans les boutons.

            let link1 =document.createElement('a');
            link1.setAttribute('href','integration/integration-connection.php');

            let link2 =document.createElement('a');
            link2.setAttribute('href','integration/integration-inscription.php');

            let link3 =document.createElement('a');
            link3.setAttribute('href','index.php');

            //positionnement des button dans divNav;
            divNav.appendChild(button1);
            divNav.appendChild(button2);
            divNav.appendChild(button3);

            //positionnement des liens dans buttons;
            button1.appendChild(link1);
            button2.appendChild(link2);
            button3.appendChild(link3);
            }else {
    menuOuvert = false;
    divNav.innerHTML = ''; // Ferme le menu en supprimant son contenu
        }
    }