<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Brasa Café Clube</title>
    <link rel="icon" href="<?= base_url('images/logo.svg') ?>" type="image/svg+xml">

    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/quiz.css') ?>">
</head>

<body class="auth-page">

<header class="auth-topbar">
    <a href="<?= base_url('/') ?>">
        <img src="<?= base_url('images/brasinha.svg') ?>" alt="Brasa Café Clube">
    </a>
</header>

<main class="auth-shell">

    <section class="auth-hero-panel">
        <div class="auth-hero-content">

            <h1 class="auth-hero-title auth-hero-title-login">
                <span class="auth-title-soft">Seu próximo</span>
                <span class="auth-title-accent">café especial</span>
                <span class="auth-title-soft">está esperando</span>
            </h1>

            <p class="auth-hero-desc">
                Entre para continuar sua jornada e receber cafés que combinam com seu paladar.
            </p>

        </div>
    </section>

    <section class="auth-form-panel">
        <div class="auth-form-card auth-login-card">

            <p class="auth-form-kicker">Login</p>
            <h2>Bem-vindo de volta</h2>

            <?php if (session()->getFlashdata('sucesso')): ?>
                <div class="auth-alert auth-alert-success">
                    <i class="hgi-stroke hgi-checkmark-circle-02"></i>
                    <p><?= esc(session()->getFlashdata('sucesso')) ?></p>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('erro')): ?>
                <div class="auth-alert auth-alert-error">
                    <i class="hgi-stroke hgi-alert-circle"></i>
                    <p><?= esc(session()->getFlashdata('erro')) ?></p>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/login') ?>" method="post" class="auth-form">
                <?= csrf_field() ?>

                <div class="auth-field">
                    <label>E-mail</label>
                    <div class="auth-input-wrap">
                        <i class="hgi-stroke hgi-mail-01"></i>
                        <input
                            type="email"
                            name="email"
                            value="<?= esc(old('email')) ?>"
                            placeholder="voce@email.com"
                            required
                        >
                    </div>
                </div>

                <div class="auth-field">
                    <label>Senha</label>
                    <div class="auth-input-wrap">
                        <i class="hgi-stroke hgi-lock-password"></i>
                        <input
                            type="password"
                            name="senha"
                            placeholder="Digite sua senha"
                            required
                        >
                    </div>
                </div>

                <button type="submit" class="auth-submit">
                    Entrar
                    <i class="hgi-stroke hgi-arrow-right-01"></i>
                </button>
            </form>

            <a href="<?= base_url('/cadastro') ?>" class="auth-secondary-link">
                Não tenho conta — criar cadastro
            </a>

        </div>
    </section>

</main>

</body>
</html>