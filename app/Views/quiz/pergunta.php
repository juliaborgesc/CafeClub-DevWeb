<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Sensorial — Brasa Café Clube</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/quiz.css') ?>">
</head>
<body class="question-body">

<header class="question-header">
    <a href="<?= base_url('/') ?>" class="question-logo">Brasa Café Clube</a>
</header>

<main class="question-wrapper">
    <section class="question-card">

        <div class="question-progress-top">
            <span>Pergunta <?= $numero ?> de <?= $total ?></span>
            <span><?= round(($numero / $total) * 100) ?>%</span>
        </div>
        <div class="question-progress">
            <div style="width: <?= ($numero / $total) * 100 ?>%"></div>
        </div>

        <p class="question-label">Quiz Sensorial</p>
        <h1 class="question-title"><?= htmlspecialchars($pergunta['texto']) ?></h1>

        <?php if (session()->getFlashdata('erro')): ?>
        <div class="question-error">
            <i class="hgi-stroke hgi-alert-circle"></i>
            <?= session()->getFlashdata('erro') ?>
        </div>
        <?php endif; ?>

        <form action="<?= base_url('/quiz/responder') ?>" method="post">
            <input type="hidden" name="numero" value="<?= $numero ?>">
            <div class="question-options">
                <?php foreach ($pergunta['opcoes'] as $valor => $opcao): ?>
                <label class="question-option">
                    <input type="radio" name="resposta" value="<?= htmlspecialchars($valor) ?>" required>
                    <span class="question-option-marker"></span>
                    <span class="question-option-text"><?= htmlspecialchars($opcao['texto']) ?></span>
                    <i class="hgi-stroke hgi-checkmark-circle-02 question-option-check"></i>
                </label>
                <?php endforeach; ?>
            </div>

            <button type="submit" class="question-cta">
                <?= $numero < $total ? 'Continuar' : 'Ver meu perfil' ?>
                <i class="hgi-stroke hgi-arrow-right-01"></i>
            </button>
        </form>

    </section>
</main>

</body>
</html>