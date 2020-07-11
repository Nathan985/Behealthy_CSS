<?php

    session_start();
    if(empty($_POST)){
        header("Location: ../View/CadProduto.php");
        die();
    }

    $CodBarras = (int) $_POST['cod_Pdt'];
    $Nome = $_POST['nome_Pdt'];
    $Descricao = $_POST['desc_Pdt'];
    $Preco = (double) $_POST['preco_Pdt'];
    $Estoque = (int) $_POST['estoque_Pdt'];
    $Imagem = $_FILES['upload_image_pdt']['name'];
    $Imagem_Upload = $_FILES['upload_image_pdt'];

    
    
    include '../Model/ValidarCampos.php';


    if(ValidarCampo($CodBarras) or !is_int($CodBarras) or mb_strlen($CodBarras) < 13){
        echo "Erro Codigo";
        die();
    }

    $linha = ValidCodBarras($CodBarras);
    if(!empty($linha['codBarras'])){
        echo "Codigo Existe";
        die();
    }
    if(ValidarCampo($Nome)){
        echo "Erro Nome";
        die();
    }
    if(ValidarCampo($Descricao)){
        echo "Erro Descricao";
        die();
    }
    if(!isset($Imagem) or empty($Imagem)){
        echo "Erro Imagem";
        die();
    }
    if(ValidarCampo($Preco) or !is_double($Preco)){
        echo "Erro Preco";
        die();
    }
    if(ValidarCampo($Estoque) or !is_int($Estoque)){
        echo "Erro Estoque";
        die();
    }
    include 'UploadFotoProduto.php';
    $ObjFoto = new UploadFotoProduto();
    $Imagem = $ObjFoto->CadastrarFoto($Imagem_Upload);

    include '../Model/CadastrarProduto.php';
    

    function ValidarCampo($Campo){

        if(empty($Campo)){
            return true;
        }

    }
?>