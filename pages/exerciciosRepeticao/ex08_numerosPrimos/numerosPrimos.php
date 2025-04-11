<?php
    $numeroInicio = $_POST['txtNumeroInicio'];
    $numeroFinal = $_POST['txtNumeroFinal'];

    $saida = "Números primos entre $numeroInicio e $numeroFinal: <br>";

    $numerosPrimos = "";

    do {
        if ($numeroInicio == 2) {
            $numerosPrimos = "{ $numeroInicio } ";
            $saida = $saida . "$numerosPrimos";
        } elseif ($numeroInicio > 2) {
            $primo = true;
            for ($i = 2; $i <= sqrt($numeroInicio); $i++) {
                if ($numeroInicio % $i == 0) {
                    $primo = false;
                    break;
                }
            }
            if ($primo) {
                $numerosPrimos = "{ $numeroInicio } ";
                $saida = $saida . "$numerosPrimos";
            }
        }
        $numeroInicio++;
    } while ($numeroInicio <= $numeroFinal);

    include "numerosPrimos.html";

    echo "
    <script>
        document.querySelector('.saidaDados').innerHTML = `$saida`;
    </script>
    ";
?>