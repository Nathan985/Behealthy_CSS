<?php

    session_start();
    unset($_SESSION['idPessoa'], $_SESSION['login'], $_SESSION['nome'], $_SESSION['cargo'], $_SESSION['ativo'], $_SESSION['Img_url']);
    $_SESSION['login'] = false;
    $_SESSION['nome'] = "";
    include_once '../View/tela_login.php';

?>