<?php

    # Exemplo 01
    // Funções com argumentos nomeados (Named Arguments) - PHP 8.0
    function criarUsuario($nome, $email, $idade) {
        return [
            'nome' => $nome,
            'email' => $email,
            'idade' => $idade
        ];
    }

    // Perceba que os argumentos foram passados
    // em ordem diferente da declaração da função
    $usuario = criarUsuario(
        email: "joao@example.com",
        nome: "João",
        idade: 30
    );


    # Exemplo 02
    // Tipos dos parâmetros e retorno de funções
    // Alguns tipos possíveis são: int, float, string, bool, array, void.
    function multiplicarInteiros(int $a, int $b) { // Tipos de parâmetros
        return $a * $b;
    }
    $resultadoMultiplicacao = multiplicarInteiros(2, 4);
    echo "O resultado da multiplicação é: $resultadoMultiplicacao<br>";


    // Exemplo 03:
    // Isso também é possível com tipos de retorno
    function multiplicarFloats(float $a, float $b): float { // Tipo de retorno
        return $a * $b;
    }
    $resultadoMultiplicacaoFloat = multiplicarFloats(2.5, 4.2);
    echo "O resultado da multiplicação de floats é: $resultadoMultiplicacaoFloat<br>";


    # Exemplo 04:
    // Palavra-chave static
    function contador() {
        static $count = 0; // A variável $count mantém seu valor entre chamadas da função
        $count++;
        return $count;
    }

    $count = contador(); // $count será 1
    echo "Contador: $count<br>"; // Saída: Contador: 1
    $count = contador(); // $count será 2
    echo "Contador: $count<br>"; // Saída: Contador: 2
    $count = contador(); // $count será 3
    echo "Contador: $count<br>"; // Saída: Contador: 3


    # Exemplo 05:
    // Retorno de Arrays
    function obterPessoa(): array {
        return [
            "nome" => "Ana",
            "idade" => 25
        ];
    }
    $pessoa = obterPessoa();
    echo $pessoa["nome"];
    echo "<br>";


    # Exemplo 06:
    // Desestruturação de arrays
    function calculos(int $a, int $b): array {
        return [
            $a + $b,
            $a - $b,
            $a * $b
        ];
    }
    [$soma, $subtracao, $multiplicacao] = calculos(10, 5);
    echo $subtracao;
    echo "<br>";


    # Exemplo 07:
    // Funções anônimas (Anonymous Functions)
    $somar = function ($a, $b) { return $a + $b; }; // Precisa de ";"
    echo $somar(3, 4); // Saída: 7
    echo "<br>";
