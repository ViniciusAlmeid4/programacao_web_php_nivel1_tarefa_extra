<?php

if(isset($_POST["enviar"])){

    $nome=strtolower($_POST["time"]);
    ##$nome=strtolower($nome);

    if($nome==""){
        ?>
        <script>
            window.location.href = "index.php";
            alert("Preencha as informações de forma correta!");
        </script>
        <?php
    }

    $time=["boston celtics","brooklyn nets","cleveland cavaliers","miami heat","charlotte hornets","Denver Nuggets","golden state warriors
    ","los angeles lakers","memphis grizzlies","houston rockets"];

    $conferencia=["Leste","Leste","Leste","Leste","Leste","Oeste","Oeste","Oeste","Oeste","Oeste"];

    $posit=0;

    for($x=0;$x<10;$x++){
        if($nome==$time[$x]){
            $posit++;
            $salva=$x;
        }
    }

    if($posit>0){
        echo "O time ".$time[$salva]." e da conferência ".$conferencia[$salva].".";
    }else{
        echo "Time inexistente ou não cadastrado";
    }

}