<?php

if (isset($_POST["enviar"])){
    $nome1 = $_POST["nome1"];
    $nome2 = $_POST["nome2"];

    if (($nome1 == "") || ($nome2 == "")){
        ?>
        <script>
            window.location.href = "index.php";
            alert("Preencha os valores de forma correta!");
        </script>
        <?php

    }else{

        $troca = "";
        
        $x=1;

        while($x!=0){

        echo"<br>".$nome1."<br>".$nome2."<hr>";

            $troca = $nome1;

            $nome1 = $nome2;

            $nome2 = $troca;

        }
    }
}