<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/cadastrofuncionario.css">

    <title>Cadastro para funcionário - Sailus</title>
</head>
<body>
    <form action="">
        <div class="logoFormulario">
            <img src="../imagens/logosomentetexto.png" alt="Logotipo Sailus">
        </div>
        <div class="inputsFormulario">
            <select name="tipo" id="" hidden>
                <option value="Funcionário" checked>Funcionário</option>
            </select>

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
        <a href="login.html">logar-se</a>
    </div>
</body>
</html>