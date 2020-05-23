<?php 

    include 'conexao.php';

    $sql = $conn->prepare("SELECT * FROM tbl_User WHERE 
    (email = ? OR nickname = ?) AND senha = ?");

    $sql->bind_param("sss", $user, $user, $pass);

    $sql->execute();

    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();

    $sql -> close();
    $conn -> close();

    if(empty($linha)){

        echo "FalhaLogin";
        $_SESSION['login'] = false;
        die();

        }
    else {
        $_SESSION['idPessoa'] = $linha['idUser'];
        $_SESSION['login'] = true;
        $_SESSION['nome'] = $linha['nome'];
        $_SESSION['cargo'] = $linha['cargo'];
        $_SESSION['ativo'] = $linha['ativo'];
        $_SESSION['Img_url'] = $linha['arquivo'];

        if($linha['ativo'] == "inativo"){

            echo "NãoAtivo";
            die();
        }


        switch($linha['cargo']){
            case "cliente":
        echo "SucessoCliente";
        die();
        case "adm":
            echo "SucessoADM";
            die();
        }
            }
    
        header("Location: ../index.php");
    ?>