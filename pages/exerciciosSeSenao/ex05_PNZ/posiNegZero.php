<?php
    $saida = "";

    $numeroDigitado = $_POST ['txtNumeroDigitado'];

    if ($numeroDigitado > 0) {
        $saida = "<p>O número digitado é positivo!</p>";
    } elseif ($numeroDigitado < 0) {
        $saida = "<p>O número digitado é negativo!</p>";
    } else {
        $saida = "<p>O número digitado é zero!</p>";
    }

    include "ex05_positivo_negativo_zero.html";

    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
          </script>";
?>