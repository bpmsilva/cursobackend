<?php

if (isset($_POST["nome_produto"]) && isset($_POST["preco_unitario"])) {
    $nomeProduto = $_POST["nome_produto"];
    $precoUnitario = $_POST["preco_unitario"];

    echo "<h1>Nome do Produto: $nomeProduto</h1>";
    echo "<p>Preço Unitário: R$ $precoUnitario</p>";
} else {
    echo "<p>Por favor, preencha todos os campos do formulário.</p>";
}

// Para utilizar GET, seria necessário alterar o método do formulário de POST para GET.
// A variável $_POST seria substituída por $_GET para capturar os dados enviados pelo formulário.
// Além disso, os dados enviados apareceriam na URL da requisição, após o símbolo "?".

?>