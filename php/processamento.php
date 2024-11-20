<?php

session_start();
require_once "funcoesBD.php";

//Abrir Conta de Pessoa Física
if(!empty($_POST['cpf']) && !empty($_POST['nomeCompleto']) && 
   !empty($_POST['dt-nascimento']) && !empty($_POST['telefone']) && 
   !empty($_POST['email']) && !empty($_POST['senha']) &&
   !empty($_POST['senha-confirmacao'])){

   $cpf = $_POST['cpf'];
   $nomePF = $_POST['nomeCompleto'];
   $dataNPF = $_POST['dt-nascimento'];
   $telefonePF = $_POST['telefone'];
   $emailPF = $_POST['email'];
   $senhaPF = $_POST['senha'];
   $confirmSenhaPF = $_POST['senha-confirmacao'];

  
  //chamada da função para BD
  abrirContaPF($cpf, $nomePF, $dataNPF, $telefonePF, $emailPF, $senhaPF, $confirmsenhaPF);

  header('Location: ../telas/tela_abrirContaPF.php');
  die();
}


//Abrir Conta de Pessoa Jurídica
if(!empty($_POST['cnpj']) && !empty($_POST['nomeCompleto']) && 
   !empty($_POST['telefone']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['senha-confirmacao'])){

   $cnpj = $_POST['cnpj'];
   $razaosocial = $_POST['nomeCompleto'];
   $telefonePJ = $_POST['telefone'];
   $emailPJ = $_POST['email'];
   $senhaPJ = $_POST['senha'];
   $confirmSenhaPJ = $_POST['senha-confirmacao']


  abrirContaPJ($cnpj, $razaosocial, $telefonePJ, $emailPJ, $senhaPJ, $confirmSenhaPJ);

  header('Location: ../telas/tela_abrirContaPJ.php');
  
  
  
  //Cadastrar Funcionário
  if(!empty($_POST['cpf']) && !empty($_POST['nomeCompleto']) && !empty($_POST['dt-nascimento']) && !empty($_POST['telefone']) && !empty($_POST['email']) && !empty($_POST['inss']))

  $cpfFunc = $_POST['cpf'];
  $nomeFunc = $_POST['nomeCompleto'];
  $dataNFunc = $_POST['dt-nascimento'];
  $telefoneFunc = $_POST['telefone'];
  $emailFunc = $_POST['email'];
  $inss = $_POST['inss'];


  inserirFuncionario($cpfFunc, $nomeFunc, $dataNFunc, $telefoneFunc, $emailFunc, $inss)
  
  header('Location: ../telas/tela_cadastrarFuncionario.php')
  
  //Cadastrar Investimentos
  if(!empty($_POST['cpf']) && !empty($_POST['nomeCompleto']) && !empty($_POST['dt-nascimento']) && !empty($_POST['telefone']) && !empty($_POST['email']) && !empty($_POST['tipo-conta']) && !empty($_POST['valor-investimento']))

  $cpf = $_POST['cpf'];
  $nomeCompleto = $_POST['nomeCompleto'];
  $dtNascimento = $_POST['dt-nascimento'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $tipoConta = $_POST['tipo-conta'];
  $vlInvest = $_POST['valor-investimento'];

  inserirInvestimento($cpf, $nomeCompleto, $dtNascimento, $telefone, $email, $tipoConta, $vlInvest)

  header('Location: ../telas/tela_cadastrarInvestimento.php')

  function calcularRetornoInvestimento($valorInvestido, $tipoConta) {
    $taxas = [
        'basico' => 0.02,
        'prata' => 0.03, 
        'ouro' => 0.04, 
        'diamante' => 0.05 
    ];

    if (!isset($taxas[$tipoConta])) {
        return "Tipo de conta inválido";
    }

    $retorno = $valorInvestido * $taxas[$tipoConta];
    return number_format($retorno, 2, ',', '.');

  
  die();
}

?>