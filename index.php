<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela 1</title>
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="JS/croppie.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="CSS/croppie.css">
    <link rel="stylesheet" href="CSS/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style>
        .Logout_btn {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <input type="checkbox" id="check">
    <header>
        <div class="left_area">
            <h3>Be<span>Healthy</span></h3>
        </div>
        <div class="right_area">
            <?php
            $_SESSION['login'] = null;
            session_start();
            
            if(empty($_SESSION['login'])){
                $_SESSION['login'] == false;
            }
            if ($_SESSION['login'] == true) {
                echo "<a href=Controller/deslogar.php class='text-decoration-none logout_btn'>Logout</a>";
            } else {
                echo "<a href=view/tela_login.php class='logout_btn text-decoration-none'>Login</a>";
            }


            ?>
        </div>
    </header>
    <div class="sidebar">
        <center>
            <?php
            if ($_SESSION['login'] == true) {
                echo "<label for=upload_image >";
            }
            if (empty($_SESSION['Img_url'])) {
                $_SESSION['Img_url'] = "default_user.png";
            }
            if ($_SESSION['login'] != true) {
                echo "<img id= Default src=upload/default_user.png class=profile_image>";
            } else {
                $img_url = $_SESSION['Img_url'];
                echo "<img id= AlterImg src=upload/" . $img_url . " class=profile_image>";
            }

            if ($_SESSION['login'] == true) {
                echo "<img src=IMG/icon-20x20.png class=Cam_IMG >";
            } ?></label>
            <h4 class="textCSS"><?php
                               if($_SESSION['login'] == true){ echo $_SESSION['nome']; }?></h4>
        </center>
        <Div class="Itens-Side">
            <a href="#" class="text-decoration-none"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            <a href="#" class="text-decoration-none"><i class="fas fa-cogs"></i><span>Components</span></a>
            <a href="#" class="text-decoration-none"><i class="fas fa-table"></i><span>Tables</span></a>
            <a href="#" class="text-decoration-none"><i class="fas fa-th"></i><span>Forms</span></a>
            <a href="#" class="text-decoration-none"><i class="fas fa-info-circle"></i><span>About</span></a>
            <a href="#" class="text-decoration-none"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
        </Div>
    </div>

    <div class="content">
        <label for="check">
            <i class="fas fa-bars" class="space" id="sidebar_btn"></i>
        </label>
        <input type="file" name="upload_image" id="upload_image" />
        <center>
            <div class="cards_css">
            <div class="Img_hover"><a class="link-card" href="#"><img width="84px" class="Icon-Card" src="http://www.bioritmo.com.br/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaTRCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--f03e09659436c42bc504838952ac3a91c48b009e/Burn-hiit-zone-white-transparente.svg"><img class="Card_IMG" src="IMG/Card_1.png"></a></div>
            <div class="Img_hover"><a class="link-card" href="#"><img width="84px" class="Icon-Card" src="http://www.bioritmo.com.br/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaXdCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--3a10305235f86ce0c815c54ab9f6c6a6b174b194/Race-bootcamp-white-transparente.svg" alt=""><img class="Card_IMG" src="IMG/Cardt_2.png"></a></div>
            <div class="Img_hover"><a class="link-card" href="#"><img width="84px" class="Icon-Card" src="http://www.bioritmo.com.br/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaThCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--3745e3a8b40b6c5a28cf66c91d1d84b25ab2f961/Vidya-body-mind-white-transparente.svg"><img class="Card_IMG" src="IMG/Cardt_3.png"></a></div>

            </div>
        </center>
    </div>
    <script src="JS/jquery.js"></script>
    <script src="JS/validacoes.js"></script>
</body>
</html>

<div id="uploadimageModal" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload & Crop Image</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 text-center">
                        <div id="image_demo" style="width:350px; margin-top:30px"></div>
                    </div>
                    <div class="col-md-4" style="padding-top:30px;">
                        <br />
                        <br />
                        <br />
                        <button onclick="Reload()" class="btn btn-success crop_image">Crop & Upload Image</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    function Reload() {
        setTimeout(function() {
            window.location.reload();
        }, 500)
    }

    $(document).ready(function() {

        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200,
                type: 'square' //circle
            },
            boundary: {
                width: 300,
                height: 300
            }
        });

        $('#upload_image').on('change', function() {
            var reader = new FileReader();
            reader.onload = function(event) {
                $image_crop.croppie('bind', {
                    url: event.target.result
                }).then(function() {
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('#uploadimageModal').modal('show');
        });

        $('.crop_image').click(function(event) {
            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response) {
                $.ajax({
                    url: "upload.php",
                    type: "POST",
                    data: {
                        "image": response
                    },
                    success: function(data) {
                        $('#uploadimageModal').modal('hide');
                        $('#uploaded_image').html(data);
                    }
                });
            })
        });

    });
</script>

<?php

// include("Model/conexao.php");

// if (isset($_FILES['Img'])) {

//     $tipo = strtolower(substr($_FILES['Img']['name'], -4));
//     $nome = md5(time()) . $tipo;
//     $diretorio = "upload/";

//     move_uploaded_file($_FILES['Img']['tmp_name'], $diretorio . $nome);

//     $sql_code = $conn->prepare("INSERT INTO img_user (arquivo, data) values ('$nome', NOW())");
//     // $mysqli ->query($sql_code);
//     $sql_code->execute();
// }
?>