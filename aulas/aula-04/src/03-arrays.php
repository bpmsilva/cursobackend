<?php
    // Array
    $arr = ["PHP", "JavaScript", "Python", "Java", "C++"];

    # Exemplo 01
    // Array indexados
    $arr = [2, 3, 5, 7, 11, 13];
    echo "Array original: [ " . implode(", ", $arr) . " ]<br>";
    echo "Primeiro elemento: $arr[0]<br><br>";

    // Array indexados com strings
    $frutas = ["Maçã", "Banana", "Uva"];
    echo "Array de frutas: [ " . implode(", ", $frutas) . " ]<br>";
    echo "Primeira fruta: $frutas[0]<br>";
    echo "Segunda fruta: $frutas[1]<br><br>";

    // Arrays com números e strings
    $misturado = [1, "dois", 3.0, true];
    // A saída será convertida, então 3.0 será exibido como 3 e true como 1.
    echo "Array misturado: [ " . implode(", ", $misturado) . " ]<br>";
    echo "Terceiro elemento: $misturado[2]<br><br>";

    echo "Var_dump dos arrays:<br>";
    echo "<pre>";
    var_dump($arr);
    var_dump($frutas);
    var_dump($misturado);
    echo "</pre>";


    # Exemplo 02 - Arrays associativos
    echo "<br><br>";
    // Array associativo


    /* Em Python:
        d = {
            "nome": "João",
            "idade": 25,
            "cidade": "São Paulo"
        }
    */

    /* Em JavaScript:
        let d = {
            nome: "João",
            idade: 25,
            cidade: "São Paulo"
        }
    */
    $arrAssociativo = [
        "nome" => "João",
        "idade" => 25,
        "cidade" => "São Paulo"
    ];

    echo "Nome: " . $arrAssociativo["nome"] . "<br>";
    echo "Cidade: " . $arrAssociativo["cidade"] . "<br>";

    echo "<pre>";
    var_dump($arrAssociativo);
    echo "</pre>";


    # Exemplo 03 - Modificando elementos
    echo "<br><br>";

    // É possível misturar tipos
    $frutas[1] = 21;
    $arrAssociativo["idade"] = "Laranja";

    echo "Array original: [ " . implode(", ", $frutas) . " ]<br>";
    echo "Nova segunda fruta: $frutas[1]<br>";
    echo "Array associativo original: [ " . implode(", ", $arrAssociativo) . " ]<br>";
    echo "Nova idade: " . $arrAssociativo["idade"] . "<br>";
    

    # Exemplo 04 - Quantidade e visualização dos elementos
    echo "<br><br>";
    echo "Quantidade de frutas: " . count($frutas) . "<br>";
    echo "<pre>";
    print_r($frutas); // Exibe chaves e valores
    echo "</pre>";

    # Exemplo 05 - Percorrendo arrays com for
    echo "<br><br>";
    for ($i = 0; $i < count($frutas); $i++) {
        echo "Fruta $i: $frutas[$i]<br>";
    }
    // O for acima pressupõe índices numéricos consecutivos iniciados em zero.

    # Exemplo 06 - Percorrendo arrays com foreach
    echo "<br><br>";
    echo "Percorrendo array de frutas com foreach:<br>";
    foreach ($frutas as $fruta) {
        echo "Fruta: $fruta<br>";
    }
    echo "<br>Percorrendo array associativo com foreach:<br>";
    foreach ($arrAssociativo as $chave => $valor) {
        echo "$chave: $valor<br>";
    }

    # Exemplo 07 - Adicionando e removendo elementos
    echo "<br><br>";
    $numeros = [10, 20, 30];
    echo "Antes: ";
    print_r($numeros);
    echo "<br>";

    $numeros[] = 40; // Adiciona ao final. Acham estranho? É o mesmo que array_push($numeros, 40);
    echo "Depois de adicionar 40: ";
    print_r($numeros);
    echo "<br>";

    array_push($numeros, 50, 60);
    echo 'Depois de adicionar 50 e 60 com array_push($numeros, 50, 60): ';
    print_r($numeros);
    echo "<br>";

    echo "Antes de remover elementos: ";
    print_r($numeros);
    echo "<br>";

    array_pop($numeros); // Remove o último. Retorna o valor removido.
    echo "Depois de remover o último elemento com array_pop(): ";
    print_r($numeros);
    echo "<br>";

    array_shift($numeros); // Remove o primeiro e reindexa chaves numéricas
    echo "Depois de remover o primeiro elemento com array_shift(): ";
    print_r($numeros);
    echo "<br>";

    array_unshift($numeros, 5); // Adiciona ao início
    echo 'Depois de adicionar 5 ao início com array_unshift($numeros, 5): ';
    echo "<pre>";
    print_r($numeros);
    echo "</pre>";

    # Exemplo 08 - Buscando valores
    echo "<br><br>";
    $linguagens = ["PHP", "JavaScript", "Python"];

    // O terceiro parâmetro indica que a busca é estrita (tipo e valor)
    echo in_array("PHP", $linguagens, true) ? "PHP encontrado.<br>" : "PHP não encontrado.<br>";

    // Retorna a posição do primeiro elemento encontrado ou false se não encontrado
    // O terceiro parâmetro indica que a busca é estrita (tipo e valor)
    $posicao = array_search("JavaScript", $linguagens, true);
    if ($posicao !== false) {
        echo "JavaScript está na posição $posicao.<br>";
    }

    // Possível também para chaves
    echo "Existe a chave 1? " . (array_key_exists(1, $linguagens) ? "Sim" : "Não") . "<br>";

    # Exemplo 09 - Ordenando arrays indexados
    echo "<br><br>";
    $notas = [7, 10, 5, 8];

    // Ordenação crescente
    sort($notas); // Modifica o array original para ordem crescente
    echo "Crescente: " . implode(", ", $notas) . "<br>";

    // Ordenação decrescente
    rsort($notas); // Modifica o array original para ordem decrescente
    echo "Decrescente: " . implode(", ", $notas) . "<br>";

    # Exemplo 10 - Ordenando arrays associativos
    echo "<br><br>";
    $precos = ["Mouse" => 50, "Teclado" => 120, "Monitor" => 800];
    asort($precos); // Ordena pelos valores e preserva as chaves
    echo "<pre>";
    print_r($precos);
    echo "</pre>";

    ksort($precos); // Ordena pelas chaves
    echo "<pre>";
    print_r($precos);
    echo "</pre>";

    # Exemplo 11 - Recortando e combinando arrays
    echo "<br><br>";

    $a = [1, 2, 3, 4, 5];
    echo "Array original: " . implode(", ", $a) . "<br>";

    $pedaco = array_slice($a, 1, 3); // [2, 3, 4]
    echo "Recorte: " . implode(", ", $pedaco) . "<br>";

    $juncao = array_merge($pedaco, [6, 7]);
    echo "Combinado: " . implode(", ", $juncao) . "<br>";

    # Exemplo 12 - Removendo valores repetidos
    echo "<br><br>";
    $valores = [2, 3, 2, 4, 3, 5];
    echo "Valores originais: " . implode(", ", $valores) . "<br>";

    $unicos = array_unique($valores); // Preserva as chaves originais
    echo "Valores únicos: " . implode(", ", $unicos) . "<br>";

    echo "Array com chaves preservadas:<br>";
    echo "<pre>";
    print_r($unicos);
    echo "</pre>";

    # Exemplo 13 - Transformando elementos com array_map()
    echo "<br><br>";
    $numeros = [1, 2, 3, 4, 5];
    $quadrados = array_map(function ($n) {
        return $n * $n;
    }, $numeros);
    echo "Números: " . implode(", ", $numeros) . "<br>";
    echo "Quadrados: " . implode(", ", $quadrados) . "<br>";

    # Exemplo 14 - Filtrando elementos com array_filter()
    echo "<br><br>";
    $pares = array_filter($numeros, function ($n) {
        return $n % 2 === 0;
    });
    // array_filter preserva as chaves originais.
    echo "Números: " . implode(", ", $numeros) . "<br>";
    echo "Pares: " . implode(", ", $pares) . "<br>";

    # Exemplo 15 - Acumulando valores com array_reduce()
    echo "<br><br>";
    $soma = array_reduce($numeros, function ($acumulador, $n) {
        return $acumulador + $n;
    }, 0);
    echo "Soma dos números: $soma<br>";


    # Exemplo 16 - Verificando existência e removendo chaves
    echo "<br><br>";
    $configuracao = ["tema" => "claro", "idioma" => "pt-BR", "ativo" => null];
    echo "Chave 'ativo' existe? " . (array_key_exists("ativo", $configuracao) ? "Sim" : "Não") . "<br>";
    echo "Chave 'ativo' está definida e não é null? " . (isset($configuracao["ativo"]) ? "Sim" : "Não") . "<br>";
    unset($configuracao["idioma"]);
    echo "<pre>";
    print_r($configuracao);
    echo "</pre>";
