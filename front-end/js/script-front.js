let menuOuvert = false;
let link1 = '';
let link2 = '';
let link3 = '';
const divNav = document.getElementById('divNav');
        function burger(l) {
            if (l == 1) {
                link1 = 'integration/integration-connection.php';
                link2 = 'integration/integration-inscription.php';
                link3 = 'index.php';
            } else if (l == 2) {
                link1 = 'integration-connection.php';
                link2 = 'integration-inscription.php';
                link3 = '../index.php';
            }
            if (menuOuvert == false) {
            menuOuvert = true;
            divNav.setAttribute('class', 'divNav');

            let button1 = document.createElement('button');
            button1.textContent = 'ce connecter';
            button1.setAttribute('class', 'nav-case');
            button1.setAttribute('id', 'bouton1');

            let button2 = document.createElement('button');
            button2.textContent = 'creer un compte';
            button2.setAttribute('class', 'nav-case');
            button2.setAttribute('id', 'bouton2');

            let button3 = document.createElement('button');
            button3.textContent = 'menu';
            button3.setAttribute('class', 'nav-case');
            button3.setAttribute('id', 'bouton3');

        // Attribution des liens aux boutons
        button1.addEventListener('click', function() {
            window.location.href = link1;
        });
        
        button2.addEventListener('click', function() {
            window.location.href = link2;
        });
        
        button3.addEventListener('click', function() {
            window.location.href = link3;
        })

            //positionnement des button dans divNav;
            divNav.appendChild(button1);
            divNav.appendChild(button2);
            divNav.appendChild(button3);
            }else {
    menuOuvert = false;
    divNav.innerHTML = ''; // Ferme le menu en supprimant son contenu
        }
    }