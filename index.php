<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/pageindex.css">
    <link rel="stylesheet" href="css/rodape.css">

    <link rel="shortcut icon" href="imagens/logotiposalus.png" type="image/x-icon">

    <title>Sailus - Página inicial</title>
</head>
<body>
    <!--Menu Principal-->
    <?php
        include "includes/menu.php";
    ?>

    <!--Conteúdo principal do body-->
    <div class="textoImagemExplicativos">
        <div class="textoExplicativo">
            <h1 class="tituloDestacado">Organização para uma saúde melhor</h1>

            <p class="paragrafoExplicativo">
                O Sailus simplifica o gerenciamento de consultas médicas, conectando funcionários e médicos para uma melhor gestão no trabalho!
                Conecte-se conosco já!
            </p>

            <div class="btnsExplicativo"> 
                <a class="btnEntrarAgora" href="paginas/login.html">Entre agora</a>
                <a class="btnConhecaNos" href="paginas/sobre.html">Conheça-nos</a>
            </div>
        </div>
        
        <div class="imagemExplicativa">
            <img src="imagens/user_img.png" alt="Imagem demonstrativa">
        </div>
    </div>
    <div class="sobrenosBody" id="sobrenosBody">
        <div class="ContainerTituloAndTextoSobrenosBody">
            <div class="tituloSobreNosBody">
                <h1>Sobre nós</h1>
            </div>
            <div class="textoSobrenosBody">
                <p>Somos estudantes do curso Técnico em Informática Integrado ao Ensino Médio, realizando este projeto que representa a consolidação da nossa jornada acadêmica, desenvolvido como projeto integrador do curso.</p>
                <p>Com o objetivo de aplicar na prática os conhecimentos adquiridos ao longo do curso, criamos um sistema de gerenciamento de consultas médicas moderno, funcional e acessível.</p>
                <p>Nosso sistema foi pensado para que médicos e funcionários possam armazenar dados de agendamentos de consultas médicas, funcionários, médicos, pacientes e atestados médicos do nosso consultório, desfazendo-se assim de meios analógicos para estes fins.</p>
                <p>Essa é a primeira versão do projeto, sendo pensada para alcançar uma interface intuitiva, acessível e que cumpra seu papel.</p>
            </div>
        </div>
        <div class="ContainerTituloAndImagensDesenvolvedoresBody" id="desenvolvedoresBody">
            <div class="tituloDesenvolvedoresBody">
                <h1>Desenvolvedores</h1>
            </div>
            <div class="imagensDesenvolvedoresBody">
                <div class="desenvolvedor">
                    <img src="imagens/desenvolvedores/vinicius.jpg" alt="Desenvolvedor 1">
                    <p>Vinicius de Sousa Molina</p>
                </div>
                <div class="desenvolvedor">
                    <a href="https://www.instagram.com/_mari._silvap/"><img src="imagens/desenvolvedores/luizfelipe.jpg" alt="Desenvolvedor 2"></a>
                    <p>Luiz Felipe Vignoto Silva</p>
                </div>
                <div class="desenvolvedor">
                    <img src="imagens/desenvolvedores/mariana.jpg" alt="Desenvolvedor 3">
                    <p>Mariana da Silva Peres</p>
                </div>
                <div class="desenvolvedor">
                    <img src="imagens/desenvolvedores/murilo.jpg" alt="Desenvolvedor 4">
                    <p>Murilo Silva Amâncio</p>
                </div>
            </div>
        </div>
    </div>

    <?php
        include "includes/rodape.php";
    ?>
</body>
</html>