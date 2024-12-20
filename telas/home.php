<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - gamBANK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- BOOTSTRAP --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--ICONES REDES SOCIAIS-->
    <link rel="stylesheet" href="../styles/style_geral.css">
    <link rel="stylesheet" href="../styles/style_home.css">
</head>
<body>
    <header class="header">
        <img src="../img/logo_gamBANK.png" alt="logo da gamBANK">
        <h1 class="nome-gambank">gamBANK</h1>
        <p><a href="tela_login.php">Login</a></p>
    </header>

    <nav class="menu-horizontal">
        <ul>
            <li><a href="#home.html">Home</a></li>
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

    <section class="imagemFundo">
        <section class="texto-imagem"> 
            <p>Confiabilidade para o seu futuro financeiro</p>
        </section>
        <a href="tela_abrirContaPF.php"><button class="escuro">COMEÇE AQUI</button></a>
    </section>

    <!-- BOOTSTRAP --> 
    <div class="container mt-5">
        <!-- Carrossel -->
        <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicadores -->
            <ol class="carousel-indicators">
                <li data-bs-target="#promoCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#promoCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#promoCarousel" data-bs-slide-to="2"></li>
            </ol>
            
            <!-- Slides do carrossel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/umSlide.png" class="d-block w-100" alt="Promoção 1">
                </div>
                <div class="carousel-item">
                    <img src="../img/doisSlide.png" class="d-block w-100" alt="Promoção 2">
                </div>
                <div class="carousel-item">
                    <img src="../img/slideTres.png" class="d-block w-100" alt="Promoção 3">
                </div>
            </div>
            
            <!-- Controles de navegação -->
            <a class="carousel-control-prev" href="#promoCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#promoCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </a>
        </div>
    </div>
    
    <!-- Link para Bootstrap JS e dependências -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FIM BOOTSTRAP --><br>

    <section>
        <h2 class="secaoTitulo1">Por que <span class="destaque_texto">gamBANK</span>?</h2>
        <section class="secao1">
            <p>Escolha um banco digital feito para facilitar sua vida. Com o gamBANK, você tem controle total das suas finanças na palma da mão, com segurança de ponta e um atendimento sempre ao seu lado. Oferecemos taxas justas, tecnologia inovadora e um serviço rápido para atender suas necessidades de forma prática e eficiente. Seja para economizar, investir ou gerenciar seu dinheiro, o gamBANK está aqui para te ajudar a alcançar seus objetivos financeiros de maneira simples e transparente.</p>
            <img src="../img/img_dinheiro.png" alt="imagem ilustrativa de um saco de dinheiro azul">
        </section> 
    </section>

    <section>
        <h2 class="secaoTitulo2">E a sua <span class="destaque_texto">segurança</span>?</h2>
        <section class="secao2">
            <img src="../img/img_seguranca.png" alt="imagem ilustrativa de uma câmera de segurança">
            <p>A segurança dos nossos clientes é nossa prioridade. No gamBANK, utilizamos criptografia avançada e autenticação em dois fatores para proteger seus dados e transações. Monitoramos todas as atividades em tempo real para prevenir fraudes e garantir que suas informações estejam sempre seguras.</p>
        </section> 
    </section>

    <section>
        <h2 class="secaoTitulo1">Certo, mas e a sua <span class="destaque_texto">acessibilidade</span>?</h2>
        <section class="secao1">
            <p>O gamBANK é pensado para todos. Nosso app é intuitivo, acessível e otimizado para diferentes dispositivos. Além disso, contamos com recursos inclusivos, como suporte a leitores de tela e design adaptado para garantir que cada cliente tenha uma experiência confortável e eficiente, independentemente de suas necessidades.</p>
            <img src="../img/img_acessibilidade.png" alt="imagem do símbolo de questões para acessibilidade">
        </section> 
    </section>

    <section>
        <h2 class="secaoTitulo2">E sobre o <span class="destaque_texto">Cartão gamBANK</span>?</h2>
        <section class="secao2">
            <img src="../img/img_cartao.png" alt="imagem do cartão gamBANK">
            <p>O Cartão gamBANK é prático, seguro e aceito internacionalmente. Com ele, você tem acesso a benefícios exclusivos, como cashback em compras e controle total pelo aplicativo, onde pode ajustar limites, bloquear e desbloquear o cartão instantaneamente. Além disso, oferecemos opções de cartão de crédito e débito, com taxas transparentes e sem anuidade, para que você tenha mais liberdade e conveniência no dia a dia.</p>
        </section> 
    </section>

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