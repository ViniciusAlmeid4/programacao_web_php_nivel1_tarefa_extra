<?php

if (isset($_POST["enviar"])){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST['num3'];

    if (($num1 == "") || ($num2 == "") || ($num3 == "")){
        ?>
        <script>
            window.location.href = "index.php";
            alert("Preencha os valores de forma correta!");
        </script>
        <?php
    }elseif((is_numeric($num1)) && (is_numeric($num2)) && (is_numeric($num3))) {
        $resultado = "";

        if (($num1 == $num2) && ($num1 == $num3)){
            $resultado = "equilatero";
        } elseif (($num2 == $num1) && ($num2 != $num3)){
            $resultado = "isoceles";
        } elseif (($num3 != $num1) && ($num3 != $num2)){
            $resultado = "escaleno";
        }
        echo "<br>".$resultado;
    }else{
        ?>
        <script>
            window.location.href = "index.php";
            alert("Preencha os valores de forma correta!");
        </script>
        <?php
    }
}