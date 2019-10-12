<?php
    $path = explode('/', $_GET['provasyscoin']);
    $user = explode('/', $_GET['user'])[0];
    $pass = explode('/', $_GET['password'])[0];
    $method = $_SERVER['REQUEST_METHOD'];
    header('Content-type: application/json');

    if($method == 'GET'){
        if(strval($user) == '"syscoin"' and $pass == '"meEscolhe"')
            $json = file_get_contents('success.json');
        else
            $json = file_get_contents('failure.json');

        echo $json;
    }
