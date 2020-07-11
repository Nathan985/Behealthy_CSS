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

    include "../Model/ValidarCampos.php";

    if(empty($user)){
        echo "ErroNome";
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
    $linha = ValidNick($nickName);

    if(!empty($linha['nickname'])){
        echo "ErroNickCadastrado";
        die();
    }
    if(empty($cpf)){
        echo "ErroCPf";
        die();
    }

    $linha = ValidCPF($cpf);

    if(!empty($linha['cpf'])){
        echo "ErroCpfCadastrado";
        die();
    }

    if(empty($telefone)){
        echo "ErroTell";
        die();
    }
    include_once "../Model/cadastro.php";

    ?>