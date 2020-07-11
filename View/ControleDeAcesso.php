<?php

    class ControleDeAcesso{

        public function ValidarAcesso(string $cargo){

            if(isset($_SESSION['Login'])){

                header("Location: tela_login.php");

            }
            else{
                if($_SESSION['cargo'] != "adm"){

                    if($_SESSION['cargo'] != $cargo){
                        header("Location: tela_login.php");
                    }
                }
            }
        }
    }
?>