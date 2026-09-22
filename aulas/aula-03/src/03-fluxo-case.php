<?php
    // Este código demonstra o uso de fluxo de controle com a instrução switch-case
    $diaDaSemana = 3;

    // 1 = Segunda-feira; 2 = Terça-feira; 3 = Quarta-feira; 4 = Quinta-feira
    // 5 = Sexta-feira; 6 = Sábado; 7 = Domingo
    switch ($diaDaSemana) {
        case 1:
            echo "Hoje é Segunda-feira.\n";
            // O break evita que o código continue executando os próximos cases
            break;
        case 2:
            echo "Hoje é Terça-feira.\n";
            break;
        case 3:
            echo "Hoje é Quarta-feira.\n";
            // Sugetão: comente o próximo break
            break;
        case 4:
            echo "Hoje é Quinta-feira.\n";
            break;
        case 5:
            echo "Hoje é Sexta-feira.\n";
            break;
        case 6:
            echo "Hoje é Sábado.\n";
            break;
        case 7:
            echo "Hoje é Domingo.\n";
            break;
        default:
            echo "Dia da semana inválido.\n";
    }
