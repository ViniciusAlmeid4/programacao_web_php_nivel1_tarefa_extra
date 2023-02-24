<?php

if (isset($_POST["enviar"])){
    $loginUs = $_POST["login"];
    $senhaUs = $_POST["senha"];

    if (($loginUs == "") || ($senhaUs == "")){
        ?>
        <script>
            window.location.href = "index.php";
            alert("Preencha as informações de forma correta!");
        </script>
        <?php
    }else{
        $tamanho;

        if (strlen($senhaUs)>8){
            $resultado = "Cadastro executado.";
        } else {
            $resultado = "Digite uma senha com mais de 8 números!";
        }
        echo "<br>".$resultado;
    }
}