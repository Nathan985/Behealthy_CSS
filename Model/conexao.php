<?php

    $servidor = '127.0.0.1';
    $usuario = 'root';
    $senha = '';
    $banco = 'behealthy';
    
    $conn = mysqli_connect($servidor, $usuario, $senha, $banco);
    $sql = "SET NAMES 'utf8";
    mysqli_query($conn, $sql);
    $sql = "SET character_set_connection=utf8";
    mysqli_query($conn, $sql);
    $sql = "SET character_set_client=utf8";
    mysqli_query($conn, $sql);
    $sql = "SET character_set_result=utf8";
    mysqli_query($conn, $sql);

    if(mysqli_connect_error($conn)) {

        echo("Erro na conexão: ". mysqli_connect_error());
        die();

        }

    ?>