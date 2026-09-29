<?php
    $method = $_SERVER["REQUEST_METHOD"];

    if ($method !== "POST" && $method !== "GET") {
        header("Location: 404.html");
        exit;
    }

    $dados = $method === "POST" ? $_POST : $_GET;

    if (
        empty($dados["nome"]) ||
        empty($dados["email"]) ||
        empty($dados["mensagem"])
    ) {
        header("Location: 404.html");
        exit;
    }

    echo 'Tudo certo';
