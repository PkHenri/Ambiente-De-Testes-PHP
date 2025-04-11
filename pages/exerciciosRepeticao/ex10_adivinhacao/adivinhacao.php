<?php
/*
    Pesquisei e utilizei ajuda de IA para fazer esse exercício.
    Não vi a nessidade de utilizar laço de repetição e sinceramente
    não faço a minima ideia de como utlizaria aqui.
    
*/

session_start();

if (!isset($_SESSION['numero_aleatorio'])) {
    $_SESSION['numero_aleatorio'] = rand(1, 100);
}

$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $palpite = intval($_POST['palpite']);

    if ($palpite < $_SESSION['numero_aleatorio']) {
        $mensagem = "Seu palpite está muito baixo!";
    } elseif ($palpite > $_SESSION['numero_aleatorio']) {
        $mensagem = "Seu palpite está muito alto!";
    } else {
        $mensagem = "Parabéns! Você acertou o número!";
        unset($_SESSION['numero_aleatorio']);
    }
}

include "adivinhacao.html";

echo "
<script>
    document.querySelector('.saidaDados').innerHTML = `$mensagem`;
</script>
";
?>
