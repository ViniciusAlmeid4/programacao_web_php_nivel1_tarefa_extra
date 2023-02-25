<?php

if(isset($_POST["enviar"])){

    $jogada=$_POST["jogada"];

    if($jogada=="touchdown"){
        $pontos=6;
    }elseif($jogada=="conversão"){
        $pontos=2;
    }elseif($jogada=="field goal"){
        $pontos=3;
    }elseif($jogada=="punt"){
        $pontos=0;
    }elseif($jogada=="kickoff"){
        $pontos=0;
    }

    echo "<br> O valor da jogada é: ".$pontos;
}