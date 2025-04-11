<?php
    $saida = "";

    $valorCompra = $_POST ['txtValorCompra'];

    if ($valorCompra > 500 && $valorCompra <= 1000) {
        $valorDesconto = $valorCompra * (5/100);
        $valorFinal = $valorCompra - $valorDesconto;
        $percentualAplicado = "5%";

    } elseif ($valorCompra > 1000 && $valorCompra <= 5000) {
        $valorDesconto = $valorCompra * (10/100);
        $valorFinal = $valorCompra - $valorDesconto;
        $percentualAplicado = "10%";
    } elseif ($valorCompra > 5000 && $valorCompra <= 10000) {
        $valorDesconto = $valorCompra * (15/100);
        $valorFinal = $valorCompra - $valorDesconto;
        $percentualAplicado = "15%";
    } elseif ($valorCompra > 10000 && $valorCompra <= 30000) {
        $valorDesconto = $valorCompra * (20/100);
        $valorFinal = $valorCompra - $valorDesconto;
        $percentualAplicado = "20%";
    } elseif ($valorCompra > 30000) {
        $valorDesconto = $valorCompra * (30/100);
        $valorFinal = $valorCompra - $valorDesconto;
        $percentualAplicado = "30%";
    } else {
        $valorDesconto = 0;
        $percentualAplicado = "Sem desconto aplicado";
        $valorFinal = $valorCompra;
    }

    $saida = "<p>
        Valor da Compra: R$ $valorCompra <br> 
        Valor do desconto: R$ $valorDesconto <br>
        Percentual aplicado: $percentualAplicado <br>
        Valor total com desconto: R$ $valorFinal </p>
    ";

    include "ex04_desconto.html";

    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
          </script>";
?>