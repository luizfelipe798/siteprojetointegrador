<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../imagens/logotiposalus.png" type="image/x-icon">

    <link rel="stylesheet" href="../css/cadastro_login.css">

    <title>Cadastro de funcionário - Sailus</title>
</head>
<body>
    <form action="" method="POST">
        <div class="logoFormulario">
            <a href="../index.php"><img src="../imagens/logosomentetexto.png" alt="Logotipo Sailus"></a>
        </div>
        <div class="inputsFormulario">
            <input type="hidden" name="tipo_user" value="funcionario">
            <input type="hidden" name="acao" value="cadastro">

            <input type="text" placeholder="Nome" name="nome" required>

            <input type="text" placeholder="E-mail" name="email" required>

            <input type="tel" placeholder="Telefone" name="telefone" required>

            <input type="password" placeholder="Senha" name="senha" required>

            <input type="date" placeholder="Data de contratação" name="dtContratacao" required>

            <select name="turno" id="turno">
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
                <option value="Noite">Noite</option>
            </select>
        </div>
        <div class="btnFormulario">
            <button type="submit">Cadastrar-se</button>
        </div>
    </form>

    <div class="naoPossuiFormulario">
        <p>Já é cadastrado?</p>
        <a href="login.php">logar-se</a>
    </div>

    <?php if(isset($_SESSION['erro_cadastro'])) : ?>
        
    <?php endif; ?>
</body>
</html>