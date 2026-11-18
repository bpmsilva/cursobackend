<?php

// Inicia uma sessão ou retoma a sessão existente
session_start();

$counter = $_SESSION['counter'] ?? 0;
$counter++;

// Guarda o valor atualizado para a próxima requisição
$_SESSION['counter'] = $counter;

echo "<h1>Contador de visitas: $counter</h1>";
