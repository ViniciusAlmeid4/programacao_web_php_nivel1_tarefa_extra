<?php

if(isset($_POST["enviar"])){

    $var1 = intval($_POST["variav"]);

    $var2 = floatval($_POST["variav"]);

    $var3 = boolval($_POST["variav"]);

    $var4 = ($_POST["variav"]);

    if(is_string($var4)){
        $resultado = $var4;
        var_dump($resultado);
        echo "<hr>";
    } 

    if(is_float($var2)){
        $resultado = $var2;
        var_dump($resultado);
        echo "<hr>";
    }

    if(is_int($var1)){
        $resultado = $var1;
        var_dump($resultado);
        echo "<hr>";
    }

    if(is_bool($var3)){
        $resultado = $var3;
        var_dump($resultado);
    }

}