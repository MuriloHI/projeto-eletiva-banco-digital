<?php
require_once "../php/funcoesBD.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Visualizar ContaPJ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--ICONES REDES SOCIAIS-->
    <link rel="stylesheet" href="../styles/style_visualizarContaPF.css">
    <link rel="stylesheet" href="../styles/style_geral.css">

</head>
<body>
    <header class="header">
        <img src="../img/logo_gamBANK.png" alt="logo da gamBANK">
        <h1 class="nome-gambank">gamBANK</h1>
        <p><a href="#">Sair</a></p>
    </header>

    <nav class="menu-horizontal">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li class="dropdown">
                <a href="#">Abrir uma conta</a>
                <section class="dropdown-conteudo">
                    <ul class="submenu">
                        <li><a href="tela_abrirContaPF.php">Conta Digital (PF)</a></li>
                        <li><a href="tela_abrirContaPJ.php">Conta Empresarial (PJ)</a></li>
                    </ul>
                </section>
            </li>
            <li class="dropdown">
                <a href="#">Investimentos</a>
                <section class="dropdown-conteudo">
                    <ul class="submenu">
                        <li><a href="tela_cadastrarInvestimento.php">Cadastrar Investimento</a></li>
                        <li><a href="tela_visualizarInvestimento.php">Visualizar Investimento</a></li>
                    </ul>
                </section>
            </li>
            <li class="dropdown">
                <a href="#">Contas gamBANK</a>
                <section class="dropdown-conteudo">
                    <ul class="submenu">
                        <li><a href="tela_visualizarContaPF.php">Visualizar ContaPF</a></li>
                        <li><a href="tela_visualizarContaPJ.php">Visualizar ContaPJ</a></li>
                    </ul>
                </section>
            </li>
            <li class="dropdown">
                <a href="#">Funcionários</a>
                <section class="dropdown-conteudo">
                    <ul class="submenu">
                        <li><a href="tela_cadastrarFuncionario.php">Cadastrar Funcionário</a></li>
                        <li><a href="tela_visualizarFuncionario.php">Visualizar Funcionário</a></li>
                    </ul>
                </section>
            </li>
        </ul>
    </nav>
    
    <?php
        $listaContasPF = retornarContaPF();
        while($clientePF = mysqli_fetch_assoc($listaContasPF)){
        
        echo "<section class='secao_inteira_visualizarContaPF'>";
        echo "<section class='card'>";
        echo "<img class='iconeCliente' src='../img/cliente_foto.png' alt='Avatar do Usuário'>";          
        echo  "<p>" . $clientePF["cpf"] . "</p>";
        echo  "<p>" . $clientePF["nomeCompleto"] . "</p>";
        echo  "<p>" . $clientePF["dt_nascimento"] . "</p>";
        echo  "<p>" . $clientePF["telefone"] . "</p>";
        echo  "<p>" . $clientePF["email"] . "</p>";
        echo "</section>";
        echo   "</section>";
    }
    ?>
    
    <!-- FOOTER -->
    <footer>
        <section class="links">
            <!--Sobre o Banco-->
            <section>
                <h5>O gamBANK</h5>
                    <p><a href="#">Sobre nós</a></p>
                    <p><a href="#">Carreiras</a></p>
                    <p><a href="#">Contato</a></p>
                    <p><a href="#">Blog</a></p>
                    <p><a href="#">Newsletter</a></p>
                    <p><a href="#">Perguntas frequentes</a></p>
            </section>

            <!--Produtos-->
            <section>
                <h5>O que oferecemos</h5>
                    <p><a href="#">Conta digital</a></p>
                    <p><a href="#">Cartão de crédito</a></p>
                    <p><a href="#">Empréstimos</a></p>
                    <p><a href="#">Conta PJ</a></p>
                    <p><a href="#">Investimentos</a></p>
            </section>

            <!--Políticas e outros-->
            <section>
                <h5>Transparência</h5>
                    <p><a href="#">Política de privacidade</a></p>
                    <p><a href="#">Política de segurança</a></p>
                    <p><a href="#">Privacidade de dados</a></p>
                    <p><a href="#">Ética e compliance</a></p>
                    <p><a href="#">Contratos</a></p>
                    <p><a href="#">SCR</a></p>
                    <p><a href="#">PLD/CFTP</a></p>
            </section>

            <!--Contato-->
            <section>
                <h5>Fale com a gente</h5>
                    <p>Capitais e regiões metropolitanas</p>
                    <p class="contato"><a href="tel:4002 8432">4002 8432</a></p>
                    <p>Demais localidades</p>
                    <p class="contato"><a href="tel:0800 300 5000">0800 300 5000</a></p>
                    <p class="contato"><a href="mailto:centraldeajuda@gambank.com.br">centraldeajuda@gambank.com.br</a></p>
                    <p>SAC</p>
                    <p class="contato"><a href="tel:0800 500 1000">0800 500 1000</a></p>
                    <p>Ouvidoria</p>
                    <p class="contato"><a href="tel:0800 200 6000">0800 200 6000</a></p>
                    <p class="contato"><a href="mailto:ouvidoria@gambank.com.br">ouvidoria@gambank.com.br</a></p>
                    <p>Atendimento 24h</p>
            </section>
        </section>

        <section class="apps-sociais">
            <!--Baixar o app-->
            <section class="baixar-apps">
                <h5>Baixe o App</h5>
                    <img src="../img/googleplay.png">
                    <img src="../img/appstore.png">
            </section>

            <!--Redes sociais-->
            <section class="redes-sociais">
                <h5>Siga o gamBANK</h5>
                    <!--icones das redes sociais-->
                    <a href="#" class="fa fa-linkedin fa-2x"></a>
                    <a href="#" class="fa fa-facebook fa-2x"></a>
                    <a href="#" class="fa fa-twitter fa-2x"></a>
                    <a href="#" class="fa fa-instagram fa-2x"></a>
                    <a href="#" class="fa fa-youtube-play fa-2x"></a>
            </section>
        </section>

            <section class="texto-rodape">
                <b><p>&#169 2024 Banco gamBANK S. A. - CNPJ: 12.345.678/0001-90</p></b>
                <p>Av. Margarida Rosa, 100 - Vila das Flores - São Paulo, SP. CEP: 01153-000</p>
            </section>
    </footer>
</body>
</html>