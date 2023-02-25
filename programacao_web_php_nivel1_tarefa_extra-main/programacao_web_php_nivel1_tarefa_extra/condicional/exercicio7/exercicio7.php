<?php

if(isset($_POST["enviar"])){

    $var=$_POST["variav"];

    if(is_numeric($var)){
        $var=(int)$var;
    }elseif(is_float($var)){
    $var=(float)$var;
    }elseif(is_string($var)){
        $var=(string)$var;
    }elseif(is_bool($var)){
        $var=(bool)$var;
    }

    echo "<br>".var_dump($var);
}