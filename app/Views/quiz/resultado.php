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
    <link rel="icon" href="<?= base_url('images/logo.svg') ?>" type="image/svg+xml">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/quiz.css') ?>">
</head>

<body class="result-body" style="--profile-accent: <?= $dados['accent'] ?>;">

<header class="result-header">
    <a href="<?= base_url('/') ?>">
        <img src="<?= base_url('images/brasinha.svg') ?>" alt="Brasa Café Clube" class="logo">
    </a>
</header>

<main class="result-wrapper">
    <section class="result-reveal-card">

        <div class="result-icon">
            <img src="<?= base_url('images/perfis/' . $perfilKey . '.svg') ?>" alt="<?= htmlspecialchars($dados['nome']) ?>">
        </div>

        <p class="result-label">Seu perfil é</p>
        <h1 class="result-title"><?= htmlspecialchars($dados['nome']) ?></h1>

        <p class="result-text"><?= $dados['desc'] . $textoMetodo ?></p>

        <div class="result-badges">
            <?php foreach ($dados['badges'] as $badge): ?>
            <span class="result-badge">
                <i class="<?= $badge['icone'] ?>"></i>
                <?= htmlspecialchars($badge['texto']) ?>
            </span>
            <?php endforeach; ?>
        </div>

        <div class="result-plano">
            <?php if ($temPlanoAtivo): ?>
                <p class="result-plano-label">
                    <i class="hgi-stroke hgi-checkmark-circle-02"></i>
                    Você já tem um plano ativo
                </p>

                <div class="result-plano-card result-plano-card-active">
                    <div class="result-current-plan">
                        <span>Plano atual</span>
                        <strong><?= htmlspecialchars($planoAtual['nome'] ?? 'Plano ativo') ?></strong>
                    </div>

                    <p class="result-plano-desc">
                        Seu perfil foi atualizado. Você pode continuar com o plano atual ou comparar os planos disponíveis se quiser mudar.
                    </p>

                    <div class="result-plan-actions">
                        <a href="<?= base_url('/') ?>" class="result-choice-cta result-choice-cta-primary">
                            Continuar com o mesmo
                        </a>

                        <a href="<?= base_url('/planos') ?>" class="result-choice-cta">
                            Mudar de plano
                        </a>
                    </div>
                </div>
            <?php else: ?>
                <p class="result-plano-label">
                    <i class="hgi-stroke hgi-star"></i>
                    Plano recomendado pra você
                </p>
                <div class="result-plano-card">
                    <div class="result-plano-info">
                        <span class="result-plano-nome"><?= htmlspecialchars($dadosPlano['nome']) ?></span>
                        <span class="result-plano-preco"><?= htmlspecialchars($dadosPlano['preco']) ?><small>/mês</small></span>
                    </div>
                    <p class="result-plano-desc"><?= htmlspecialchars($dadosPlano['desc']) ?></p>
                    <a href="<?= base_url($dadosPlano['url']) ?>" class="result-cta" style="margin-top: 0;">
                        Assinar agora
                        <i class="hgi-stroke hgi-arrow-right-01"></i>
                    </a>
                </div>
                <a href="<?= base_url('/planos') ?>" class="result-plano-ver-todos">
                    Ver todos os planos
                    <i class="hgi-stroke hgi-arrow-right-01"></i>
                </a>
            <?php endif; ?>
        </div>

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
