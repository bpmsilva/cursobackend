<?php
    # Exemplo 1: sintaxe básica
    for ($i = 0; $i < 10; $i++) {
        echo "O valor de i é: $i\n";
    }


    # Exemplo 2: palavra-chave break
    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            echo "Saindo do loop quando i é igual a 5\n";
            break;
        }
        echo "O valor de i é: $i\n";
    }


    # Exemplo 3: palavra-chave continue
    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            echo "Pulando a iteração quando i é igual a 5\n";
            continue;
        }
        echo "O valor de i é: $i\n";
    }

