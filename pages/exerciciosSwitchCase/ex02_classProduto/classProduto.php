<?php
    $saida = "";
    $classProduto = $_POST['txtCodigoProduto'];

    switch ($classProduto) {
        case 1:
            $saida = "<p>Classificação: Alimentos</p>";
        break;
        case 2:
            $saida = "<p>Classificação: Eletrodomésticos</p>";
        break;
        case 3:
            $saida = "<p>Classificação: Roupas</p>";
        break;
        case 4:
            $saida = "<p>Classificação: Livros</p>";
        break;
        default:
            $saida = "<p>Categoria desconhecida</p>";
    }
    
    include "classProduto.html";
    
    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
        </script>";
?>