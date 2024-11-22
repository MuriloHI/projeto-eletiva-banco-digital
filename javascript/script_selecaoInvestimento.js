function selecionarInvestimento() {
    const select = document.getElementById("tipo_conta");
    const investimentoEscolhido = select.options[select.selectedIndex].id;
    const tipoInvestimentoCor = document.getElementById("tipoInvestimento");

    if (investimentoEscolhido == "Basico") {
        document.getElementById("tipoInvestimento").innerHTML = "Investimento Básico - 2%";
        tipoInvestimentoCor.style.color = "rgb(0, 0, 0)";
    }
    if (investimentoEscolhido == "Prata") {
        document.getElementById("tipoInvestimento").innerHTML = "Investimento Prata - 3%";
        tipoInvestimentoCor.style.color = "rgb(179, 178, 177)";
    }
    if (investimentoEscolhido == "Ouro") {
        document.getElementById("tipoInvestimento").innerHTML = "Investimento Ouro - 4%";
        tipoInvestimentoCor.style.color = "rgb(207, 148, 31)";
    }
    if (investimentoEscolhido == "Diamante") {
        document.getElementById("tipoInvestimento").innerHTML = "Investimento Diamante - 5%";
        tipoInvestimentoCor.style.color = "rgb(77, 162, 214)";
    }

}