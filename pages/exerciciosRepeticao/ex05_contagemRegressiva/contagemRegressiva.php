<?php
    $numeroDigitado = $_POST ['txtNumero'];

    $saida = "Contagem Regressiva: <br>";

    for ($c = 1000; $c >= $numeroDigitado ; $c--) { 
        $saida = $saida . "{ $c } ";

        if ($c % 10 == 0) {
            $saida = $saida . "<br>";
        }
    }

    include "contagemRegressiva.html";

    echo "
    <script>
        document.querySelector('.saidaDados').innerHTML = `$saida`;
    </script>
    ";
?>