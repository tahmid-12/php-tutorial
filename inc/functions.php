<?php

function pluck($arr,$key){
    $result = array_map(function($item) use($key){
        return $item[$key];
    }, $arr);
    return $result;
}

// $pokemon_names = pluck($johto,'name');

function output($value /*= ''*/) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

?>