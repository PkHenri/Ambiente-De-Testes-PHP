<?php
    $peso = floatval($_POST['txtPeso']);
    $precoPorQuilo = 12.00;
    $valorAPagar = $peso * $precoPorQuilo;

    $saida = "Peso do prato: {$peso} kg<br>Valor a pagar: R$ {$valorAPagar}";

    include "bemBao.html";

    echo "
    <script>
        document.querySelector('.saidaDados').innerHTML = `$saida`;
    </script>
    ";
?>
