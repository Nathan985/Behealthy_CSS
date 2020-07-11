<?php

    class Sidebar{

        public function ValidarAcesso($cargo){

            if($cargo == "cliente"){
                echo "<a href='../index.php' class='text-decoration-none'><i class='fas fa-home'></i><span>Inicio</span></a>
                    <a href='#' class='text-decoration-none'><i class='fas fa-user'></i><span>Meu Perfil</span></a>
                    <a href='#' class='text-decoration-none'><i class='fas fa-shopping-cart'></i><span>Minhas Compras</span></a>
                    <a href='produtos_cliente.php' class='text-decoration-none'><i class='fas fa-shopping-bag'></i><span>Produtos</span></a>
                    <a href='#' class='text-decoration-none'><i class='fas fa-info-circle'></i><span>Informações</span></a>";
            }
            if($cargo == "adm"){
                echo "<a href='../index.php' class='text-decoration-none'><i class='fas fa-home'></i><span>Inicio</span></a>
                    <a href='Funcionarios.php' class='text-decoration-none'><i class='fas fa-user-plus'></i><span>Funcionarios</span></a>
                    <a href='CadProdutos.php' class='text-decoration-none'><i class='fas fa-boxes'></i><span>Cad. Produtos</span></a>
                    <a href='#' class='text-decoration-none'><i class='fas fa-user'></i><span>Meu Perfil</span></a>
                    <a href='#' class='text-decoration-none'><i class='fas fa-shopping-cart'></i><span>Minhas Compras</span></a>
                    <a href='produtos_cliente.php' class='text-decoration-none'><i class='fas fa-shopping-bag'></i><span>Produtos</span></a>
                    <a href='#' class='text-decoration-none'><i class='fas fa-info-circle'></i><span>Informações</span></a>";
            }
            if($cargo == "Func"){
                echo "<a href='../index.php' class='text-decoration-none'><i class='fas fa-home'></i><span>Inicio</span></a>
                    <a href='CadProdutos.php' class='text-decoration-none'><i class='fas fa-boxes'></i><span>Cad. Produtos</span></a>
                    <a href='#' class='text-decoration-none'><i class='fas fa-user'></i><span>Meu Perfil</span></a>
                    <a href='#' class='text-decoration-none'><i class='fas fa-shopping-cart'></i><span>Minhas Compras</span></a>
                    <a href='produtos_cliente.php' class='text-decoration-none'><i class='fas fa-shopping-bag'></i><span>Produtos</span></a>
                    <a href='#' class='text-decoration-none'><i class='fas fa-info-circle'></i><span>Informações</span></a>";
                
            }

        }

    }

?>