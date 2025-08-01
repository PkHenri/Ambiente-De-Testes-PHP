<?php
    $saida = "";
    $mes = $_POST['txtMes'];

    switch ($mes) {
        case 1:
            $saida = "<p>Janeiro</p>";
            break;
        case 2:
            $saida = "<p>Fevereiro</p>";
            break;
        case 3:
            $saida = "<p>Março</p>";
            break;
        case 4:
            $saida = "<p>Abril</p>";
            break;
        case 5:
            $saida = "<p>Maio</p>";
            break;
        case 6:
            $saida = "<p>Junho</p>";
            break;
        case 7:
            $saida = "<p>Julho</p>";
            break;
        case 8:
            $saida = "<p>Agosto</p>";
            break;
        case 9:
            $saida = "<p>Setembro</p>";
            break;
        case 10:
            $saida = "<p>Outubro</p>";
            break;
        case 11:
            $saida = "<p>Novembro</p>";
            break;
        case 12:
            $saida = "<p>Dezembro</p>";
            break;
        default:
            $saida = "<p>Mês inválido! Digite um número entre 1 e 12.</p>";
    }

    include "mesesAno.html";
    
    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
        </script>";
?>
