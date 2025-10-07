<?php

    $bdNome = "sailus";
    $bdServidor = "localhost";
    $bdUsuario = "root";
    $bdSenha = "8156784815";

    $conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdNome);

    if(!$conexao)
    {
        die("Conexão falhou: " . mysqli_connect_error());
    }
    else
    {
        echo "Conexão realizada com sucesso!";
    }

    mysqli_close($conexao);
?>