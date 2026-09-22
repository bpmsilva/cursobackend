<?php
    // Fluxo de controle com while e do-while

    // while: executa o bloco de código enquanto a condição for verdadeira
    // Preferível ao for quando não sabemos o número de iterações
    $contador = 1;
    while ($contador <= 5) {
        echo "Contador: $contador<br>";
        $contador++;
    }

    // do-while: executa o bloco de código pelo menos uma vez, mesmo que a condição seja falsa
    // Útil quando queremos garantir que o código seja executado pelo menos uma vez
    $contadorDoWhile = 1;
    do {
        echo "Contador do-while: $contadorDoWhile<br>";
        $contadorDoWhile++;
    } while ($contadorDoWhile <= 5);
