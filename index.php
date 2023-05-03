<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Full-Stack</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/theme.css">
    <!-- FAV-ICON -->
    <link rel="icon" href="assets/icons/fav-icon.png" type="image/png">
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <!-- JS -->
    <script src="js/darkmode.js" defer></script>
</head>

<body>
    <!-- INICIO HEADER -->
    <section id="top">
        <header>
            <nav class="nav-center">
                <a class="logo-nav" href="index.php"><strong>PixelDesign</strong></a>
                <a class="ctt-button" href="index.php">(11)99999-9999</a>
            </nav>
        </header>

        <main>
            <div class="main-content center">
                <div class="title-header">
                    <h1 class="txt-header">Design que transforma: destaque o potencial do seu produto.</h1>
                    <p class="main-txt">Utilize um design estratégico para transmitir a mensagem certa ao seu público-alvo e criar uma experiência
                    <h1 class="h1-animate" data-text="memorável.">memorável.</h1>
                    </p>
                </div>

                <!-- INICIO FORM -->
                <div class="container">
                    <form id="form" action="bd/cadastro/cadastrar-form.php" method="post">
                        <!-- BOTÃO DARKMODE -->
                        <div>
                            <input type="checkbox" name="change-theme" id="change-theme" />
                            <label class="change-theme" for="change-theme">
                                <i class="bi bi-sun"><img src="assets/icons/sun.svg" alt="sun"></i>
                                <i class="bi bi-moon"><img src="assets/icons/moon.svg" alt="moon"></i>
                            </label>
                        </div>

                        <h1 class="title-form">Entre em contato</h1>

                        <div class="input-control">
                            <input placeholder="NOME" type="text" name="nome" id="nome" required>
                        </div>
                        <div class="input-control">
                            <input placeholder="E-MAIL" type="text" name="email" id="email" required>
                        </div>
                        <div class="input-control">
                            <input placeholder="DDD + TELEFONE" type="text" name="telefone" id="telefone" required>
                        </div>
                        <div class="input-control">
                            <textarea placeholder="DIGITE O QUE DESEJA" name="texto" id="texto" required></textarea>
                        </div>
                        <button class="btn" type="submit" name="submit" id="submit">Enviar</button>

                        <?php
                        session_start();
                        if (isset($_SESSION['mensagem'])) {
                            // adiciona a classe CSS apropriada com base no tipo de mensagem
                            $classe = isset($_SESSION['tipo']) && $_SESSION['tipo'] == 'erro' ? 'erro' : 'sucesso';
                            echo '<p id="mensagem" class="' . $classe . '">' . htmlspecialchars($_SESSION['mensagem']) . '</p>';
                            unset($_SESSION['mensagem']); // remove a mensagem da variável de sessão para que ela não seja exibida novamente
                            unset($_SESSION['tipo']);
                        }
                        ?>
                    </form>
                </div>
            </div>
        </main>
    </section>

    <!-- INICIO SOBRE NÓS -->
    <section class="content-about">
        <div class="container-sobre center">
            <picture>
                <img src="assets/images/about-img.jpg" alt="omg" class="img-sobre" data-anime="left">
            </picture>
            <div class="sobre" data-anime="left">
                <h1>Sobre nós</h1>
                <p>A empresa de design digital Pixel Design foi fundada em 2015 com o objetivo de ajudar empresas de diversos segmentos a se destacarem no mercado digital através de soluções criativas e personalizadas.</p>
            </div>
        </div>
    </section>

    <!-- INICIO SERVIÇOS -->
    <section id="service" class="service">
        <div class="center">
            <div class="title-container">
                <h1 class="txt-title" data-anime="down">Com este serviço você:</h1>
            </div>
            <!-- PRIMEIRA LINHA -->
            <ul class="content-service">
                <div class="container-service">
                    <li class="service-main center" data-anime="left">
                        <picture>
                            <img src="assets/icons/shop.svg" alt="img" class="icon">
                        </picture>
                        <div class="txt-service">
                            <h1 class="title-service">Beneficio do serviço</h1>
                            <p class="sub-title">Ajuda a reduzir custos
                                Quando o assunto são os custos de produção, o uso do design pode ser extremamente estratégico.</p>
                        </div>
                    </li>

                    <li class="service-main center" data-anime="left">
                        <picture>
                            <img src="assets/icons/shop.svg" alt="img" class="icon">
                        </picture>
                        <div class="txt-service">
                            <h1 class="title-service">Um bom design dá mais credibilidade</h1>
                            <p class="sub-title">tempo? Mais dinheiro? Economia? Durabilidade? Prazo de atendimento? Preço?</p>
                        </div>
                    </li>
                </div>
            </ul>

            <!-- SEGUNDA LINHA -->
            <ul class="content-service">
                <div class="container-service">
                    <li class="service-main center" data-anime="left">
                        <picture>
                            <img src="assets/icons/shop.svg" alt="img" class="icon">
                        </picture>
                        <div class="txt-service">
                            <h1 class="title-service">Chama a atenção do público</h1>
                            <p class="sub-title">Não importa se você tem uma loja física, um negócio online ou uma grande empresa: quanto mais interessante for o design, maior é o interesse do público.</p>
                        </div>
                    </li>

                    <li class="service-main center" data-anime="left">
                        <picture>
                            <img src="assets/icons/shop.svg" alt="img" class="icon">
                        </picture>
                        <div class="txt-service">
                            <h1 class="title-service">Ajuda a sua marca a se posicionar da forma que deseja</h1>
                            <p class="sub-title">identidade visual, incluindo a logomarca, cores, tipografia e outros elementos visuais.</p>
                        </div>
                    </li>
                </div>
            </ul>

            <!-- TERCEIRA LINHA -->
            <ul class="content-service">
                <div class="container-service">
                    <li class="service-main center" data-anime="left">
                        <picture>
                            <img src="assets/icons/shop.svg" alt="img" class="icon">
                        </picture>
                        <div class="txt-service">
                            <h1 class="title-service">Com o serviço de design</h1>
                            <p class="sub-title">É possível criar uma identidade visual única e adequada ao posicionamento da empresa.</p>
                        </div>
                    </li>

                    <li class="service-main center" data-anime="left">
                        <picture>
                            <img src="assets/icons/shop.svg" alt="img" class="icon">
                        </picture>
                        <div class="txt-service">
                            <h1 class="title-service">Melhoria da experiência do usuário</h1>
                            <p class="sub-title">um design bem feito pode tornar a experiência do usuário mais agradável e fácil.</p>
                        </div>
                    </li>
                </div>
            </ul>

            <!-- button -->
            <div class="buttonn-about center" data-anime="down">
                <a href="#top">
                    <button class="btn">Entre em contato</button>
                </a>
            </div>
        </div>
    </section>

    <!-- INICIO PERGUNTAS -->
    <section class="faq-bg center-container">
        <div class="faq-title-container center" data-anime="down">
            <h1 class="txt-faq">Perguntas Frequentes</h1>
        </div>

        <!-- PRIMEIRA PERGUNTA -->
        <div class="dropdown-list center">
            <div class="faq" data-anime="left">
                <div class="question">
                    <h3>O que é design?</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="answer">
                    <p class="answer-txt">Design é uma área de conhecimento que se dedica a projetar soluções criativas para problemas específicos. Ele envolve a concepção, desenvolvimento e implementação de projetos que visam atender às necessidades dos usuários ou clientes, ao mesmo tempo em que consideram aspectos estéticos, funcionais e ergonômicos.</p>
                </div>
            </div>

            <!-- SEGUNDA PERGUNTA -->
            <div class="faq" data-anime="left">
                <div class="question">
                    <h3>O que é design digital?</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="answer">
                    <p class="answer-txt">O design digital é uma área específica do design que se concentra na criação de soluções visuais para mídias digitais, como sites, aplicativos, jogos, redes sociais, entre outros.</p>
                </div>
            </div>

            <!-- TERCEIRA PERGUNTA -->
            <div class="faq" data-anime="left">
                <div class="question">
                    <h3>Qual é a importância da usabilidade no design de interfaces?</h3>

                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="answer">
                    <p class="answer-txt">A usabilidade é fundamental no design de interfaces, pois ela se refere à facilidade de uso e à experiência do usuário ao interagir com um sistema digital. Um design de interface bem pensado e com boa usabilidade pode aumentar a eficiência e a satisfação do usuário, além de contribuir para a fidelização.</p>
                </div>
            </div>

            <!-- QUARTA PERGUNTA -->
            <div class="faq" data-anime="left">
                <div class="question">
                    <h3>Qual é a diferença entre design gráfico e design de produto?</h3>

                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="answer">
                    <p class="answer-txt">O design gráfico é voltado para a criação de soluções visuais para mídias impressas e digitais, como logotipos, cartazes, embalagens, websites, entre outros. Já o design de produto é focado na concepção e desenvolvimento de objetos físicos, como móveis, eletrodomésticos, veículos, entre outros.</p>
                </div>
            </div>

            <!-- QUINTA PERGUNTA -->
            <div class="faq" data-anime="left">
                <div class="question">
                    <h3>Qual é a diferença entre design responsivo e design adaptativo?</h3>

                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="answer">
                    <p class="answer-txt">O design responsivo se adapta automaticamente ao tamanho da tela do dispositivo utilizado pelo usuário, enquanto o design adaptativo tem layouts diferentes para diferentes tamanhos de tela. O design responsivo é mais flexível e fácil de implementar, mas pode apresentar limitações em relação ao controle da apresentação do conteúdo em diferentes dispositivos, enquanto o design adaptativo oferece mais controle sobre a experiência do usuário em cada dispositivo, mas pode ser mais complexo e trabalhoso de desenvolver.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- INICIO CHAMADA -->
    <section class="call">
        <div class="main-container center">
            <div class="all-container center">
                <div class="container-call center" data-anime="down">
                    <h1 class="txt-header">Faça uma chamada final</h1>
                    <p>Essa é uma chamada para ação final. Chegou até aqui e ainda não cadastrou ? Aproveite...</p>
                </div>

                <div class="background-call center" data-anime="down">
                    <div class="buttonn-call">
                        <p>Não perca a chance de dar uma nova cara para a sua marca! Agende agora mesmo uma consulta com nossos designers e descubra como podemos ajudá-la!</p>
                        <a href="#top">
                            <button class="btn">Entre em contato</button>
                        </a>
                        <p class="mini center">Nossos especialistas vão entrar em contato com você ainda hoje</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer">
            <p>Pixel Design &copy; todos os Direitos Reservados - 2023</p>
            <p>CNPJ 99.999.999 - 0009-99 | TERMOS DE USO</p>
        </div>
    </footer>

    <!--libras-->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <!--end libras-->

    <!-- JS -->
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <script src="js/script.js"></script>

</body>

</html>
