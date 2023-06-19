import { items } from "./menu.js";

/*const Menu = document.createElement('ul');

items.forEach (item => {

    let it = document.createElement('li');
    it.textContent = item['item'];
    lista.appendChild(it);
            
});
*/

/*
export default class Menu extends HTMLElement{
    constructor(){
        super();
        const root = this.attachShadow({mode: 'closed'});

        let lista = document.createElement('ul');

        items.forEach (item => {

            let it = document.createElement('li');
            it.textContent = item['item'];
            lista.appendChild(it);
            
        });

        root.append(lista);

    }
}

customElements.define('menu-component',Menu); */

function Menu(){
    const lista = document.createElement('ul');

    items.forEach (item => {

        let it = document.createElement('li');
        it.textContent = item['item'];
        lista.appendChild(it);
                
    });

    return(
        lista
    );
}

export default Menu;

