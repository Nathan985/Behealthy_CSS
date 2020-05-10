<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC</title>
    <link rel="stylesheet" href="../CSS/style_Login.css">
    <script src="../package/dist/sweetalert2.all.min.js"></script>
    <style>
        .alertCustom {
            border-radius: 0.7rem 0.7rem 0.7rem 0.7rem;
            background-color: rgb(224, 221, 221);
        }

        .CustomColor {

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

            background-image: linear-gradient(to right, #ff105f, #ffad06);
        }

        .swal2-icon.swal2-success {
            border-color: rgba#ffad06;
            color: #ffad06;
        }

        .btnColor {
            width: 70%;
            padding: 10px 30px;
            border: none;
            border-radius: 30px;
            background-image: linear-gradient(to right, #ff105f, #ffad06);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Div Master -->
    <div class="hero">
        <!-- Botões alternantes entre login e registro -->
        <div class="form-box">
            <div class="button-box" id="BtnsElement">
                <div id="btn"></div>
                <center>
                    <button type="button" class="toggle-btn" id="ElementLogin">Login</button>
                    <button type="button" class="toggle-btn" id="ElementRegister">Register</button>
                </center>
            </div>

            <!-- Icones de rede Social -->
            <div class="social-icons">
                <a href="https://www.facebook.com/profile.php?id=100008487227995" target="_blank"><img
                        src="../IMG/fb.png" alt=""></a>
                <a href="https://twitter.com/NathanR69314842" target="_blank"><img src="../IMG/tw.png" alt=""></a>
                <a href="https://drive.google.com/drive/u/0/my-drive" target="_blank"><img src="../IMG/gp.png"
                        alt=""></a>
            </div>

            <!-- Formulario de Login -->
            <form action="../Controller/ValidLogin.php" id="Login" class="input-group" method="post">
                <div class="alert d-none" id="verLogin">Incorrect username/password</div>
                <input type="text" class="input-field" placeholder="Name" name="Iden" id="user">
                <div class="d-none alert" id="userErro">Invalid user name</div>
                <input type="password" class="input-field" placeholder="Password" name="Pass" id="pass">
                <div class="d-none alert" id="passErro">Invalid password</div>
                <input type="checkbox" class="chech-box" name="check" id="Check"><span class="span">Remember
                    Password</span>
                <button type="submit" class="submit-btn">Login</button>
            </form>

            <!---->

            <!-- Formulario de Registro -->
            <form action="../Controller/ValidCad.php" class="input-group-cad" method="post" id="Register">
                <input type="text" class="input-field" placeholder="Name" name="User" id="Name">
                <small class="alert d-none" id="CadName">Empty name field</small>
                <input type="text" class="input-field" placeholder="E-mail" name="E-mail" id="Mail">
                <small class="alert d-none" id="CadEmail">Empty email field</small>
                <input type="password" class="input-field" placeholder="Password" name="senhacad" id="CadPass">
                <small class="alert d-none" id="Cadsenha">Empty password field</small>
                <input type="password" class="input-field" placeholder="Confirm Password" name="CPass" id="CadCpPass">
                <small class="alert d-none" id="CadConfirm">Field confirm empty</small>
                <small class="alert d-none" id="CadConfirm2">Unmatched password</small>

                <!-- Botões de Paginação do Registro -->
                <div class="group-pages">
                    <div class="paginas" id="Page1"></div>
                    <div class="paginas" id="ElementClick"></div>
                </div>
                <!-- Botão Próxima Pagina do Cadastro -->
                <div class="button-box-cad">
                    <div id="btn"></div>
                    <center><button type="button" id="ElementNext" class="toggle-btn-cad">Next <img src="../IMG/icons8-maior-que-24.png" height="8px" alt=""></button></center>
                </div>

                <!-- Pagina 2 do Cadastro -->
                <span class="input-group-cad" id="Page">
                    <input type="text" class="input-field" placeholder="Username" name="Username" id="cadUsername">
                    <small class="alert d-none" id="CadNick">Invalid Username field</small>
                    <input type="text" class="input-field" placeholder="CPF" name="CPF" id="cadCPF">
                    <small class="alert d-none" id="CadCpf">Empty CPF field</small>
                    <input type="text" class="input-field" placeholder="Phone" name="Tell" id="Cadtell">
                    <small class="alert d-none" id="Cadtelefone">Empty phone field</small>
                    
                    <!-- Botões de Paginação do Registro -->
                    <div class="group-pages" id="pagCad">
                        <div class="paginas" id="ElementBack" id="Page1"></div>
                        <div class="paginas" id="Page2"></div>
                    </div>

                    <!-- Botão para voltar para pagina 1 de Cadastro -->
                    <div class="button-box-cad2">
                        <div id="btn"></div>
                        <center><button type="button" id="BtnBackElement" class="toggle-btn-cad">Voltar</button>
                        </center>
                    </div>

                    <!-- Concoluir Cadastro do Form 1 & 2 -->
                    <center><button type="submit" class="submit-btn">Cadastro</button></center>

                </span>
            </form>
        </div>
    </div>
    
    <script src="../JS/AnimationForm.js"></script>
    <script src="../jquery/jquery.js"></script>
    <script src="../JS/validacoes.js"></script>
</body>

</html>