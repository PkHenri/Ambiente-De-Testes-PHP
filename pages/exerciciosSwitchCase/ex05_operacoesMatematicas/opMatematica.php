<?php
    $saida = "";
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operador = $_POST['operador'];
    
    switch ($operador) {
        case '+':
            $resultado = $numero1 + $numero2;
            $saida = "<p>Resultado: $numero1 + $numero2 = $resultado</p>";
            break;
        case '-':
            $resultado = $numero1 - $numero2;
            $saida = "<p>Resultado: $numero1 - $numero2 = $resultado</p>";
            break;
        case '*':
            $resultado = $numero1 * $numero2;
            $saida = "<p>Resultado: $numero1 × $numero2 = $resultado</p>";
            break;
        case '/':
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
                $saida = "<p>Resultado: $numero1 ÷ $numero2 = $resultado</p>";
            } else {
                $saida = "<p>Erro: Divisão por zero não é permitida!</p>";
            }
            break;
        default:
            $saida = "<p>Operador inválido! Use apenas +, -, * ou /</p>";
    }

    include "opMatematica.html";
    
    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
        </script>";
?>
