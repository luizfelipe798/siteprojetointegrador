<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/cadastromedico.css">

    <title>Cadastro para médico - Sailus</title>
</head>
<body>
    <form action="">
        <div class="logoFormulario">
            <img src="../imagens/logosomentetexto.png" alt="Logotipo Sailus">
        </div>
        <div class="inputsFormulario">
            <select name="tipo" id="" hidden>
                <option value="Médico" checked>Funcionário</option>
            </select>

            <input type="text" placeholder="Nome" name="nome" required>

            <input type="text" placeholder="E-mail" name="email" required>

            <input type="tel" placeholder="Telefone" name="telefone" required>

            <input type="password" placeholder="Senha" name="senha" required>

            <input type="text" placeholder="CRM" name="crm" required>

            <input type="text" placeholder="Especialidade" name="especialidade" required>

            <input type="number" placeholder="Nº de pacientes responsáveis" name="nPacienteResponsavel" required>

            <select name="plantonista" id="plantonista">
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select>
        </div>
        <div class="btnFormulario">
            <button type="submit">Cadastrar-se</button>
        </div>
    </form>
    <div class="naoPossuiFormulario">
        <p>Já é cadastrado?</p>
        <a href="../login.html">logar-se</a>
    </div>
</body>
</html>