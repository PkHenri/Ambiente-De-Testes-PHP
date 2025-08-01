<?php
    $saida = "";
    $diaDigitado = $_POST['txtNumero'];
    
    switch ($diaDigitado) {
        case 1:
            $saida = "<p>Segunda-Feira, dia útil.</p>";
        break;
        case 2:
            $saida = "<p>Terça-Feira, dia útil.</p>";
        break;
        case 3:
            $saida = "<p>Quarta-Feira, dia útil.</p>";
        break;
        case 4:
            $saida = "<p>Quinta-Feira, dia útil.</p>";
        break;
        case 5:
            $saida = "<p>Sexta-Feira, dia útil.</p>";
        break;
        case 6:
            $saida = "<p>Sábado, Fim de Semana.</p>";
        break;
        case 7:
            $saida = "<p>Domingo, Fim de Semana.</p>";
        break;
        default:
            $saida = "<p>Por favor digite um número de 1 a 7.</p>";
    }

    include "diaSemana.html";

    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
        </script>";
?>