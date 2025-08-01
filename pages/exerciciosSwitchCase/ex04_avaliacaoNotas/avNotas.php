<?php
    $saida = "";
    $nota = $_POST['txtNota'];

    switch (true) {
        case ($nota == 10):
            $saida = "<p>Excelente</p>";
            break;
        case ($nota >= 8 && $nota <= 9):
            $saida = "<p>Muito Bom</p>";
            break;
        case ($nota >= 6 && $nota <= 7):
            $saida = "<p>Bom</p>";
            break;
        case ($nota == 5):
            $saida = "<p>Suficiente</p>";
            break;
        case ($nota < 5 && $nota >= 0):
            $saida = "<p>Insuficiente</p>";
            break;
        default:
            $saida = "<p>Nota inválida</p>";
    }

    include "avNotas.html";
    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
        </script>";
?>