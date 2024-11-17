<?php       

function conectarBD(){
    $conexao = mysqli_connect("localhost", "root","", "gamBANK");
    return($conexao);
} 

function abrirContaPF($cpf, $nomePF, $dataNPF, $telefonePF, $emailPF, $senhaPF, $confirmSenhaPF){
    $conexao = conectarBD(); //canal de comunicação entre APP e BD
    $query = "INSERT INTO clientePF(cpf, nomeCompleto, dt-nascimento, telefone, email, senha, senha-confirmacao) VALUES('$cpf', '$nomePF', '$dataNPF', '$telefonePF', '$emailPF', '$senhaPF', '$confirmSenhaPF')"; // query que será aplicada no SGBD
    mysqli_query($conexao, $query);
}

function abrirContaPJ($cnpj, $razaosocial, $telefonePJ, $emailPJ, $senhaPJ, $confirmSenhaPJ){
    $conexao = conectarBD(); //canal de comunicação entre APP e BD
    $query = "INSERT INTO clientPJ(cnpj, nomeCompleto, telefone, email, senha, senha-confirmacao) VALUES('$cnpj', '$razaosocial', '$telefonePJ', '$emailPJ', '$senhaPJ', '$confirmSenhaPJ')"; // query que será aplicada no SGBD
    mysqli_query($conexao, $query);
}

function inserirFuncionario($cpfFunc, $nomeFunc, $dataNFunc, $telefoneFunc, $emailFunc, $inss)
{
    $conexao = conectarBD(); // canal de comunicação entre APP e BD
    $query = "INSERT INTO funcionario(cpf, nomeCompleto, dt-nascimento, telefone, email, inss) VALUES('$cpfFunc', '$nomeFunc', '$dataNFunc', '$telefoneFunc', '$emailFunc', '$inss')"; // query que será aplicada no SGBD
    mysqli_query($conexao, $query);
}


?>