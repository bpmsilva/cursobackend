<?php

function exibirIntervalo(int $num1, int $num2) {
    // Perceba que a condição de parada utiliza "menor ou igual"
    for ($i = $num1; $i <= $num2; $i++) {
        echo $i . " ";
    }
}

exibirIntervalo(1, 10);

?>