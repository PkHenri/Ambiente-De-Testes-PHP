<?php
    $saida = "";

    $ladoA = $_POST ['txtLadoA'];
    $ladoB = $_POST ['txtLadoB'];
    $ladoC = $_POST ['txtLadoC'];

    if ($ladoA + $ladoB > $ladoC && $ladoA + $ladoC > $ladoB && $ladoB + $ladoC > $ladoA) {
        
        $saida = "Você pode formar um Triângulo: ";
        
        if ($ladoA == $ladoB && $ladoB == $ladoC) {
            $saida = "<p>$saida Equilátero.</p>";
        } elseif ($ladoA == $ladoB || $ladoA == $ladoC || $ladoB == $ladoC) {
            $saida = "<p>$saida Isósceles.</p>";
        } else {
            $saida = "<p>$saida Escaleno.</p>";
        }
    } else {
        $saida = "<p>Você não pode formar um TRIÂNGULO.</p>";
    }

    include "ex08_triangulo.html";

    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
          </script>";
?>