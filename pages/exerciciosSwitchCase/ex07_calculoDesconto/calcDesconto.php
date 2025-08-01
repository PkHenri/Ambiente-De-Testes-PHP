<?php
    $saida = "";
    $valorCompra = $_POST['txtValorCompra'];
    $tipoCliente = $_POST['txtTipoCliente'];
    $desconto = 0;

    switch ($tipoCliente) {
        case 'novo':
            $desconto = $valorCompra * 0.05;
            break;
        case 'regular':
            $desconto = $valorCompra * 0.10;
            break;
        case 'vip':
            $desconto = $valorCompra * 0.15;
            break;
        default:
            $saida = "<p>Tipo de cliente inválido!</p>";
    }

    if ($desconto > 0) {
        $valorFinal = $valorCompra - $desconto;
        $saida = "<p>Valor da compra: R$ " . number_format($valorCompra, 2, ',', '.') . "</p>";
        $saida .= "<p>Desconto aplicado: R$ " . number_format($desconto, 2, ',', '.') . "</p>";
        $saida .= "<p>Valor final: R$ " . number_format($valorFinal, 2, ',', '.') . "</p>";
    }

    include "calcDesconto.html";
    
    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
        </script>";
?>
