<?php 
    session_start();

    if(empty($_POST)){
        header("Location: ../");
        die();
    }

    $user = $_POST['Iden'];
    $pass = $_POST['Pass'];

    if(empty($user)){
        echo "ErroEmail";
        die();
    }

    if(empty($pass)){
        echo "ErroSenha";
        die();
    }

    include_once '../Model/login.php';

    ?>