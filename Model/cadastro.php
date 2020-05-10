<?php
    include 'conexao.php';

    $sql = $conn->prepare("INSERT INTO tbl_User (nome, email, senha, nickname, cpf, telefone)
     values (?, ?, ?, ?, ?, ?)");


    $sql->bind_param('ssssss',
            $user,
            $email,
            $senhacad,
            $nickName,
            $cpf,
            $telefone,
        );

    if($sql->execute() == true){
        echo "ClienteCadastrado";
        die();
    }
    else{
        echo "FalhaCadastrado";
        die();
    }

    

    $sql->close();
    $conn->close();

    ?>