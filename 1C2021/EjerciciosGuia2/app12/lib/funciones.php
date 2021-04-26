<?php


function returString($arrayIn){
    
    $arrayOut = array();
    $arraySize = count($arrayIn);
    
    for ($i = $arraySize -1; $i >= 0 ; $i--) { 

        array_push($arrayOut,$arrayIn[$i]);
    }

    echo"<br/>";
    
    foreach ($arrayOut as  $value) {
        # code...
        echo $value;
    }
}

?>