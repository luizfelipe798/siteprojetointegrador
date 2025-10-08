<?php
    $email = $conexao->real_escape_string($_POST['email']);
    $senhaDigitada = $_POST['senha'];
    $senhaProtegida = password_hash($senhaDigitada, PASSWORD_DEFAULT, ['cost' => 12]);

    $acao = $_POST['acao'];

    switch($acao)
    {
        case "cadastro":
            $tipoUsuario = $_POST['tipo_user'];

            if($tipoUsuario === "Funcionario")
            {

            }
            else if($tipoUsuario === "Medico")
            {

            }
        break;

        case "login":

        break;
    }
?>