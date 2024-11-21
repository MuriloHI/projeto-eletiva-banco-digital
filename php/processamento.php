<?php

session_start();
require_once "funcoesBD.php";

//Abrir Conta de Pessoa Física
if(!empty($_POST['cpf']) && !empty($_POST['nomeCompleto']) && 
   !empty($_POST['dt_nascimento']) && !empty($_POST['telefone']) && 
   !empty($_POST['email']) && !empty($_POST['senha']) &&
   !empty($_POST['senha_confirmacao'])){

   $cpf = $_POST['cpf'];
   $nomePF = $_POST['nomeCompleto'];
   $dataNPF = $_POST['dt_nascimento'];
   $telefonePF = $_POST['telefone'];
   $emailPF = $_POST['email'];
   $senhaPF = $_POST['senha'];
   $confirmSenhaPF = $_POST['senha_confirmacao'];

  
  //chamada da função para BD
  abrirContaPF($cpf, $nomePF, $dataNPF, $telefonePF, $emailPF, $senhaPF, $confirmSenhaPF);

  header('Location: ../telas/tela_abrirContaPF.php');
  die();
}


//Abrir Conta de Pessoa Jurídica
if(!empty($_POST['cnpj']) && !empty($_POST['nomeCompleto']) && 
   !empty($_POST['telefone']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['senha_confirmacao'])){

   $cnpj = $_POST['cnpj'];
   $razaosocial = $_POST['nomeCompleto'];
   $telefonePJ = $_POST['telefone'];
   $emailPJ = $_POST['email'];
   $senhaPJ = $_POST['senha'];
   $confirmSenhaPJ = $_POST['senha_confirmacao'];


  abrirContaPJ($cnpj, $razaosocial, $telefonePJ, $emailPJ, $senhaPJ, $confirmSenhaPJ);

  header('Location: ../telas/tela_abrirContaPJ.php');

  die();
  }
  
  
  //Cadastrar Funcionário
  if(!empty($_POST['cpf']) && !empty($_POST['nomeCompleto']) && !empty($_POST['dt_nascimento']) && !empty($_POST['telefone']) && !empty($_POST['email']) && !empty($_POST['inss'])){

  $cpfFunc = $_POST['cpf'];
  $nomeFunc = $_POST['nomeCompleto'];
  $dataNFunc = $_POST['dt_nascimento'];
  $telefoneFunc = $_POST['telefone'];
  $emailFunc = $_POST['email'];
  $inss = $_POST['inss'];


  inserirFuncionario($cpfFunc, $nomeFunc, $dataNFunc, $telefoneFunc, $emailFunc, $inss);
  
  header('Location: ../telas/tela_cadastrarFuncionario.php');
  die();
  }


  //Cadastrar Investimentos
  if(!empty($_POST['cpf']) && !empty($_POST['nomeCompleto']) && !empty($_POST['dt_nascimento']) && !empty($_POST['telefone']) && !empty($_POST['email']) && !empty($_POST['tipo_conta']) && !empty($_POST['valor_investimento'])){

  $cpf = $_POST['cpf'];
  $nomeCompleto = $_POST['nomeCompleto'];
  $dtNascimento = $_POST['dt_nascimento'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $tipoConta = $_POST['tipo_conta'];
  $vlInvest = $_POST['valor_investimento'];

  inserirInvestimento($cpf, $nomeCompleto, $dtNascimento, $telefone, $email, $tipoConta, $vlInvest);

  header('Location: ../telas/tela_cadastrarInvestimento.php');

  die();
  }

  //Valor do investimento
  


    // Redefinir Senha

    if (!empty($_POST['email']) && !empty($_POST['nova_senha']) && !empty($_POST['confirmacao_senha'])) {
      $email = $_POST['email'];
      $novaSenha = $_POST['nova_senha'];
      $confirmacaoSenha = $_POST['confirmacao_senha'];
  
      if ($novaSenha === $confirmacaoSenha) {
          redefinirSenha($email, $novaSenha);
          header('Location: ../telas/tela_sucessoRedefinirSenha.php');
      } else {
          header('Location: ../telas/tela_redefinirSenha.php?erro=senhas-nao-conferem');
      }
      die();
  }


?>