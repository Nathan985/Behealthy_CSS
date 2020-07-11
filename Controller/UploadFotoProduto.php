<?php

    class UploadFotoProduto{

        public function CadastrarFoto($image){

            $data = $image;
            // $image_array_1 = explode(";", $data);
            // $image_array_2 = explode(",", $image_array_1[1]);
            // $data = base64_decode($image_array_2[1]);
            $nome_imagem = md5(time()) . '.png';
            $diretorio = "../ImagesProduto/";
            $tpm_name = $data['tmp_name'];

            $imageName = $diretorio . $nome_imagem;
            move_uploaded_file($tpm_name, $imageName);

            return $nome_imagem;

        }
    }

?>