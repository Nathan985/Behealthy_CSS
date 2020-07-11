<?php
session_start();

try{

    if(empty($_SESSION['Img_url'])){
        throw new Exception("Imagem não encontrada");
    }
    else{
        return "<img id= AlterImg src=upload/" . $img_url . " class=profile_image>";
    }

}catch(Exception $ex){

    return "<img id= Default src=upload/default_user.png class=profile_image>";

}


?>