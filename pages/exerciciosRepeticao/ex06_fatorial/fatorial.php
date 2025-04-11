<?php
    $numero = $_POST ['txtNumero'];
    $saida = "";
    $fatorial = 1;
    $contador = 1;

    include "fatorial.html";

    while ($contador <= $numero) {
        $fatorial = $fatorial * $contador;
        $saida = "Fatorial de $numero: <br> $fatorial";
        $contador++;
    }

    echo "
    <script>
        document.querySelector('.saidaDados').innerHTML = `$saida`;
    </script>
    ";
?>