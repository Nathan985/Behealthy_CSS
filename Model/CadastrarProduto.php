<?php

    if(empty($_POST)){
        header("Location: ../View/tela_login.php");
    }

    include 'conexao.php';


    $sql = $conn->prepare("INSERT INTO tbl_Produtos (codBarras, nome, descicao, preco, estoque, foto)
     values (?, ?, ?, ?, ?, ?)");

    $sql->bind_param('issdis', $CodBarras, $Nome, $Descricao, $Preco, $Estoque, $Imagem);

    if($sql->execute() == true){
        echo "Produto Cadastrado!";
        die();
    }
    else{
        echo "Erro Cadastro!";
        die();
    }

    $sql->close();
    $conn->close();

?>