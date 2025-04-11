<?php
    $numero = $_POST ['txtNumero'];
    $saida = "Tabuada do $numero: <br>";

    include "tabuada.html";

    for ($i = 1; $i <= 10; $i++) { 
        $resultado = $numero * $i;
        $saida = $saida . "$numero x $i = $resultado <br>";
    }

    echo "
    <script>
        document.querySelector('.saidaDados').innerHTML = `$saida`;
    </script>
    ";
?>