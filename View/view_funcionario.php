<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
    <script src="../jquery/jquery.min.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>
    <script src="../JS/croppie.js"></script>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="../CSS/croppie.css">
    <link rel="stylesheet" href="../CSS/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style>
        .Logout_btn {
            text-decoration: none;
        }
    </style>
</head>
<body>
<!-- <input type="file" class="d-none" name="upload_image" id="upload_image" /> -->
    <?php
        session_start();
        $cargo = "Func";
        include 'ControleDeAcesso.php';
        $ObjControle = new ControleDeAcesso;
        $ObjControle->ValidarAcesso($cargo);
        include 'sidebar_Valid.php';
    ?>
    <center>
        <div class="cards_css">
            <div class="Img_hover"><a class="link-card" href="#"><img width="84px" class="Icon-Card" src="http://www.bioritmo.com.br/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaTRCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--f03e09659436c42bc504838952ac3a91c48b009e/Burn-hiit-zone-white-transparente.svg"><img class="Card_IMG" src="../IMG/Card_1.png"></a></div>
            <div class="Img_hover"><a class="link-card" href="#"><img width="84px" class="Icon-Card" src="http://www.bioritmo.com.br/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaXdCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--3a10305235f86ce0c815c54ab9f6c6a6b174b194/Race-bootcamp-white-transparente.svg" alt=""><img class="Card_IMG" src="../IMG/Cardt_2.png"></a></div>
            <div class="Img_hover"><a class="link-card" href="#"><img width="84px" class="Icon-Card" src="http://www.bioritmo.com.br/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaThCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--3745e3a8b40b6c5a28cf66c91d1d84b25ab2f961/Vidya-body-mind-white-transparente.svg"><img class="Card_IMG" src="../IMG/Cardt_3.png"></a></div>

        </div>
    </center>
    </div>
    <script src="../JS/jquery.js"></script>
    <script src="../JS/validacoes.js"></script>
</body>

</html>

<!-- <div id="uploadimageModal" class="modal" role="dialog">
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
                        <button class="btn btn-success crop_image">Crop & Upload Image</button>
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
                    url: "../upload.php",
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
</script> -->