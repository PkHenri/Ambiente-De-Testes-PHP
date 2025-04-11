<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $quantidadePao = $_POST['txtPao'];
    $quantidadeBroa = $_POST['txtBroa'];

    $precoPao = 0.12;
    $precoBroa = 1.50;

    $totalPao = $quantidadePao * $precoPao;
    $totalBroa = $quantidadeBroa * $precoBroa;
    $totalArrecadado = $totalPao + $totalBroa;
    $poupanca = $totalArrecadado * (10/100);

    $saida = "Total arrecadado: R$ " . number_format($totalArrecadado, 2, ',', '.') . "<br>";
    $saida .= "Valor a ser guardado na poupança: R$ " . number_format($poupanca, 2, ',', '.');

    include "hotPao.html";

    echo "
    <script>
        document.querySelector('.saidaDados').innerHTML = `$saida`;
    </script>
    ";
}
?>
