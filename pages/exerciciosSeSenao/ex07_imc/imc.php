<?php
    $saida = "";

    $peso = $_POST ['txtPeso'];
    $altura = $_POST ['txtAltura'];

    $imc = ($peso / $altura ** 2);

    if ($imc < 18.5) {
        $saida = "<p>Você está abaixo do peso. </p>";
    } elseif ($imc >= 18.5 && $imc < 25) {
        $saida = "<p>Seu peso está dentro da normalidade. </p>";
    } elseif ($imc >= 25 && $imc < 30) {
        $saida = "<p>Você está com Sobrepeso. </p>";
    } else {
        $saida = "<p>Você está apto a participar do kilos mortais x_x </p>";
    }

    include "ex07_imc.html";

    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
          </script>";
?>