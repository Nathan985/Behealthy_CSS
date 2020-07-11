<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
    <link rel="stylesheet" href="../CSS/style_Login.css">
    <script src="../package/dist/sweetalert2.all.min.js"></script>
    <script src="../jquery/jquery.min.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>
    <script src="../JS/croppie.js"></script>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="../CSS/croppie.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <style>
        .CustomText {
            /* font-size: 40px; */
            color: white;
            /* font-weight: bold; */
        }
        .CustomColor {
            font-size: 15px;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    include 'ControleDeAcesso.php';
    $ObjAcc = new ControleDeAcesso();
    $ObjAcc->ValidarAcesso("Func");
    include 'sidebar_Valid.php';
    ?>
    <!-- <center> -->
    <div class="container-fun">
        <h1 class="title">Cadastrar Funcionario</h1>

        <div id="form-fun" class="form-fun row">

            <form action="../Controller/ValidCadFuncionario.php" method="post" id="Register-fun">
                <div class="container-form-fun col-lg-6">
                    <!-- <center> -->
                    <input type="text" class="input-field" placeholder="Name" name="namefun" id="Name_fun">
                    <small class="alert-fun d-none" id="Name_sml_fun">Empty name field</small>
                    <input type="text" class="input-field" placeholder="E-mail" name="E-mail" id="E-Mail_cad_fun">
                    <small class="alert-fun d-none" id="E-mail_sml_fun">Empty email field</small>
                    <small class="alert-fun d-none" id="E-mail_cad_sml_fun">E-mail already registered</small>
                    <input type="password" class="input-field" placeholder="Password" name="senhacad" id="Pass_fun">
                    <small class="alert-fun d-none" id="Pass_sml_fun">Empty password field</small>
                    <input type="password" class="input-field" placeholder="Confirm Password" name="CPass" id="CfPass_fun">
                    <small class="alert-fun d-none" id="Pass_sml_conf_fun">Field confirm empty</small>
                    <small class="alert-fun d-none" id="Pass_sml_unm_fun">Unmatched password</small>
                </div>
                <div class="container-form-fun col-lg-6">
                    <input type="text" class="input-field" placeholder="Username" name="User" id="Username_fun">
                    <small class="alert-fun d-none" id="User_sml_fun">Empty username field</small>
                    <small class="alert-fun d-none" id="User_cad_sml_fun">Username already registered</small>
                    <input type="text" class="input-field" placeholder="CPF" name="Cpf" id="Cpf_fun">
                    <small class="alert-fun d-none" id="Cp_smlf_fun">Empty cpf field</small>
                    <small class="alert-fun d-none" id="Cpf_cad_sml_fun">CPF already registered</small>
                    <input type="text" class="input-field" placeholder="Phone" name="tell" id="tell_fun">
                    <small class="alert-fun d-none" id="Phone_sml_fun">Empty Phone field</small>
                    <select name="Cargo" id="Cargo_fun" class="input-field input-select">
                        <option value="adm">Adiministrador</option>
                        <option value="Func">Funcionario</option>
                    </select>
                    <small class="alert-fun d-none" id="Cargo_sml_fun">Select Position</small>
                    <!-- <input type="password" class="input-field" placeholder="Confirm Password" name="CPass" id="CadCpPass">
                        <small class="alert d-none" id="CadConfirm2">Unmatched password</small> -->
                    <!-- </center> -->
                </div>
        </div>
        <center><button type="submit" class="btn-fun">Cadastro</button></center>
        </form>
    </div>
    <script src="../JS/jquery.js"></script>
    <script src="../JS/validacoes.js"></script>
    <!-- </center> -->
</body>

</html>