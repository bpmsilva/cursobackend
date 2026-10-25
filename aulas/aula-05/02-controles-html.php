<?php
    $if1 = true;
    $if2 = false;
?>
<div>
    <h1>Exemplo de IF em HTML</h1>
    <?php if ($if1): ?>
        <p>O valor de $if1 é verdadeiro.</p>
    <?php else: ?>
        <p>O valor de $if1 é falso.</p>
    <?php endif; ?>

    <?php
        // forma preferível de escrever o if em HTML
        if ($if2):
    ?>
        <p>O valor de $if2 é verdadeiro.</p>
    <?php else: ?>
        <p>O valor de $if2 é falso.</p>
    <?php endif; ?>

    <h1>Exemplo de for loop em HTML</h1>
    <ul>
        <?php for ($i = 0; $i < 5; $i++): ?>
            <li>Item <?php echo $i + 1; ?></li>
        <?php endfor; ?>
    </ul>
</div>
