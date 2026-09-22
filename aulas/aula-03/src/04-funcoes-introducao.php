<?php

    # Exemplo 01
    function exibirMensagem($mensagem) {
        echo $mensagem;
    }
    exibirMensagem("Olá, mundo!<br>");


    # Exemplo 02
    function somar($a, $b) {
        return $a + $b; // Retorna a soma de dois números
    }
    $resultado = somar(5, 10);
    exibirMensagem("O resultado da soma é: $resultado<br>");


    # Exemplo 03
    function dividir($a, $b) {
        if ($b == 0) return; // Return interrompe a execução da função
        return $a / $b; // Retorna a divisão de dois números
    }
    $resultadoDivisao = dividir(10, 0); // o retorno será null, pois a função não retornou nada
    exibirMensagem("O resultado da divisão é: $resultadoDivisao<br>");


    # Exemplo 04
    function saudacao($nome = "Visitante") { // Parâmetro com valor padrão
        return "Olá, $nome!<br>";
    }
    exibirMensagem(saudacao("João"));


    # Exemplo 05
    # Escopo de variáveis
    function escopo() {
        // Esta variável só existe dentro da função escopo()
        $variavelLocal = "Sou uma variável local<br>";
        echo $variavelLocal;
    }
    escopo();


    # Exemplo 06
    // Variável global
    $variavelGlobal = "Sou uma variável global<br>";
    function escopoGlobal() {
        // Para acessar $variavelGlobal, precisamos usar a palavra-chave global
        global $variavelGlobal;
        echo $variavelGlobal;
    }
    escopoGlobal();

    
    # Exemplo 07
    # Armazenando funções em variáveis
    $funcao = "exibirMensagem";
    $funcao("Esta mensagem por variável<br>");
