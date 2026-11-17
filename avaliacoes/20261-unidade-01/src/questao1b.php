<?php

function saudacao(int $hora) {
    if ($hora >= 0 && $hora <= 11) {
        return "Bom dia";
    } elseif ($hora >= 12 && $hora <= 17) {
        return "Boa tarde";
    } elseif ($hora >= 18 && $hora <= 23) {
        return "Boa noite";
    } else {
        return "Horário inválido";
    }
}

echo saudacao(date("H"))

?>
