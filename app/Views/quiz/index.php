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
<body class="quiz-intro-body">

<header class="result-header">
    <a href="<?= base_url('/') ?>">
        <img src="<?= base_url('images/brasinha.svg') ?>" alt="Brasa Café Clube" class="logo">
    </a>
</header>

<main class="quiz-intro-wrapper">
    <div class="quiz-intro-card">

        <div class="quiz-intro-icon">
            <i class="hgi-stroke hgi-coffee-01"></i>
        </div>

        <p class="quiz-intro-label">Quiz Sensorial</p>

        <h1 class="quiz-intro-title">Qual é o seu perfil de café?</h1>

        <p class="quiz-intro-desc">
            Responda 12 perguntas rápidas e descubra qual café foi feito pra você.
            A gente cuida do resto — curadoria, seleção e entrega todo mês.
        </p>

        <div class="quiz-intro-pills">
            <span class="quiz-intro-pill">
                <i class="hgi-stroke hgi-clock-01"></i>
                3 minutos
            </span>
            <span class="quiz-intro-pill">
                <i class="hgi-stroke hgi-quiz-02"></i>
                12 perguntas
            </span>
            <span class="quiz-intro-pill">
                <i class="hgi-stroke hgi-stars"></i>
                5 perfis possíveis
            </span>
        </div>

        <a href="<?= base_url('/quiz/pergunta/1') ?>" class="quiz-intro-cta">
            Começar o quiz
            <i class="hgi-stroke hgi-arrow-right-01"></i>
        </a>

        <a href="<?= base_url('/') ?>" class="quiz-intro-back">
            <i class="hgi-stroke hgi-arrow-left-01"></i>
            Voltar ao início
        </a>

    </div>
</main>

</body>
</html>