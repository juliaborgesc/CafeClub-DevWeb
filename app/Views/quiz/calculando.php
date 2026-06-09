<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando seu perfil — Brasa Café Clube</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/quiz.css') ?>">

    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.9.14/dist/dotlottie-wc.js" type="module"></script>
</head>
<body class="calculando-body">

<header class="question-header">
    <a href="<?= base_url('/') ?>" class="question-logo">Brasa Café Clube</a>
</header>

<main class="calculando-wrapper">
    <div class="calculando-card">

        <dotlottie-wc
            src="https://lottie.host/e43a64bf-363e-46c4-bc43-fb8a1064fe9d/crvs7rdGXG.lottie"
            autoplay
            loop
            class="calculando-lottie"
        ></dotlottie-wc>

        <p class="calculando-label">Aguarde um momento</p>
        <h1 class="calculando-title" id="calculando-title">Analisando seu paladar...</h1>

        <div class="calculando-progress">
            <div class="calculando-progress-bar" id="progressBar"></div>
        </div>

        <p class="calculando-hint" id="calculando-hint">Cruzando suas respostas com nossos perfis</p>

    </div>
</main>

<script>
    const frases = [
        'Analisando seu paladar...',
        'Identificando suas notas favoritas...',
        'Encontrando seu perfil sensorial...',
        'Quase lá...',
    ];

    const hints = [
        'Cruzando suas respostas com nossos perfis',
        'Mapeando preferências de amargor e acidez',
        'Combinando com os melhores grãos pra você',
        'Preparando sua curadoria personalizada',
    ];

    const titulo = document.getElementById('calculando-title');
    const hint = document.getElementById('calculando-hint');
    const barra = document.getElementById('progressBar');

    const duracao = 3800;
    const intervalo = duracao / frases.length;

    let etapa = 0;

    // troca frase a cada intervalo
    const trocarFrase = setInterval(() => {
        etapa++;
        if (etapa < frases.length) {
            titulo.style.opacity = '0';
            hint.style.opacity = '0';
            setTimeout(() => {
                titulo.textContent = frases[etapa];
                hint.textContent = hints[etapa];
                titulo.style.opacity = '1';
                hint.style.opacity = '1';
            }, 300);
        }
    }, intervalo);

    // anima a barra de progresso
    setTimeout(() => barra.style.width = '100%', 100);

    // redireciona pro resultado
    setTimeout(() => {
        clearInterval(trocarFrase);
        window.location.href = '<?= base_url('/quiz/resultado') ?>';
    }, duracao + 400);
</script>

</body>
</html>