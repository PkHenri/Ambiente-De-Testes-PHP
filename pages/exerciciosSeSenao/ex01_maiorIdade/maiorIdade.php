<?php
    // para deixar mais bonito eu dei uma pesquisada
    // então tem comandos que não vimos em sala de aula
    

    $saida = "";
    $idade = intval($_POST ['txtIdade']);

    // intval() converte para um número inteiro

    if ($idade >= 18) {
        $saida = "<p>Você é maior de idade.</p>";
    } else {
        $saida = "<p>Você é menor de idade.</p>";
    }
    
    //inclui o html principal
    include "ex01_maior_de_idade.html";

    // Insere a mensagem dentro da div usando javascript
    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
          </script>";
    //usar `` para interpolação(inserir variáveis dentro da string)
    // .innerHTML = `$saida`; (insere a msg gerada pelo PHP dentro da div class="saidaDados"
?>