<?php
    // Comentário de uma linha
    # Outro estilo de comentário de uma linha

    /**
     * Comentário de múltiplas linhas
     */

    // Variáveis começam com $ e possuem tipagem dinâmica
    $nome = "Maria";
    $idade = 20;
    $altura = 1.70;
    $matriculado = true;

    // Impressão de variáveis. echo não adiciona \n automaticamente
    echo $nome;
    echo $idade;
    echo "\n\n"; // Duas quebras de linha

    // Curiosidade: instruções não são case sensitive:
    ECHO "Hello World!"; // ECHO, EcHo, eChO, etc. são equivalentes
    ECHO "\n\n";

    // Há diferença entre aspas simples e aspas duplas
    echo "Olá, $nome!\n"; // Interpola a variável e interpreta \n
    echo 'Olá, $nome!\n'; // Não interpola a variável nem interpreta \n
    echo "\n\n";

    // var_dump() mostra o tipo e o valor da variável
    var_dump($nome);
    var_dump($idade);

// Em arquivos que contêm apenas PHP, não é necessário fechar a tag PHP
