<?php

$if1 = true;
$if2 = false;

echo "<div>";
    echo "<h1>Exemplo de IF em HTML</h1>";

    if ($if1) {
        echo "<p>O valor de \$if1 é verdadeiro.</p>";
    } else {
        echo "<p>O valor de \$if1 é falso.</p>";
    }

    if ($if2) {
        echo "<p>O valor de \$if2 é verdadeiro.</p>";
    } else {
        echo "<p>O valor de \$if2 é falso.</p>";
    }

    echo "<h1>Exemplo de for loop em HTML</h1>";
    echo "<ul>";
    for ($i = 0; $i < 5; $i++) {
        echo "<li>Item " . ($i + 1) . "</li>";
    }
    echo "</ul>";
echo "</div>";
