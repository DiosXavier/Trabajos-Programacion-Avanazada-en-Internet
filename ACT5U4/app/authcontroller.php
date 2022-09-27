<?php

if(isset($_POST['action'])){
    switch($_POST['action']){
        case 'acces':
            $authController =new authController();
            $mail=strip_tags($_POST['email']);
            $password=strip_tags($_POST['password']);
            $authController -> login('','');
    }
}

class AuthController{
    public function login($email, $password){

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('email' => 'jeju_19@alu.uabcs.mx','password' => 'O338lXPk!5k8I6'),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response=json_decode($response);

        if(isset($response->code) && $response->code>0)
        {
            session_start();
            $SESSION['name']=$response->data->name;
            $SESSION['lastname']=$response->data->lastname;
            $SESSION['avatar']=$response->data->avatar;
            $SESSION['token']=$response->data->token;

            header("location: ../productos");
        }else{
            #var_dump($response);
            header("location: ../?error=true");
        }


    }
}