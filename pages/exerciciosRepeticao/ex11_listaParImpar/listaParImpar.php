<?php
    $saida = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['txtNumero'])) {
        $numero = intval($_POST['txtNumero']);
        $pares = [];
        $impares = [];

        for ($i = 1; $i <= $numero; $i++) {
            if ($i % 2 === 0) {
                $pares[] = $i;
            } else {
                $impares[] = $i;
            }
        }

        $saida .= "Números Pares: { " . implode(", ", $pares) . " }<br>";
        $saida .= "Números Ímpares: { " . implode(", ", $impares) . " }<br>";
    }

    include "listaParImpar.html";

    echo "
    <script>
        document.querySelector('.saidaDados').innerHTML = `$saida`;
    </script>
    ";
?>
