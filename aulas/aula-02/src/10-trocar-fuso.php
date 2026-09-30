<?php

    $data1 = new DateTime();
    print_r($data1); // imprime o conteúdo do objeto
    print("<br>");

    // Define o fuso horário padrão
    date_default_timezone_set("America/Sao_Paulo");

    $data2 = new DateTime();
    print_r($data2);
    print("<br>");
