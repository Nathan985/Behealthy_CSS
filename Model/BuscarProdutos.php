<?php

    class BuscarProduto{

        public static function SelectItens(int $Count)
        {
            if($Count >= 0){
                include 'conexao.php';
                $sql = $conn->prepare("SELECT * FROM tbl_produtos");

                $sql->execute();
                $resultado = $sql->get_result();

                $sql -> close();
                $conn -> close();

                while($linha = $resultado->fetch_array()){
                    echo "<div class='card col-lg-6'>
                    <div class='container-text'>
                        <p class='title-card'>".$linha['nome'] ."</p>
                    </div>
                
                    <div class='container-img'>
                        <center>
                            <img src='../imagesProduto/".$linha['foto']."' class='img-card'>
                        </center>
                    </div>
                    <div>
                        <p class='desc-card'>".$linha['descicao']."</p>
                    </div>
                    <div>
                        <center>
                            <button class='button-card'><i class='fas fa-shopping-cart'></i> ".$linha['preco']."</button>
                        </center>
                    </div>
                </div>";
                }
            }
        }

    }

?>