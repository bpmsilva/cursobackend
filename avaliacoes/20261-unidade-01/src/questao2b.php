<?php

    $produtos = [
        ["nome" => "Mouse", "preco" => 50],
        ["nome" => "Teclado", "preco" => 120],
        ["nome" => "Monitor", "preco" => 900]
    ];

    foreach ($produtos as $chave => $valor): ?>
        <h1> <?= $valor["nome"] ?> - R$ <?= $valor["preco"] ?> </h1>
    <?php endforeach; ?>
