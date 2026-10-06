<?php

    # Exemplo 01
    // Strings
    $nome = "Maria";
    $sobrenome = "Silva";


    # Exemplo 02
    // Strings vs Números
    $idade = 30;
    $idadeTexto = "30";

    // Evidenciando tipos
    var_dump($idade);
    echo "<br>";
    var_dump($idadeTexto);
    echo "<br>";


    # Exemplo 03
    print("<br><br>");
    // Comparando valores
    print("A variável \$idade é igual a variável \$idadeTexto? ");
    print($idade == $idadeTexto ? "Sim" : "Não");
    print("<br>");
    print('A variável $idade é idêntica a variável \$idadeTexto? ');
    print($idade === $idadeTexto ? "Sim" : "Não");
    print("<br>");


    # Exemplo 04
    print("<br><br>");
    // Concatenando strings
    $nomeCompleto = $nome . " " . $sobrenome;
    print($nomeCompleto . "  tem " . $idade . " anos de idade.<br>");
    echo "O nome completo é: ", $nomeCompleto, "<br>";
    print("O nome completo é: $nomeCompleto" . "<br>");
    
    // Concatenando strings com o operador de atribuição
    $nomeCompleto .= " Souza";
    print("$nomeCompleto<br>"); // Maria Silva Souza


    # Exemplo 05
    print("<br><br>");
    // Escapes de caracteres
    $mensagem = "Alguns caracteres especiais: \\n, \\t, \\\" e \\'";
    print($mensagem . "<br>");
