<?php session_start(); ?>

<?
if(isset($_POST['accion'])){
    switch($_POST['accion']){
        case 'create':
            $name = strip_tags($_POST['name']);
            $slug = strip_tags($_POST['slug']);
            $description = strip_tags($_POST['descrption']);
            $feature = strip_tags($_POST['feature']);
            $brand_id = strip_tags($_POST['brand_id']);
    }
}
?>

<?php

class ProdController{
    public function getTodo(){
        $curl = curl_init();
        $token = $_SESSION['token'];
        #echo $token;
        curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer ".$token
    ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
    }

    public function agregarProd(){


    }



}

#'jeju_19@alu.uabcs.mx'
#O338lXPk!5k8I6
?>




