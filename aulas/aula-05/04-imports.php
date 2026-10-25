<?php
    // Inclui o arquivo e interrompe a execução se houver problema
    require 'helpers.php'; // Gera erro fatal se não conseguir incluir

    // Inclui o arquivo somente se ele ainda não tiver sido incluído
    // Gera erro fatal se não conseguir incluir
    require_once 'helpers.php';

    // Inclui o arquivo e continua a execução mesmo se houver problema
    include 'help.php'; // Gera warning se não conseguir incluir

    // Inclui o arquivo somente se ele ainda não tiver sido incluído
    // Gera warning se não conseguir incluir
    include_once 'helpers.php';

    dummyFunction();
