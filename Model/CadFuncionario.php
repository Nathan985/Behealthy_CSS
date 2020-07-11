<?php

    include 'conexao.php';

    $sql = $conn->prepare("INSERT INTO tbl_User (nome, email, senha, nickname, cargo, cpf, telefone) values (?,?,?,?,?,?,?)");

    $sql->bind_param('sssssss', 
    $name,
    $email,
    $senhafun,
    $username,
    $cargo,
    $cpf,
    $tell
    );

    if($sql->execute() == true){
        echo "CadastroRealizado";
        die();
    }
    else{
        echo "ErroCadastro";
        die();
    }

    $sql->close();
    $conn->close();
?>