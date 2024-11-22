window.onload = function() { // a função é chamada assim que a página carregar
    // analisa a URL para detectar parametros query
    var status = new URLSearchParams(window.location.search);
    if (status.has('status') && status.get('status') === 'sucesso') {
        document.getElementById('formulario').style.display = 'none';
    }
}
// window.location.search -> retorna ?status=sucesso (tudo depois do ?)
// URLSearchParams -> cria um objeto para acessar cada parte dos parametros query (ex: sucesso)
// has e get detecta e retorna o parametro query especifico

