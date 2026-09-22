<?php

    # Exemplo 01:
    // Podemos indicar que determinado valor pode assumir o valor null.
    // Para argumentos
    function exibirNome(?string $nome): void {
        if ($nome === null) {
            echo "Nome não informado";
            return;
        }
        echo $nome;
    }

    // Para retorno de funções
    function buscarUsuario(int $id): ?string {
        if ($id === 1) {
            return "Ana";
        }
        return null;
    }
    exibirNome(buscarUsuario(1)); // Saída: Ana
    echo "<br>";
    exibirNome(buscarUsuario(2)); // Saída: Nome não informado
    echo "<br>";


    # Exemplo 02:
    // Podemos indicar que um parâmetro ou retorno pode possuir mais de um tipo.
    function indicar(int|float $numero): int|float {
        return $numero;
    }
    echo indicar(5); // Saída: 5
    echo "<br>";
    echo indicar(3.14); // Saída: 3.14
    echo "<br>";


    # Exemplo 03:
    function somar(...$numeros) {
        return array_sum($numeros);
    }
    // Soma de 2 números
    echo somar(1, 2);
    echo "<br>";
    // Soma de 5 números (pode ser qualquer quantidade de números)
    echo somar(1, 2, 3, 4, 5);
    echo "<br>";


    # Exemplo 04:
    // callable indica que o parâmetro deve ser uma função ou um método.
    function executarCallback(callable $callback) {
        $callback();
    }
    // Exemplo de uso
    executarCallback(function() {
        echo "Executando callback!<br>";
    });


    # Exemplo 05:
    // Arrow functions: forma concisa de escrever funções anônimas.
    function usar_funcao(int $numero, callable $funcao) {
        return $funcao($numero);
    }
    $dobro = usar_funcao(5, fn($numero) => $numero * 2);
    echo $dobro; // Saída: 10
    echo "<br>";

    // Arrow functions capturam automaticamente variáveis do escopo externo por valor.
    $multiplicador = 10;
    $calcular = fn($numero) => $numero * $multiplicador;
    echo $calcular(5);
    echo "<br>";


    # Exemplo 06:
    // Closures e uso da palavra-chave use
    $taxa = 0.10;
    $calcular = function ($valor) use ($taxa) {
        return $valor * $taxa;
    };
    echo $calcular(100); // Saída: 10
    echo "<br>";


    # Exemplo 07:
    // Construção e retorno de funções
    function criarMultiplicador($multiplicador) {
        return function ($numero) use ($multiplicador) {
            return $numero * $multiplicador;
        };
    }
    $funcaoDobro = criarMultiplicador(2);
    $funcaoTriplo = criarMultiplicador(3);
    
    echo $funcaoDobro(5); // Saída: 10
    echo "<br>";
    echo $funcaoTriplo(5); // Saída: 15 
    echo "<br>";

    
