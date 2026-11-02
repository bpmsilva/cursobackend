<?php
    # Exemplo 01
    // Tamanho de uma "string"
    $nome = "José";
    $tamanho = strlen($nome); // 5 bytes
    print("O tamanho da string \"$nome\" é: $tamanho em bytes<br>");

    $tamanho = mb_strlen($nome, "UTF-8"); // 4 caracteres
    print("O tamanho da string \"$nome\" (UTF-8): $tamanho caracteres<br>");


    # Exemplo 02
    print("<br><br>");
    // Funções úteis para manipulação de strings
    $nome = "José da Silva";
    print("A string \$nome é: $nome<br>");
    print("A string \$nome em maiúsculas é: " . strtoupper($nome) . "<br>");
    print("A string \$nome em minúsculas é: " . strtolower($nome) . "<br>");
    print("<br><br>");
    echo trim("     A string \$nome em minúsculas é:<b> ")  . strtolower($nome) . "</b>", "<br>";
    echo ltrim("     A string \$nome em minúsculas é:<b> ") . strtolower($nome) . "</b>", "<br>";


    # Exemplo 03
    print("<br><br>");
    $texto = "Instituto Federal de Educação, Ciência e Tecnologia da Bahia";

    // substr também trabalha com bytes
    echo substr($texto, 0, 9) . '<br>';
    echo substr($texto, 58)   . '<br>';
    echo substr($texto, -19)  . '<br>';

    // Para recortar textos UTF-8 com acentos, use mb_substr()
    $educacao = substr($texto, 21, 10);
    $tamanho = strlen($educacao);
    echo "A palavra recortada é: $educacao<br>";
    echo "O tamanho da palavra recortada é: $tamanho bytes<br>";

    $educacao = mb_substr($texto, 21, 8, "UTF-8");
    echo "A palavra recortada é: $educacao<br>";
    echo "O tamanho da palavra recortada é: " . mb_strlen($educacao, "UTF-8") . " caracteres<br>";


    # Exemplo 04 - Comparando strings
    print("<br><br>");
    $texto1 = "ABC";
    $texto2 = "def";
    $texto3 = "abc";
    $texto4 = "0";
    $numero = 0;

    echo "Comparando $texto1 e $texto2:<br>";
    if ($texto1 < $texto2) {
        echo "$texto1 vem antes de $texto2.<br>";
    } elseif ($texto1 > $texto2) {
        echo "$texto1 vem depois de $texto2.<br>";
    } else {
        echo "As strings são iguais.<br>";
    }

    echo "Comparando $texto1 e $texto3:<br>";
    if ($texto1 < $texto3) {
        echo "$texto1 vem antes de $texto3.<br>";
    } elseif ($texto1 > $texto3) {
        echo "$texto1 vem depois de $texto3.<br>";
    } else {
        echo "As strings são iguais.<br>";
    }

    echo '"0" e 0 possuem valores iguais? ';
    echo $texto4 == $numero ? "Sim.<br>" : "Não.<br>";

    echo '"0" e 0 possuem valores e tipos iguais? ';
    echo $texto4 === $numero ? "Sim.<br>" : "Não.<br>";


    # Exemplo 05 - Substituindo partes de uma string
    print("<br><br>");
    // Substituição diferenciando maiúsculas de minúsculas
    $ifba = "Instituto Federal de Educação, Ciência e Tecnologia da Bahia";
    $ifba = str_replace("Bahia", "BAHIA", $ifba); // Não é "in-place"
    echo "$ifba<br>";

    // Substituição sem diferenciar maiúsculas de minúsculas
    $ifba = str_ireplace("federal", "FEDERAL", $ifba);
    echo "$ifba<br>";


    # Exemplo 06
    // Verificando se uma string contém outra string
    print("<br><br>");
    $texto = "Instituto Federal de Educação, Ciência e Tecnologia da Bahia";
    $palavra = "Educação";

    $posicao = strpos($texto, $palavra); // Posicação em bytes
    if ($posicao !== false) {
        echo "A string \$texto contém a palavra $palavra.
        Ela começa na posição " . $posicao . ".<br>";
    } else {
        echo "A string \$texto não contém a palavra $palavra.<br>";
    }


    # Exemplo 07
    // Maiúsculas e minúsculas
    print("<br><br>");
    echo "A string \$ifba é: " . strtolower($ifba) . "<br>";
    echo "A string \$ifba é: " . strtoupper($ifba) . "<br>";

    // Maiúsculas e minúsculas com suporte a UTF-8
    print("<br>");
    echo "A string \$ifba é: " . mb_strtolower($ifba, "UTF-8") . "<br>";
    echo "A string \$ifba é: " . mb_strtoupper($ifba, "UTF-8") . "<br>";


    # Exemplo 08
    // Substring 
    print("<br><br>");
    $texto = "Instituto Federal de Educação, Ciência e Tecnologia da Bahia";
    $substring = mb_substr($texto, 0, 9, "UTF-8"); // Retorna "Instituto"
    
    // Em alguns casos pode ser necessário usar a função mb_substr() para lidar com strings
    // UTF-8 especialmente quando há caracteres acentuados (mb_substr($texto, 0, 9, "UTF-8"))
    echo "A substring da string \$texto é: $substring<br>";
    echo "A substring da string \$texto é: " . substr($texto, 33, 8) . "<br>"; // Retorna "Ciência"


    # Exemplo 09
    // Dividindo uma string com explode()
    print("<br><br>");
    $texto = "Instituto Federal de Educação, Ciência e Tecnologia da Bahia";
    $palavras = explode(" ", $texto);
    echo "A string \$texto contém " . count($palavras) . " palavras.<br>";
    echo "A primeira palavra da string \$texto é: " . $palavras[0] . "<br>";
    echo "A última palavra da string \$texto é: " . $palavras[count($palavras) - 1] . "<br>";
    echo "<pre>";
    print_r($palavras);
    echo "</pre>";

    foreach ($palavras as $palavra) {
        echo "Palavra: $palavra<br>";
    }


    # Exemplo 10
    // Juntando uma string com implode()
    print("<br><br>");
    $separador = " ";
    $textoJunto = implode($separador, $palavras);
    echo "A string \$textoJunto é: <b>$textoJunto</b><br>";

    # Exemplo 11
    // str_pad
    print("<br>");
    function padwithzeros($number, $length) {
        return str_pad($number, $length, '0', STR_PAD_LEFT);
    }

    echo "<pre>";
    echo "Número pequeno: " . padwithzeros(123, 9) . "<br>";
    echo "Número grande:  " . padwithzeros(123456789, 9) . "<br>";
    echo "</pre>";

    # Exemplo 12
    // str_repeat
    echo "<br>";
    $texto = "-";
    $texto = str_repeat($texto, 50);
    echo "Divisão: $texto<br>";
    $breaks = "<br>";
    echo str_repeat($breaks, 25);
