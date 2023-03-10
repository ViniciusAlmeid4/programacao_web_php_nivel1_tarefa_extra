<?php

    $resultado = True;

    $cont = 0;

    while($resultado != False){

        if($cont>14){
            $resultado = False;
        }

        var_dump($resultado);

        $cont = $cont + 1;
    }