<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../imagens/logotiposalus.png" type="image/x-icon">

    <link rel="stylesheet" href="../css/cadastro_login.css">

    <title>Login - Sailus</title>
</head>
<body>
    <form action="">
        <div class="logoFormulario">
            <a href="../index.php"><img src="../imagens/logosomentetexto.png" alt="Logotipo Sailus"></a>
        </div>
        <div class="inputsFormulario">
            <input type="hidden" name="acao" value="login">
            <input type="text" placeholder="E-mail" required name="email">

            <input type="text" placeholder="Senha" required name="senha">

            <select name="tipo" id="tipoUsuario">
                <option value="funcionario">Funcionário</option>
                <option value="medico">Médico</option>
            </select>
        </div>
        <div class="btnFormulario">
            <button type="submit">Login</button>
        </div>
    </form>
    <div class="naoPossuiFormulario">
        <p>Ainda não é cadastrado?</p>
        <a href="escolha.html">Cadastrar-se</a>
    </div>
</body>
</html>