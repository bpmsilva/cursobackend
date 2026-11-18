<?php
session_start();

// A mesma página pode mostrar uma questão ou o resultado
// Mostra o resultado se $_GET['resultado'] e $_SESSION['mensagem'] estiverem definidos
$mostrarResultado = isset($_GET['resultado'], $_SESSION['mensagem']);

// Ao abrir o quiz por GET, sorteia a questão e guarda o gabarito
if ($_SERVER['REQUEST_METHOD'] === 'GET' && !$mostrarResultado) {
    // Se não for possível mostrar o resultado, sorteia uma nova questão
    $a = rand(2, 9);
    $b = rand(2, 9);
    $_SESSION['gabarito'] = $a * $b;
}

// O aluno enviou uma resposta
if (isset($_POST['resposta'], $_SESSION['gabarito'])) {

    // Verifica se a resposta está correta
    if ($_POST['resposta'] == $_SESSION['gabarito']) {
        $_SESSION['mensagem'] = 'Você acertou!';
    } else {
        $_SESSION['mensagem'] = 'Você errou. A resposta era ' . $_SESSION['gabarito'] . '.';
    }

    unset($_SESSION['gabarito']); // A questão já foi respondida

    // Redireciona para a mesma página para mostrar o resultado
    // 303 é um código de redirecionamento
    header('Location: ./04-exemplo-session.php?resultado=1', true, 303);
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Quiz de multiplicação</title>
</head>
<body>
    <h1>Quiz de multiplicação</h1>

    <?php if ($mostrarResultado): ?>
        <p><?= $_SESSION['mensagem'] ?></p>
        <a href="./04-exemplo-session.php">Nova questão</a>
    <?php else: ?>
        <form action="./04-exemplo-session.php" method="post">
            <label for="resposta">Quanto é <?= $a ?> × <?= $b ?>?</label>
            <input type="number" id="resposta" name="resposta" required>
            <button type="submit">Conferir</button>
        </form>
    <?php endif; ?>
</body>
</html>
