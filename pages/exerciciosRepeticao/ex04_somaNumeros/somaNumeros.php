<?php
    $numeroDigitado = $_POST ['txtNumero'];
    $saida = "Soma dos próximos 100 números sequenciais: <br>";
    $soma = 0;

    include"somaNumeros.html";
    
    for ($c = 1; $c <= 100 ; $c++) { 
        $soma = $soma + ($numeroDigitado + $c);
    }

    $saida = "A soma dos próximos 100 números sequenciais a partir de $numeroDigitado é: $soma";

    echo "
    <script>
        document.querySelector('.saidaDados').innerHTML = `$saida`;
    </script>
    ";
?>