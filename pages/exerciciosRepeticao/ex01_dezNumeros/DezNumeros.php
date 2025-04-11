<?php
    $numero = $_POST ['txtNumero'];
    $saida = "A sequencia é: <br>";

    include "DezNumeros.html";

    for ($i=1; $i <= 10; $i++) { 
        $numero = $numero + 1;
        $saida = $saida . "{ $numero } ";
    }

    echo "
    <script>
        document.querySelector('.saidaDados').innerHTML = `$saida`;
    </script>
    ";
?>