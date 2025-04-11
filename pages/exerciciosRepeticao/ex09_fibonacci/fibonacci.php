<?php
    $saida = "Sequência de Fibonacci 10 primeiros numéros: <br>";

    $primeiro = 0;
    $segundo = 1;

    $saida .= "{ $primeiro }" . " " . "{ $segundo }" . " ";

    for ($i = 2; $i < 10; $i++) {
        $proximo = $primeiro + $segundo;
        $saida .= "{ $proximo }" . " ";
        $primeiro = $segundo;
        $segundo = $proximo;
    }

    include "fibonacci.html";

    echo "
    <script>
        document.querySelector('.saidaDados').innerHTML = `$saida`;
    </script>
    ";
?>