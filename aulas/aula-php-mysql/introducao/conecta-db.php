<?php

// Conectar ao banco de dados.
$pdo = new PDO(
    'mysql:host=localhost;dbname=loja-informatica;charset=utf8mb4',
    'root',
    '' // senha do usuário root, se houver
);

// Executar a consulta.
$consulta = $pdo->query('SELECT produto_id, preco_unitario FROM vendas');

// Obter os registros como arrays associativos.
$vendas = $consulta->fetchAll(PDO::FETCH_ASSOC);

// Mostrar o resultado.
echo '<pre>';
print_r($produtos);
echo '</pre>';

?>