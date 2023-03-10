<?php

if (isset($_POST["enviar"])){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    if (($num1 == "") || ($num2 == "")){
        ?>
        <script>
            window.location.href = "index.php";
            alert("Preencha os valores de forma correta!");
        </script>
        <?php

    }elseif((is_numeric($num1)) && (is_numeric($num2))) {

        $diferenca = $num1 - $num2;

        if($diferenca>11 || $diferenca<-11){
            ?>
            <script>
                windpw.location.href = "index.php";
                alert("Preencha os valores de forma correta!");
            </script>
            <?php
        }else{

            if($num1>$num2){

                $cont = 0;
                $cont = $num1;

                while($cont > ($num2 + 1)){
                    $cont = $cont - 1;
                    echo "<br>".$cont;
                }
                while($cont < ($num1 - 1)){
                    $cont = $cont + 1;
                    echo "<br>".$cont;
                }
            }else{

                $cont = $num2;

                while($cont > ($num1 + 1)){
                    $cont = $cont - 1;
                    echo "<br>".$cont;
                }

                while($cont < ($num2 - 1)){
                    $cont = $cont + 1;
                    echo "<br>".$cont;
                }
            }
        }

    }else{
        ?>
        <script>
            window.location.href = "index.php";
            alert("Preencha os valores de forma correta!");
        </script>
        <?php
    }

}