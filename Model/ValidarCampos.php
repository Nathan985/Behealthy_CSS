<?php

function ValidEmail($email){
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM tbl_User WHERE email = ?");
    $sql->bind_param("s", $email);
    $sql->execute();

    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();

    return $linha;
}

function ValidNick($nick){
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM tbl_User WHERE nickname = ?");
    $sql->bind_param("s", $nick);
    $sql->execute();

    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();

    return $linha;
}

function ValidCPF($cpf){
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM tbl_User WHERE cpf = ?");
    $sql->bind_param("s", $cpf);
    $sql->execute();

    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();

    return $linha;
}

function ValidCodBarras($cod){
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM tbl_Produtos WHERE codBarras = ?");
    $sql->bind_param("i", $cod);
    $sql->execute();

    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();

    return $linha;
}

?>