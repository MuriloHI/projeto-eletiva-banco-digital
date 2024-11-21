<?php       

function conectarBD(){
    $conexao = mysqli_connect("localhost", "root","", "gamBANK");
    return($conexao);
} 

function fazerLogin($email, $senha)
{
    $conexao = conectarBD(); // Canal de comunicação entre APP e BD
    
    // Previne injeção de SQL
    $email = mysqli_real_escape_string($conexao, $email);
    $senha = mysqli_real_escape_string($conexao, $senha);
    
    // Busca no banco
    $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $query);
    
    if (mysqli_num_rows($resultado) > 0) {
        return "Login bem-sucedido!";
    } else {
        return "E-mail ou senha inválidos.";
    }
}




function recuperarSenha($email)
{
    $conexao = conectarBD(); // Conexão com o banco de dados

    // Previne injeção de SQL
    $email = mysqli_real_escape_string($conexao, $email);

    // Verifica se o email existe
    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $query);

    if (mysqli_num_rows($resultado) > 0) {
        // Gerar token único
        $token = bin2hex(random_bytes(16));
        
        // Armazenar token no banco com validade
        $queryToken = "INSERT INTO tokens_recuperacao (email, token, validade) VALUES ('$email', '$token', DATE_ADD(NOW(), INTERVAL 1 HOUR))";
        mysqli_query($conexao, $queryToken);

        // Link para redefinir senha
        $link = "https://seusite.com/redefinirSenha.php?token=$token";

        // Envia o email (você deve configurar o servidor de e-mails)
        mail($email, "Recuperação de Senha", "Clique no link para redefinir sua senha: $link");

        return "E-mail enviado com sucesso.";
    } else {
        return "E-mail não encontrado.";
    }
}





function abrirContaPF($cpf, $nomePF, $dataNPF, $telefonePF, $emailPF, $senhaPF, $confirmSenhaPF){
    $conexao = conectarBD(); //canal de comunicação entre APP e BD
    $query = "INSERT INTO clientepf(cpf, nomeCompleto, dt_nascimento, telefone, email, senha, senha_confirmacao) VALUES('$cpf', '$nomePF', '$dataNPF', '$telefonePF', '$emailPF', '$senhaPF', '$confirmSenhaPF')";
     // query que será aplicada no SGBD
    mysqli_query($conexao, $query, $query1);
}

function abrirContaPJ($cnpj, $razaosocial, $telefonePJ, $emailPJ, $senhaPJ, $confirmSenhaPJ){
    $conexao = conectarBD(); //canal de comunicação entre APP e BD
    $query = "INSERT INTO clientpj(cnpj, nomeCompleto, telefone, email, senha, senha_confirmacao) VALUES('$cnpj', '$razaosocial', '$telefonePJ', '$emailPJ', '$senhaPJ', '$confirmSenhaPJ')"; // query que será aplicada no SGBD
    
    mysqli_query($conexao, $query, $query1);
}

function inserirFuncionario($cpfFunc, $nomeFunc, $dataNFunc, $telefoneFunc, $emailFunc, $inss)
{
    $conexao = conectarBD(); // canal de comunicação entre APP e BD
    $query = "INSERT INTO funcionario(cpf, nomeCompleto, dt_nascimento, telefone, email, inss) VALUES('$cpfFunc', '$nomeFunc', '$dataNFunc', '$telefoneFunc', '$emailFunc', '$inss')"; // query que será aplicada no SGBD
    mysqli_query($conexao, $query);
}

function inserirInvestimento($cpf, $nomeCompleto, $dtNascimento, $telefone, $email, $tipoConta, $vlInvest)
{
    $conexao = conectarBD(); // canal de comunicação entre APP e BD
    $query = "INSERT INTO investimento(cpf, nomeCompleto, dt_nascimento, telefone, email, tipo_conta, valor_investimento) VALUES('$cpf', '$nomeCompleto', '$dtNascimento', '$telefone', '$email', '$tipoConta', '$vlInvest')"; // query que será aplicada no SGBD
    mysqli_query($conexao, $query);
}

function retornarContaPF(){
    $conexao = conectarBD(); //canal de comunicação entre APP e BD
    $query = "SELECT * FROM clientepf";
    $listaContasPF = mysqli_query($conexao, $query);
    return ($listaContasPF);
}

function retornarContaPJ(){
    $conexao = conectarBD(); //canal de comunicação entre APP e BD
    $query = "SELECT * FROM clientepj";
    $listaContasPJ = mysqli_query($conexao, $query);
    return ($listaContasPJ);
}

function retornarFuncionario(){
    $conexao = conectarBD(); //canal de comunicação entre APP e BD
    $query = "SELECT * FROM funcionario";
    $listaFunc = mysqli_query($conexao, $query);
    return ($listaFunc);
}

function retornarInvestimento(){
    $conexao = conectarBD(); //canal de comunicação entre APP e BD
    $query = "SELECT * FROM investimento";
    $listaInv = mysqli_query($conexao, $query);
    return ($listaInv);
}

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


function redefinirSenha($email, $novaSenha) {
    $conexao = conectarBD(); 

    $hashSenha = password_hash($novaSenha, PASSWORD_DEFAULT);

    $queryPF = "UPDATE clientePF SET senha = '$hashSenha' WHERE email = '$email'";
    $queryPJ = "UPDATE clientePJ SET senha = '$hashSenha' WHERE email = '$email'";

    $resultadoPF = mysqli_query($conexao, $queryPF);
    if (mysqli_affected_rows($conexao) > 0) {
        return true;
    }

    $resultadoPJ = mysqli_query($conexao, $queryPJ);
    if (mysqli_affected_rows($conexao) > 0) {
        return true;
    }

    return false;
}

?>