<?php

    // Normal Array
    $array = ["Arsenal","Chelsea","Manchester City"];

    print_r($array);

    echo '<br />';

    if(isset($array[5])){
        echo $array[5];
    }else{
        echo "The index value not available";
    }

    echo '<br />';

    //Associative Array
    
    $football = [
        'premier' => 'Chelsea',
        'laliga' => 'Barcelona'
    ];

    if(isset($football['bundesliga'])){
        echo $football['bundesliga'];
    }else{
        echo "Doesn't exist";
    }

    echo '<br />';

    echo $football['premier'];

?>