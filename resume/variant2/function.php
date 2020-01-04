<?php
function filterInput($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = strip_tags($input);
    $input = htmlspecialchars($input);
    return $input;
};

/*function validateString($input, $min=2, $max=32){
    if (empty($input) || strlen($input) < $min || strlen($input) > $max) {
        return false ;
    }else{
        return true;
    }
};
function validateAdress($input, $min=2, $max=100){
    if (empty($input) || strlen($input) < $min || strlen($input) > $max) {
        return false ;
    }else{
        return true;
    }
};
function readJson($file) {
    $f = fopen($file, 'r');

    $json = fgets($f);

    $array = json_decode($json, true);
    return $array;

};  function saveJson($file, $array) {
    $json = json_encode($array, JSON_UNESCAPED_UNICODE);

    $f = fopen($file, 'w');

    fwrite($f, $json);

    fclose($f);
};
*/
