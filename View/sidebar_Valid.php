<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="JS/croppie.js"></script>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="../CSS/croppie.css">
    <link rel="stylesheet" href="../CSS/style.css"> -->

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
            //$_SESSION['login'] = null;
            //session_start();
            if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                echo "<a href=../Controller/deslogar.php class='text-decoration-none logout_btn'>Logout</a>";
            } else {
                echo "<a href=tela_login.php class='logout_btn text-decoration-none'>Login</a>";
            }


            ?>
        </div>
    </header>
    <div class="sidebar">
        <center>
            <?php
            if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                echo "<label for=upload_image >";
            }
            if (empty($_SESSION['Img_url'])) {
                $_SESSION['Img_url'] = "default_user.png";
            }
            if (!isset($_SESSION['login']) or $_SESSION['login'] != true) {
                echo "<img id= Default src=../upload/default_user.png class=profile_image>";
            } else {
                $img_url = $_SESSION['Img_url'];
                echo "<img id= AlterImg src=../upload/" . $img_url . " class=profile_image>";
            }

            if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                echo "<img src=../IMG/icon-20x20.png class=Cam_IMG >";
            } ?></label>
            <h4 class="textCSS"><?php
                                if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                                    echo $_SESSION['nome'];
                                } ?></h4>
        </center>
        <Div class="Itens-Side">
            <?php
                    include 'Sidebar.php';
                    $ObjSide = new Sidebar();
                    $cargo;
                    if(isset($_SESSION['cargo'])){
                        $cargo = $_SESSION['cargo'];
                    }
                    else{
                        $cargo = "cliente";
                    }
                    
                    $ObjSide->ValidarAcesso($cargo);
            // include 'Sidebar.php';
            // $ObjSide = new Sidebar();
            // if(empty($cargo)){
            //     $cargo = "cliente";
            // }
            // $ObjSide->ValidarAcesso($cargo);
            ?>
        </Div>
    </div>

    <div class="content">
        <label for="check">
            <i class="fas fa-bars" class="space" id="sidebar_btn"></i>
        </label>
        <input type="file" name="upload_image" id="upload_image" />
        <!-- <script src="../JS/jquery.js"></script> -->
        <!-- <script src="../JS/validacoes.js"></script> -->
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
                        <button id="Img_pf_side" class="btn btn-success crop_image">Crop & Upload Image</button>
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
    // function Reload() {
    //     setTimeout(function() {
    //         window.location.reload();
    //     }, 500)
    // }

    $(document).ready(function() {

        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200,
                type: 'circle' //circle
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
                    Url_Image = event.target.result;
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('#uploadimageModal').modal('show');
        });

        $('#Img_pf_side').click(function(event) {
            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response) {
                $.ajax({
                    url: "../upload.php",
                    type: "POST",
                    data: {
                        "image": response
                    },
                    success: function(data) {
                        $('#uploadimageModal').modal('hide');
                        $('#uploaded_image').html(data);
                        imgmod = document.querySelector('#AlterImg');
                        imgmod.src = Url_Image;

                    }
                });
            })
        });

    });
</script>
