<?php
function getsuperglobal($method,$name){
    switch($method){
        case'post':
            $out = filter_input(INPUT_POST, $name, FILTER_DEFAULT);
            break;
        case'get':
            $out = filter_input(INPUT_GET, $name, FILTER_DEFAULT);
            break;
        case'cookie':
            $out = filter_input(INPUT_COOKIE, $name, FILTER_DEFAULT);
            break;
        case'server':
            $out = filter_input(INPUT_SERVER, $name, FILTER_DEFAULT);
            break;
    }
    return $out;
}