<?php

    if(!isset($_POST) or empty($_POST)){

        header("Location: ../View/View_adm.php");
        die();

    }

    $name = $_POST['namefun'];
    $email = $_POST['E-mail'];
    $senhafun = $_POST['senhacad'];
    $confSenha = $_POST['CPass'];
    $username = $_POST['User'];
    $cpf = $_POST['Cpf'];
    $tell = $_POST['tell'];
    $cargo = $_POST['Cargo'];

    include "../Model/ValidarCampos.php";

    if(empty($name)){
        echo "ErroName";
        die();
    }
    if(empty($email)){
        echo "ErroEmail";
        die();
    }
    
    $linha = ValidEmail($email);

    if(!empty($linha['email'])){
        echo "ErroEmailCadastrado";
        die();
    }

    if(empty($senhafun)){
        echo "ErroSenha";
        die();
    }
    if(empty($confSenha)){
        echo "ErroConfSenha";
        die();
    }
    if($senhafun != $confSenha){
        echo "ErroSenhasDiferentes";
        die();
    }
    if(empty($username)){
        echo "ErroUser";
        die();
    }

    $linha = ValidNick($username);

    if(!empty($linha['nickname'])){
        echo "ErroUserCadastrado";
        die();
    }
    if(empty($cpf)){
        echo "ErroCpf";
        die();
    }

    $linha = ValidCPF($cpf);
    if(!empty($linha['cpf'])){
        echo "ErrorCpfCadastrado";
        die();
    }

    if(empty($tell)){
        echo "ErroTell";
        die();
    }

    if(empty($cargo)){
        echo "ErroCargo";
        die();
    }

    include_once '../Model/CadFuncionario.php';



?>