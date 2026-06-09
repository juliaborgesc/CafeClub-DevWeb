<?php
$metodos = [
    'COADOR'          => 'coador',
    'V60'             => 'V60',
    'ESPRESSO'        => 'espresso',
    'MOKA'            => 'moka italiana',
    'AEROPRESS'       => 'Aeropress',
    'PRENSA_FRANCESA' => 'prensa francesa',
];

$moagens = [
    'FINA'       => 'fina',
    'MEDIA_FINA' => 'média-fina',
    'MEDIA'      => 'média',
    'GROSSA'     => 'grossa',
];

$metodoLabel = $metodos[$metodo_preparo ?? ''] ?? null;
$moagemLabel = $moagens[$moagem ?? ''] ?? null;

// Monta o trecho final do parágrafo dinamicamente
function textoMetodo($metodoLabel, $moagemLabel, $formaEnvio) {
    if (!$metodoLabel) return '';
    if ($formaEnvio === 'MOIDO' && $moagemLabel) {
        return " Como você usa {$metodoLabel}, a moagem ideal pra você é <strong>{$moagemLabel}</strong> — assim você vai extrair tudo que o grão tem a oferecer.";
    }
    return " Como você prefere receber em grãos, é só moer na hora do preparo no {$metodoLabel} pra garantir o frescor máximo.";
}

$perfis = [
    'iniciante' => [
        'nome'    => 'Iniciante',
        'accent'  => '#c8845a',
        'icone'   => 'hgi-stroke hgi-coffee-01',
        'desc'    => 'Você busca conforto na xícara. Sem complicação, sem amargor forte — só aquele café gostoso e acolhedor que aquece o dia. Os melhores grãos pra você têm notas de chocolate ao leite, caramelo e castanhas, com corpo suave e acidez baixa que não assustam o paladar.' . textoMetodo($metodoLabel, $moagemLabel, $forma_envio ?? ''),
        'badges'  => [
            ['icone' => 'hgi-stroke hgi-coffee-01', 'texto' => 'Suave'],
            ['icone' => 'hgi-stroke hgi-heart',     'texto' => 'Acolhedor'],
            ['icone' => 'hgi-stroke hgi-sun-01',    'texto' => 'Matinal'],
        ],
    ],
    'frutado' => [
        'nome'    => 'Frutado',
        'accent'  => '#59a96a',
        'icone'   => 'hgi-stroke hgi-lemon',
        'desc'    => 'Seu paladar ama vivacidade. Você percebe quando algo tem um gostinho diferente — e gosta disso. Cafés com notas de frutas vermelhas, cítricos e florais, com acidez vibrante e final elegante, foram feitos pra você.' . textoMetodo($metodoLabel, $moagemLabel, $forma_envio ?? ''),
        'badges'  => [
            ['icone' => 'hgi-stroke hgi-lemon',        'texto' => 'Frutado'],
            ['icone' => 'hgi-stroke hgi-lightning-02', 'texto' => 'Vibrante'],
            ['icone' => 'hgi-stroke hgi-leaf-01',      'texto' => 'Delicado'],
        ],
    ],
    'intenso' => [
        'nome'    => 'Intenso',
        'accent'  => '#e28413',
        'icone'   => 'hgi-stroke hgi-fire-02',
        'desc'    => 'Sem força não tem graça. Você quer uma xícara que deixe impressão — que você sinta do primeiro gole ao último. Cafés encorpados, com notas de cacau amargo, especiarias e um final longo e marcante são o seu território.' . textoMetodo($metodoLabel, $moagemLabel, $forma_envio ?? ''),
        'badges'  => [
            ['icone' => 'hgi-stroke hgi-fire-02', 'texto' => 'Intenso'],
            ['icone' => 'hgi-stroke hgi-flash',   'texto' => 'Encorpado'],
            ['icone' => 'hgi-stroke hgi-moon-02', 'texto' => 'Noturno'],
        ],
    ],
    'equilibrado' => [
        'nome'    => 'Equilibrado',
        'accent'  => '#788aa3',
        'icone'   => 'hgi-stroke hgi-coffee-02',
        'desc'    => 'Você aprecia o melhor dos dois mundos. Nem suave demais, nem intenso demais — uma xícara limpa, bem feita, com doçura e acidez em harmonia, que combina com qualquer momento do dia.' . textoMetodo($metodoLabel, $moagemLabel, $forma_envio ?? ''),
        'badges'  => [
            ['icone' => 'hgi-stroke hgi-coffee-02', 'texto' => 'Balanceado'],
            ['icone' => 'hgi-stroke hgi-sun-02',    'texto' => 'Versátil'],
            ['icone' => 'hgi-stroke hgi-star',      'texto' => 'Clássico'],
        ],
    ],
    'explorador' => [
        'nome'    => 'Explorador',
        'accent'  => '#92614a',
        'icone'   => 'hgi-stroke hgi-stars',
        'desc'    => 'O café pra você é descoberta. Você quer o inusitado — o fermentado anaeróbico, o processo experimental, o que ninguém ainda provou. Cada mês vai ser uma surpresa diferente, e você vai adorar cada gole.' . textoMetodo($metodoLabel, $moagemLabel, $forma_envio ?? ''),
        'badges'  => [
            ['icone' => 'hgi-stroke hgi-stars',  'texto' => 'Curioso'],
            ['icone' => 'hgi-stroke hgi-compass', 'texto' => 'Aventureiro'],
            ['icone' => 'hgi-stroke hgi-idea-01', 'texto' => 'Ousado'],
        ],
    ],
];

$perfilKey = $perfil ?? 'equilibrado';
$dados     = $perfis[$perfilKey] ?? $perfis['equilibrado'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Perfil — Brasa Café Clube</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css">

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/quiz.css') ?>">
</head>

<body class="result-body" style="--profile-accent: <?= $dados['accent'] ?>;">

<header class="result-header">
    <a href="<?= base_url('/') ?>" class="result-logo">Brasa Café Clube</a>
</header>

<main class="result-wrapper">
    <section class="result-reveal-card">

        <div class="result-icon">
            <img src="<?= base_url('images/perfis/' . $perfilKey . '.svg') ?>" alt="<?= htmlspecialchars($dados['nome']) ?>">
        </div>

        <p class="result-label">Seu perfil é</p>
        <h1 class="result-title"><?= htmlspecialchars($dados['nome']) ?></h1>

        <p class="result-text"><?= $dados['desc'] ?></p>

        <div class="result-badges">
            <?php foreach ($dados['badges'] as $badge): ?>
            <span class="result-badge">
                <i class="<?= $badge['icone'] ?>"></i>
                <?= htmlspecialchars($badge['texto']) ?>
            </span>
            <?php endforeach; ?>
        </div>

        <a href="<?= base_url('/planos') ?>" class="result-cta">
            Assinar agora
            <i class="hgi-stroke hgi-arrow-right-01"></i>
        </a>

        <button type="button" class="result-share" onclick="compartilhar('<?= htmlspecialchars($dados['nome']) ?>')">
            <i class="hgi-stroke hgi-share-08"></i>
            Compartilhar meu perfil
        </button>

    </section>
</main>

<script>
function compartilhar(perfil) {
    const texto = `Meu perfil no Brasa Café Clube é ${perfil}! Descubra o seu em brasacafeclube.com.br`;
    if (navigator.share) {
        navigator.share({ title: 'Brasa Café Clube', text: texto, url: window.location.href });
    } else {
        navigator.clipboard.writeText(texto).then(() => alert('Link copiado!'));
    }
}
</script>

</body>
</html>