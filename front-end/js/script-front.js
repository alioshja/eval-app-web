let menuOuvert = false;
let divNav = document.getElementById('divNav');
let body = '';

//definition de la valeur de body avant la fonction burger.
const bouton1c = document.getElementById('Bouton1');
const bouton2c = document.getElementById('Bouton2');
const bouton3c = document.getElementById('Bouton3');

function burger() {
    //condition pour refermer le menu burger.
    let divNav = document.getElementById('divNav');
    //body sert a définir quel body mon site vas charger en fonction de sur quel 
    //button mon utilisateur vas cliquer celas vas changer sa valeur et donc le body. 
    if (menuOuvert == true) {
        menuOuvert = false;
        divNav.innerHTML = '';
        function burger() {
            menuOuvert = true;
            divNav.setAttribute('class', 'divNav');

            let button1 = document.createElement('input');
            button1.textContent = 'ce connecter';
            button1.setAttribute('class', 'nav-case');
            button1.setAttribute('onclick', 'ajax(1)');
            button1.setAttribute('type', 'submit');
            button1.setAttribute('id', 'bouton1');

            let button2 = document.createElement('input');
            button2.textContent = 'creer un compte';
            button2.setAttribute('class', 'nav-case');
            button2.setAttribute('onclick', 'ajax(2)');
            button2.setAttribute('type', 'submit');
            button2.setAttribute('id', 'bouton2');

            let button3 = document.createElement('input');
            button3.textContent = 'menu';
            button3.setAttribute('class', 'nav-case');
            button3.setAttribute('onclick', 'ajax(3)');
            button3.setAttribute('type', 'submit');
            button3.setAttribute('id', 'bouton3');

            //création des liens dans les boutons.

            let link1 =document.createElement('link');
            link1.setAttribute('href','integration/integration-connection.php');

            let link2 =document.createElement('link');
            link2.setAttribute('href','integration/integration-inscription.php');

            let link3 =document.createElement('link');
            link3.setAttribute('href','index.php');

            //positionnement des button dans divNav;
            divNav.appendChild(button1);
            divNav.appendChild(button2);
            divNav.appendChild(button3);

            //positionnement des liens dans buttons;
            button1.appendChild(link1);
            button2.appendChild(link2);
            button3.appendChild(link3);
        }
    }
}