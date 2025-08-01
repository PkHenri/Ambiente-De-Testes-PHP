<?php
    $saida = "";
    $gols = $_POST['txtGols'];

    switch ($gols) {
        case 0:
            $saida = "<p>Derrota (0 pontos)</p>";
            break;
        case 1:
            $saida = "<p>Perdedor (0 pontos)</p>";
            break;
        case 2:
            $saida = "<p>Empate (1 ponto)</p>";
            break;
        case 3:
            $saida = "<p>Vencedor (3 pontos)</p>";
            break;
        default:
            $saida = "<p>Número de gols inválido</p>";
    }

    include "pontFutebol.html";
    
    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
        </script>";  
?>