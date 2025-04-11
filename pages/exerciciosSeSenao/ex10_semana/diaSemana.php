<?php
    $saida = "";

    $diaDigitado = $_POST ['txtDia'];

    if ($diaDigitado <= 7 && $diaDigitado >= 1) {
        if ($diaDigitado == 2) {
            $saida = "<p>Segunda-Feira, dia útil.</p>";
        } elseif ($diaDigitado == 3) {
            $saida = "<p>Terça-Feira, dia útil.</p>";
        } elseif ($diaDigitado == 4) {
            $saida = "<p>Quarta-Feira, dia útil.</p>";
        } elseif ($diaDigitado == 5) {
            $saida = "<p>Quinta-Feira, dia útil.</p>";
        } elseif ($diaDigitado == 6) {
            $saida = "<p>Sexta-Feira, dia útil.</p>";
        } elseif ($diaDigitado == 1) {
            $saida = "<p>Domingo, Fim de Semana.</p>";
        } else {
            $saida = "<p>Sábado, Fim de Semana.</p>";
        }
    } else {
        $saida = "<p>Por favor digite um número de 1 e 7.</p>";
    }

        include "ex10_diaSemana.html";

        echo "<script>
                document.querySelector('.saidaDados').innerHTML = `$saida`;
            </script>";
?>