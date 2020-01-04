<?php
function filterInput($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = strip_tags($input);
    $input = htmlspecialchars($input);
    return $input;
};

function validateString($input, $min=2, $max=32){
    if (empty($input) || strlen($input) < $min || strlen($input) > $max) {
        return false ;
    }else{
        return true;
    }
};


