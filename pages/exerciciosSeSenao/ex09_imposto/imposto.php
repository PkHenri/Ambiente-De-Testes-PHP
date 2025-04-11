<?php
    $saida = "";

    $salario = $_POST ['txtSalario'];

    if ($salario <= 2259.20) {
        $saida = "<p>Isento. </p>";
    } elseif ($salario > 2259.20 && $salario <= 2826.65) {
        $imposto = $salario * (7.5/100);
        $saida = "<p>Imposto a pagar:R$ $imposto </p>";
    } elseif ($salario > 2826.65 && $salario <= 3751.05) {
        $imposto = $salario * (15/100);
        $saida = "<p>Imposto a pagar:R$ $imposto </p>";
    } elseif ($salario > 3751.05 && $salario <= 4664.68) {
        $imposto = $salario * (22.5/100);
        $saida = "<p>Imposto a pagar:R$ $imposto </p>";
    } else {
        $imposto = $salario * (27.5/100);
        $saida = "<p>Imposto a pagar:R$ $imposto </p>";
    }

    include "ex09_imposto.html";

    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
          </script>";
?>