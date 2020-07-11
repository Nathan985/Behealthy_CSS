<?php

    class ControleProduto{

        private $indice;

        public function SetIndice(int $value)
        {
            $this->indice = $value;
        }

        public function BuscarProdutos(){
            $ContProd = ($this->indice * 2);

            include '../Model/BuscarProdutos.php';
            $ObjSelect = new BuscarProduto;
            $linha = $ObjSelect->SelectItens($ContProd);
        }
    }

?>