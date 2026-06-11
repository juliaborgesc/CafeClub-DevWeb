<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assinar — Brasa Café Clube</title>
    <link rel="icon" href="<?= base_url('images/logo.svg') ?>" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/quiz.css') ?>">
</head>
<body class="quiz-intro-body">

<header class="question-header">
    <a href="<?= base_url('/') ?>" class="question-logo">Brasa Café Clube</a>
</header>

<main class="quiz-intro-wrapper">
    <div class="quiz-intro-card">

        <div class="quiz-intro-icon">
            <i class="hgi-stroke hgi-shopping-bag-03"></i>
        </div>

        <p class="quiz-intro-label">Confirmação de assinatura</p>

        <h1 class="quiz-intro-title"><?= esc(ucfirst($plano)) ?></h1>

        <p class="quiz-intro-desc">
            Clique em assinar para ativar seu plano. 
            Você pode cancelar quando quiser, sem burocracia.
        </p>

        <form action="<?= base_url('/cliente/plano') ?>" method="post" style="width:100%;">
            <?= csrf_field() ?>
            <input type="hidden" name="plano" value="<?= esc($plano) ?>">
            <button type="submit" class="quiz-intro-cta" style="border:none; cursor:pointer; font-family:inherit; width:100%;">
                Assinar plano <?= esc(ucfirst($plano)) ?>
                <i class="hgi-stroke hgi-checkmark-circle-02"></i>
            </button>
        </form>

        <a href="<?= base_url('/planos') ?>" class="quiz-intro-back">
            <i class="hgi-stroke hgi-arrow-left-01"></i>
            Voltar aos planos
        </a>

    </div>
</main>

</body>
</html>