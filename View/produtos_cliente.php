<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <script src="../jquery/jquery.min.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>
    <script src="../JS/croppie.js"></script>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="../CSS/croppie.css">
    <link rel="stylesheet" href="../CSS/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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

<body class="backgo">
    <?php
    session_start();
    include 'sidebar_Valid.php';
    ?>

    <div id="cards-itens" class="">
        <center>
            <?php
            include '../Controller/ControleProduto.php';
            $ObjProduto = new ControleProduto();
            $ObjProduto->BuscarProdutos();
            ?>
        </center>
    </div>

    <script src="../JS/jquery.js"></script>
    <script src="../JS/validacoes.js"></script>
</body>

</html>

<!--CARD DE PRODUTO-->
<!-- 
<div class="card col-lg-6">
    <div class="container-text">
        <p class="title-card">Papel Higiênico</p>
    </div>

    <div class="container-img">
        <center>
            <img src="../imagesProduto/7959cdbb5dc35e1598369adcd6443d93.png" class="img-card" alt="" srcset="">
        </center>
    </div>
    <div>
        <p class="desc-card">Papel Higiênico - Personal Vip, com folhas de seda dupla face, para limpar sua bunda com facilidade</p>
    </div>
    <div>
        <center>
            <button class="button-card"><i class="fas fa-shopping-cart"></i> $16,90</button>
        </center>
    </div>
</div> -->