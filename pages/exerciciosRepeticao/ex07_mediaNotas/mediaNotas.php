<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $disciplina = $_POST['disciplina'];
    $nomeAluno = $_POST['nomeAluno'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];
    $nota5 = $_POST['nota5'];

    $media = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;

    $saida = "========== Boletim - $disciplina - $nomeAluno ==========<br>";
    $saida .= "  Nota 1: " . $nota1 . " |";
    $saida .= "  Nota 2: " . $nota2 . " |";
    $saida .= "  Nota 3: " . $nota3 . " |";
    $saida .= "  Nota 4: " . $nota4 . " |";
    $saida .= "  Nota 5: " . $nota5 . " | <br>";
    $saida .= "  Média: " . $media . "  <br>";
    $saida .= "============================================<br>";

    include "mediaNotas.html";

    echo "
    <script>
        document.querySelector('.saidaDados').innerHTML = `$saida`;
    </script>
    ";
}
?>
