<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<!--Página de fale conosco-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Filtro de água sustentável: fale conosco</title>
        <link rel="stylesheet" href="reset.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css">
        <!--<link rel="stylesheet" href="sweetalert2.min.css">-->
        <script src="https://unpkg.com/scrollreveal"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="fale_conosco.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Josefin+Sans:wght@400;700&family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;700&display=swap"
        rel="stylesheet">
        <link rel="shortcut icon" type="imagex/svg" href="./assets/logo.svg">
    </head>
    
    <body>
        <!--Cabeçalho/navbar-->
        <header class="cabecalho">
            <div class="container">
            <!--Menu hambúrguer (layout mobile)-->
            <input type="checkbox" class="menu-checkbox" />
            <div class="menu-lines">
                <span></span>
                <span></span>
                <span></span>
            </div>
    
    
            <!--Itens do cabeçalho-->
            <ul class="lista-menu">
                <li class="lista-menu__titulo">Atividades</li>
                <li class="lista-menu__item">
                <a href="#" class="lista-menu__link">Home</a>
                </li>
    
                <li class="lista-menu__item">
                <a href="./Agua.html" class="lista-menu__link">A água</a>
                </li>
    
                <li class="lista-menu__item">
                <a href="./Documentario.html" class="lista-menu__link">Documentário</a>
                </li>
    
                <li class="lista-menu__item">
                <a href="./cartilha_hq.html" class="lista-menu__link">Cartilha e HQ</a>
                </li>
    
                <li class="lista-menu__item">
                    <a href="http://localhost/Filtro-de-agua-sustentavel/fale_conosco.php" class="lista-menu__link">Fale conosco</a>
                </li>
    
                <li class="lista-menu__item">
                <a href="#" class="lista-menu__link">Trabalhos da Comunidade</a>
                </li>
    
            </ul>
            </div>
    
            <!--Navbar: tablet e desktop-->
            <nav class="cabecalho__navbar">
                <div class="cabecalho__navbar__container">
                    <div class="cabecalho__navbar__container-id">
                    <img src="assets/logo.svg" class="cabecalho__container-id-logo" alt="Logo Afluente do Saber">
                    <h2 class="cabecalho__container-id-nome"> AFLUENTE DO SABER</h2>
                    </div>
        
                    <ul class="cabecalho__navbar__opcoes">
                    <li class="lista-menu__item">
                        <a href="./index.html" class="lista-menu__link">Home</a>
                    </li>
        
                    <li class="lista-menu__item">
                        <a href="./Agua.html" class="lista-menu__link">A água</a>
                    </li>
        
                    <li class="lista-menu__item">
                        <a href="./Documentario.html" class="lista-menu__link">Documentário</a>
                    </li>
        
                    <li class="lista-menu__item">
                        <a href="./cartilha_hq.html" class="lista-menu__link">Cartilha e HQ</a>
                    </li>
        
                    <li class="lista-menu__item">
                        <a href="http://localhost/Filtro-de-agua-sustentavel/fale_conosco.php" class="lista-menu__link">Fale conosco</a>
                    </li>
        
                    <li class="lista-menu__item">
                        <a href="#" class="lista-menu__link">Trabalhos da Comunidade</a>
                    </li>
                    </ul>
                </div>
            </nav>
    
    
            <!--Logo e nome do site - mobile-->
            <div class="cabecalho__container-id">
            <h2 class="cabecalho__container-id-nome"> AFLUENTE DO SABER</h2>
            <img src="assets/logo.svg" class="cabecalho__container-id-logo" alt="Logo Afluente do Saber">
            </div>
        </header>

        <!--FORMULÁRIO DO FALE CONOSCO-->
        <section class = "secao__formulario">
            <div class = "formulario">
                <form id = "form">
                    <h2 class = "form__titulo">FORMULÁRIO DE CONTATO</h2>
                    <label>Nome</label> 
                    <input type = "text" name = "nome" placeholder = "Insira seu nome" required><br><br>
                    <label>Email</label> 
                    <input type = "text" name = "email" placeholder = "Insira seu email" required><br><br>
                    <label>Assunto </label> 
                    <input type = "text" name = "assunto" placeholder = "Sobre o que você quer falar?" required><br><br>
                    <label>Mensagem</label>
                    <textarea name = "mensagem" required> </textarea>
                    <input type = "submit" value = "Enviar" class = "botao__enviar__mensagem">
                </form>
            </div>

            <!--CONTATOS COMPLEMENTARES: INSTAGRAM, OUTLOOK E LINKEDIN-->
            <div class = "texto__ao__lado__formulario">
                <h1 class = "texto__ao__lado__formulario__titulo">FALE CONOSCO!</h1>
                <p class = "texto__ao__lado__formulario__paragrafo">Envie uma mensagem para nós por meio do formulário! </p>
                <p class = "texto__ao__lado__formulario__paragrafo">Ou entre em contato pelas nossas redes sociais clicando nos ícones abaixo!</p> 
                <div class="rodape__container__desktop__coluna2__itens__redes__sociais redes__sociais__fale__conosco">
                    <a href="https://www.instagram.com/etec.ciencia/"><img src="./assets/instagram.png"
                    class="rodape__container__desktop__coluna2__itens__redes__sociais__individual imagens__redes_sociais__fale__conosco" alt = "instagram"></a>
                    <a href="https://www.instagram.com/etec.ciencia/"><img src="./assets/email__outlook.png"
                    class="rodape__container__desktop__coluna2__itens__redes__sociais__individual imagens__redes_sociais__fale__conosco"></a>
                    <a href="https://www.instagram.com/etec.ciencia/"><img src="./assets/linkedin.png"
                    class="rodape__container__desktop__coluna2__itens__redes__sociais__individual imagens__redes_sociais__fale__conosco"></a>
                </div> 
            </div>
        </section>
        
    
        <!--FOOTER-->
        <footer class="rodape">
            <div class="rodape__container">
            <img src="assets/logo.svg" class="rodape__logo" alt="Logo Afluente do Saber">
            <h2 class="rodape__titulo">Afluente do Saber</h2>
            </div>
    
            <div class="rodape__copyright">
            <p class="rodape__copyright__texto">Copyright © 2023 Afluente do Saber. Todos os direitos reservados.</p>
            </div>
    
            <div class="rodape__container__desktop">
            <div class="rodape__container__desktop__coluna1">
                <img src="./assets/logo.svg" class="rodape__container__desktop__coluna1__logo">
            </div>
    
            <div class="rodape__container__desktop__coluna2">
                <div class="rodape__container__desktop__coluna2__itens">
                <p class="rodape__container__desktop__coluna2__itens__texto">"O ouro tem muito valor e pouca utilidade
                    comparado à água, que é a coisa mais útil do mundo e não lhe dão valor."<br>
                    Platão</p>
    
                <div class="rodape__container__desktop__coluna2__itens__redes__sociais">
                    <img src="./assets/instagram.png"
                    class="rodape__container__desktop__coluna2__itens__redes__sociais__individual">
                    <img src="./assets/email__outlook.png"
                    class="rodape__container__desktop__coluna2__itens__redes__sociais__individual">
                    <img src="./assets/linkedin.png"
                    class="rodape__container__desktop__coluna2__itens__redes__sociais__individual">
                </div>
    
                <p class="rodape__container__desktop__coluna2__copyright">Copyright © 2023 Afluente do Saber. Todos os
                    direitos reservados.</p>
                </div>
            </div>
    
            <div class="rodape__container__desktop__coluna3">
                <ul class="rodape__container__desktop__coluna3__lista">
                <li class="rodape__container__desktop__coluna3__lista__item">
                    <a href="./Agua.html" class="rodape__container__desktop__coluna3__lista__item__link">A água</a>
                </li>
    
                <li class="rodape__container__desktop__coluna3__lista__item">
                    <a href="./Documentario.html" class="rodape__container__desktop__coluna3__lista__item__link">Documentário</a>
                </li>
    
                <li class="rodape__container__desktop__coluna3__lista__item">
                    <a href="./cartilha_hq.html" class="rodape__container__desktop__coluna3__lista__item__link">Cartilha e HQ</a>
                </li>
                </ul>
            </div>
            </div>
        </footer>
    
        <!--INCLUSÃO: API DE LIBRAS-->
        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
            new window.VLibras.Widget({
                rootPah: '/app',
                personalization: 'https://vlibras.gov.br/config/default_logo.json',
                opacity: 0.5,
                position: 'BR',
                avatar: 'random',
            });
        </script>
    
        <!--CONEXÃO COM OS ARQUIVOS.JS-->
        <script src="js/main.js"></script>
        <script src="js/animacoes.js"></script>
        <script src="js/validacao.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>
