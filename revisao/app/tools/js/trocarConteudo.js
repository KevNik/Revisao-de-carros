const routes = ['registrarRevisao', 'selecionarRevisao', 'editarRevisao', 'excluirRevisao', 'guardarRevisao'];



const check = (id, route, routes) => {
    if(routes[route] === id ){
        return routes[route];
    }
}

const trocarConteudo = element => {
    const id = element.id;

    const toChange = routes.filter(check);

    console.log(check);
}

const menuInicial = document.querySelector('#menuInicial');

let teste = menuInicial.parentNode;

console.log(window.prompt)




