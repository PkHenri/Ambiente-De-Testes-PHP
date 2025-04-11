<?php
    $saida = "";

    $login = $_POST ['txtLogin'];
    $senha = $_POST ['txtSenha'];

    if ($login != 'admin' && $senha != 'senha123') {
        $saida = "<p>Acesso negado</p>";
    } else {
        $saida = "<p>Acesso concedido</p>";
    }

    include "ex06_verifica_login_senha.html";
    
    echo "<script>
            document.querySelector('.saidaDados').innerHTML = `$saida`;
          </script>";
?>