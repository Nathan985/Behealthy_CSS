<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../jquery/jquery.min.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>
    <script src="../JS/croppie.js"></script>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="../CSS/croppie.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/style_Login.css">
    <script src="../package/dist/sweetalert2.all.min.js"></script>
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
        $cargo = "Func";
        include 'ControleDeAcesso.php';
        $ObjControle = new ControleDeAcesso;
        $ObjControle->ValidarAcesso($cargo);
        include 'sidebar_Valid.php';
    ?>  
    <div class="container-fun">
        <h1 class="title">Cadastrar Produto</h1>

        <div id="form-Produto" class="form-fun row">

            <form action="../Controller/ValidarProduto.php" enctype="multipart/form-data" method="post" id="Register-Produto">
                <div class="container-form-fun col-lg-6">
                    <!-- <center> -->
                    <input type="text" class="input-field" placeholder="Codigo de Barras" name="cod_Pdt" id="Cod_Pdt">
                    <small class="alert-fun d-none" id="Cod_sml_pdt">Invalid Barcode</small>
                    <small class="alert-fun d-none" id="Cod_cad_sml_pdt">barcode already exists</small>
                    <input type="text" class="input-field" placeholder="Nome" name="nome_Pdt" id="Nome_Pdt">
                    <small class="alert-fun d-none" id="Nome_sml_pdt">Empty name field</small>
                    <textarea name="desc_Pdt"  class="input-field-area" placeholder="Descrição" id="Desc_Pdt" cols="53" rows="5"></textarea>
                    <small class="alert-fun d-none" id="Desc_sml_pdt">Empty description field</small>
                </div>
                <div class="container-form-fun col-lg-6">
                    <center>
                    <input type="file" style="display: none;" name="upload_image_pdt" id="upload_image_pdt" />
                    <label for="upload_image_pdt"><div id="Foto_pdt" class="foto_pdt"><img src="../img/icons8-produto-novo-100.png" width="135px" height="135px" id="Foto_img_Pdt" alt=""><img src="../IMG/icon-20x20.png" id="Cam_foto_pdt" class="Cam_IMG_pdt" ></div></label><br/>
                    <small class="alert-fun d-none" id="Img_sml_pdt">Select an image</small>
                    </center>
                    <br>
                    <input type="text" class="input-field" placeholder="Preço" name="preco_Pdt" id="Preco_Pdt">
                    <small class="alert-fun d-none" id="Preco_sml_pdt">Empty price field</small>
                    <input type="number" class="input-field" placeholder="Estoque" name="estoque_Pdt" id="Estoque_Pdt">
                    <small class="alert-fun d-none" id="Estoque_sml_pdt">Empty cpf field</small>
                </div>
        </div>
        <center><button type="submit" class="btn-pdt">Cadastro</button></center>
        </form>
    </div>
    <script src="../JS/jquery.js"></script>
    <!-- <script src="../jquery/dist/jquery.js"></script> -->
    <script src="../JS/validacoes.js"></script>
</body>
</html>

<!--MODAL RESIZE AND CROPED-->

<!-- <div id="uploadimageModal_pdt" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Imagem do Produto</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 text-center">
                        <div id="image_demonstacao" style="width:350px; margin-top:30px"></div>
                    </div>
                    <div class="col-md-4" style="padding-top:30px;">
                        <br />
                        <br />
                        <br />
                        <button id="btn_ft_pdt" class="btn btn-success btn-foto crop_image">Cortar</button>
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
    // function Reload_Pdt() {
    //     setTimeout(function() {
    //         window.location.reload();
    //     }, 500)
    // }
    var Url_Image;
    $(document).ready(function() {

        $image_crop_pdt = $('#image_demonstacao').croppie({
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

        $('#upload_image_pdt').on('change', function() {
            var readerpdt = new FileReader();
            readerpdt.onload = function(event) {
                $image_crop_pdt.croppie('bind', {
                    url: event.target.result
                }).then(function() {
                    console.log('jQuery bind complete');
                    Url_Image = event.target.result;
                });
            }
            readerpdt.readAsDataURL(this.files[0]);
            $('#uploadimageModal_pdt').modal('show');
        });

        $('#btn_ft_pdt').click(function(event) {
            $image_crop_pdt.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response) {
                $.ajax({
                    url: "../Controller/ValidarProduto.php",
                    type: "POST",
                    data: {
                        "image": response
                    },
                    success: function(data) {
                        $('#uploadimageModal_pdt').modal('hide');
                        $('#uploaded_image_pdt').html(data);
                        image_pdt = document.querySelector('#Foto_Pdt');
                        image_pdt.src = Url_Image;
                    }
                });
            })
        });

    });
</script> -->

<div id="uploadimageModal_pdt" class="modal" role="dialog">
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
                        <button id="Foto_Pdt_btn" class="btn btn-success crop_image">Crop & Upload Image</button>
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

        $('#upload_image_pdt').on('change', function() {
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
            $('#uploadimageModal_pdt').modal('show');
        });

        $('#Foto_Pdt_btn').click(function(event) {
            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response) {
                $.ajax({
                    url: "../Controller/ValidarProduto.php",
                    type: "POST",
                    data: {
                        "image": response
                    },
                    success: function(data) {
                        $('#uploadimageModal_pdt').modal('hide');
                        $('#uploaded_image').html(data);
                        image_pdt = document.querySelector('#Foto_img_Pdt');
                        image_pdt.src = Url_Image;
                    }
                });
            })
        });

    });
</script>