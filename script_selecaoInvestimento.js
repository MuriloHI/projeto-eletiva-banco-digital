function selecionarInvestimento(investimentoEscolhido) { 
    if (investimentoEscolhido.id == "Basico") {
        document.getElementById("tipoInvestimento").innerHTML = "Investimento Básico - 2%";
    }
    if (investimentoEscolhido.id == "Prata") {
        document.getElementById("tipoInvestimento").innerHTML = "Investimento Prata - 3%";
    }
}
// o "this" passa toda a imagem para o parâmetro imgMiniaturaEscolhida
// e substitui a imagem na visualização pela imagem escolhida

/* function mudarPreco(botaoEscolhido) {
    if (botaoEscolhido.id == "ModeloPreto") {
        document.getElementById("precoProduto").innerHTML = "R$ 56,90";
        document.getElementById("qtdDisponivel").innerHTML = "171 peças disponíveis";
    }
    else if (botaoEscolhido.id == "ModeloAzul") {
        document.getElementById("precoProduto").innerHTML = "R$ 56,30";
        document.getElementById("qtdDisponivel").innerHTML = "152 peças disponíveis";
    }
    else if (botaoEscolhido.id == "ModeloVerde") {
        document.getElementById("precoProduto").innerHTML = "R$ 55,10";
        document.getElementById("qtdDisponivel").innerHTML = "210 peças disponíveis";
    }
    else if (botaoEscolhido.id == "ModeloCinza") {
        document.getElementById("precoProduto").innerHTML = "R$ 55,35";
        document.getElementById("qtdDisponivel").innerHTML = "206 peças disponíveis";
    }
    else if (botaoEscolhido.id == "ModeloRosa") {
        document.getElementById("precoProduto").innerHTML = "R$ 57,15";
        document.getElementById("qtdDisponivel").innerHTML = "134 peças disponíveis";
    }
}

function mudarDisponivel(botaoEscolhido) {
    if (botaoEscolhido.id == "TamanhoP") {
        document.getElementById("tamanhoSelecionado").innerHTML = "Tamanho selecionado: P"
    }
    if (botaoEscolhido.id == "TamanhoM") {
        document.getElementById("tamanhoSelecionado").innerHTML = "Tamanho selecionado: M"
    }
    if (botaoEscolhido.id == "TamanhoG") {
        document.getElementById("tamanhoSelecionado").innerHTML = "Tamanho selecionado: G"
    }
    if (botaoEscolhido.id == "TamanhoGG") {
        document.getElementById("tamanhoSelecionado").innerHTML = "Tamanho selecionado: GG"
    }
}*/