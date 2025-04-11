<?php
    $saida = "";

    $notaUm = $_POST ['txtNotaUm'];
    $notaDois = $_POST ['txtNotaDois'];
    $notaTres = $_POST ['txtNotaTres'];
    $notaQuatro = $_POST ['txtNotaQuatro'];

    $media = (($notaUm + $notaDois + $notaTres + $notaQuatro) / 4);

    if ($media >= 7) {
        $saida = "<p>APROVADO!</p>";
    } elseif ($media < 7 && $media >= 4) {
        $saida = "<p>RECUPERAÇÃO!</p>";
    } else {
        $saida = "<p>REPROVADO!</p>";
    }

    include "ex03_media_aluno.html";

    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
          </script>";
?>