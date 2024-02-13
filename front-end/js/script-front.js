let menuOuvert = false;
let divNav = document.getElementById('divNav');

//definition de la valeur de body avant la fonction burger.
let bouton1c = document.getElementById('Bouton1');
let bouton2c = document.getElementById('Bouton2');
let bouton3c = document.getElementById('Bouton3');

function burger() {
    //condition pour refermer le menu burger.
    let divNav = document.getElementById('divNav');

    if (menuOuvert == true) {
        menuOuvert = false;
        divNav.innerHTML = '';
        // sinon on ouvre le menu apres click.
    } else {
        //creation des elements du dom.
        menuOuvert = true;
        divNav.setAttribute('class', 'divNav');

        let button1 = document.createElement('button');
        button1.textContent = 'ce connecter';
        button1.setAttribute('class', 'nav-case');
        button1.setAttribute('onclick', 'ajax(1)');
        button1.setAttribute('type', 'button');
        button1.setAttribute('id', 'Bouton1');

        let button2 = document.createElement('button');
        button2.textContent = 'creer un compte';
        button2.setAttribute('class', 'nav-case');
        button2.setAttribute('onclick', 'ajax(2)');
        button2.setAttribute('type', 'button');
        button2.setAttribute('id', 'Bouton2');

        let button3 = document.createElement('button');
        button3.textContent = 'menu';
        button3.setAttribute('class', 'nav-case');
        button3.setAttribute('onclick', 'ajax(3)');
        button3.setAttribute('type', 'button');
        button3.setAttribute('id', 'Bouton3');

        //positionnement des button dans divNav;
        divNav.appendChild(button1);
        divNav.appendChild(button2);
        divNav.appendChild(button3);
    }
}