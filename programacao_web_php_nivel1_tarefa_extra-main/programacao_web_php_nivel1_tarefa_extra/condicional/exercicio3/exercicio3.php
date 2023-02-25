<?php

if (isset($_POST["enviar"])){
    $loginUs = $_POST["login"];
    $senhaUs = $_POST["senha"];

    $loginOk = "admin";
    $senhaOk = "123";

    if (($loginUs == "") || ($senhaUs == "")){
        ?>
        <script>
            window.location.href = "index.php";
            alert("Preencha as informações de forma correta!");
        </script>
        <?php
    }else{

        if (($loginUs==$loginOk) && ($senhaUs==$senhaOk)){
            $resultado = "usuário logado";
        } elseif (($loginUs==$loginOk) && ($senhaUs!=$senhaOk)){
            $resultado = "senha incorreta";
        } elseif (($loginUs!=$loginOk) && ($senhaUs!=$senhaOk)){
            $resultado = "usuário e senha incorreta";
        } elseif (($loginUs!=$loginOk) && ($senhaUs==$senhaOk)){
            $resultado = "usuário incorreto";
        }
        
        echo "<br>".$resultado;

    }
}