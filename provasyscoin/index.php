<?php
    $user = explode('/', $_GET['user'])[0];
    $pass = explode('/', $_GET['password'])[0];
    $method = $_SERVER['REQUEST_METHOD'];
    header('Content-type: application/json');

    if($method == 'GET'){
        if($user == '"syscoin"' and $pass == '"meEscolhe"')
            $json = file_get_contents('json/success.json');
        else
            $json = file_get_contents('json/failure.json');

        echo $json;
    }
?>