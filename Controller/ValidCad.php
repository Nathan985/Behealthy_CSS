<?php 

    if(empty($_POST)){
        header("Location: ../");
        die();
    }

    $user = $_POST['User'];
    $email = $_POST['E-mail'];
    $senhacad = $_POST['senhacad'];
    $confsenha = $_POST['CPass'];
    #Segunda Pag.
    $nickName = $_POST['Username'];
    $cpf = $_POST['CPF'];
    $telefone = $_POST['Tell'];

    if(empty($user)){
        echo "ErroNome";
        die();
    }

    if(empty($email)){
        echo "ErroEmail";
        die();
    }

    if(empty($senhacad)){
        echo "ErroSenhacad";
        die();
    }
    if(empty($confsenha)){
        echo "ErroConfSenha";
        die();
    }
    if($senhacad != $confsenha){
        echo "SenhasDiferentes";
        die();
    }
    if(empty($nickName)){
        echo "ErroNick";
        die();
    }
    if(empty($cpf)){
        echo "ErroCPf";
        die();
    }
    if(empty($telefone)){
        echo "ErroTell";
        die();
    }
    include_once "../Model/cadastro.php";

    ?>