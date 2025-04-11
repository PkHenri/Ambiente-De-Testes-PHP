<?php
    $numeroMinimo = $_POST ['txtNumeroUm'];
    $numeroMaximo = $_POST ['txtNumeroDois'];

    $saida = "Números pares entre $numeroMinimo e $numeroMaximo: <br>";
    $numerosPares = "";
    $contador = 0;

    if ($numeroMinimo < $numeroMaximo) {
        if ($numeroMinimo % 2 == 0) {
            do {
                $numerosPares = "{ $numeroMinimo } ";
                $saida = $saida . "$numerosPares";
                $numeroMinimo = $numeroMinimo + 2;

                $contador++;

                if ($contador % 4 == 0) {
                    $saida = $saida . "<br>";
                }
            } while ($numeroMinimo <= $numeroMaximo);
        } 
        
        else {
            $numeroMinimo = $numeroMinimo + 1; 
            do {
                $numerosPares = "{ $numeroMinimo } ";
                $saida = $saida . "$numerosPares";
                $numeroMinimo = $numeroMinimo + 2;
                $contador++;

                if ($contador % 4 == 0) {
                    $saida = $saida . "<br>";
                }
            } while ($numeroMinimo <= $numeroMaximo);
        }
    }
    else {
        if ($numeroMinimo % 2 == 0) {
            do {
                $numerosPares = "{ $numeroMinimo } ";
                $saida = $saida . "$numerosPares";
                $numeroMinimo = $numeroMinimo - 2;
                $contador++;

                if ($contador % 4 == 0) {
                    $saida = $saida . "<br>";
                }
            } while ($numeroMinimo >= $numeroMaximo);
        } 
        
        else {
            $numeroMinimo = $numeroMinimo - 1; 
            do {
                $numerosPares = "{ $numeroMinimo } ";
                $saida = $saida . "$numerosPares";
                $numeroMinimo = $numeroMinimo - 2;
                $contador++;

                if ($contador % 4 == 0) {
                    $saida = $saida . "<br>";
                }
            } while ($numeroMinimo >= $numeroMaximo);
        }
    }

    include "numerosPares.html";

    echo "
    <script>
        document.querySelector('.saidaDados').innerHTML = `$saida`;
    </script>
    ";
?>