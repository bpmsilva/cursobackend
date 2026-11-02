<?php

$counter = $_COOKIE['counter'] ?? 0;
$counter++;

// Tempo de expiração do cookie: 1 hora (3600 segundos)
$time = time() + 60*60; // O cookie expira em 1 hora (tempo atual + 3600 segundos)

setcookie('counter', $counter, $time);

echo "<h1>Contador de visitas: $counter</h1>";
