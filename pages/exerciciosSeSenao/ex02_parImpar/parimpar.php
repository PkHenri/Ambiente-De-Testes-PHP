<?php
    $saida = "";
    $numeroDigitado = intval($_POST ['txtDigitado']);

    if ($numeroDigitado % 2 == 0 ) {
        $saida = "<p>O número digitado é PAR!</p>";
    } else {
        $saida = "<p>O número digitado é IMPAR!</p>";
    }

    include "ex02_par_ou_impar.html";

    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
          </script>";
?>