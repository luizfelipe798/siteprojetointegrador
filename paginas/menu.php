<html>
<body>

    <?php if(isset($_SESSION['user'])): ?>
        <nav>
            <div class="logo">
                <a href="../index.html"><img src="../imagens/logosomentetexto.png" alt="Logotipo Sailus"></a>
            </div>
            <ul class="nav-links">
                <li><a href="#menuPrincipal">Início</a></li>
                <li><a href="#sobrenosBody">Alterar dados</a></li>
                <li><a href="#footer">Excluir dados</a></li>
                <li><a href="#desenvolvedoresBody">Sair</a></li>
            </ul>
        </nav>

    <?php 
        endif;
        else(header("Location: ../login.html"));
    ?>

    <div class="textoIntuitivoBody">
        <div class="textoIntuitivo">
            <h1>Bem-vindo(a) <?php echo $_SESSION['user']; ?>!</h1>
            <p>Com o Sailus, o armazenamento dos atendimentos fica muito melhor! Gostaria de fazer algo hoje?</p>
        </div>
        <div class="imagemIntuitiva">
            <img src="../" alt="Logotipo Usuario">
        </div>
    </div>

</body>
</html>