<?php
    $saida = "";
    $codigo = $_POST['txtCodigo'];

    switch ($codigo) {
        case 100:
            $saida = "<p>Detergente - R$ 1,59</p>";
            break;
        case 101:
            $saida = "<p>Esponja - R$ 4,59</p>";
            break;
        case 102:
            $saida = "<p>Lã de aço - R$ 1,79</p>";
            break;
        default:
            $saida = "<p>Código inválido!</p>";
            break;
    }

    include "mercado.html";

    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
          </script>";
?>
