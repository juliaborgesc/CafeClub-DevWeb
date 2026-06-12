<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro — Brasa Café Clube</title>
    <link rel="icon" href="<?= base_url('images/logo.svg') ?>" type="image/svg+xml">

    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/quiz.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

            <h1 class="auth-hero-title auth-hero-title-cadastro">
                <span class="auth-title-soft">Descubra cafés</span>
                <span class="auth-title-accent">que combinam</span>
                <span class="auth-title-soft">com você</span>
            </h1>

            <p class="auth-hero-desc">
                Crie sua conta para salvar seu perfil sensorial e receber recomendações personalizadas de cafés especiais.
            </p>

        </div>
    </section>
    <section class="auth-form-panel">
        <div class="auth-form-card">

            <p class="auth-form-kicker">Criar conta</p>
            <h2>Entre para o clube</h2>


            <?php if (session()->getFlashdata('erros')): ?>
                <div class="auth-alert auth-alert-error">
                    <i class="hgi-stroke hgi-alert-circle"></i>
                    <div>
                        <?php foreach (session()->getFlashdata('erros') as $erro): ?>
                            <p><?= esc($erro) ?></p>
                        <?php endforeach; ?>
                    </div>
                    <button type="button" class="flash-close" aria-label="Fechar mensagem">
                        <i class="hgi-stroke hgi-cancel-01"></i>
                    </button>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/cadastro') ?>" method="post" class="auth-form needs-validation" id="cadastroForm" novalidate>
                <?= csrf_field() ?>

                <div class="auth-field">
                    <label for="nome" class="form-label">Nome completo</label>
                    <div class="auth-input-wrap">
                        <i class="hgi-stroke hgi-user"></i>
                        <input
                            type="text"
                            id="nome"
                            name="nome"
                            class="form-control"
                            value="<?= esc(old('nome')) ?>"
                            placeholder="Ex: João da Silva"
                            minlength="3"
                            pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s'-]{3,}"
                            autocomplete="name"
                            required
                        >
                        <div class="invalid-feedback">
                            Insira um nome válido, usando apenas letras e espaços.
                        </div>
                        <div class="valid-feedback">
                            Nome válido.
                        </div>
                    </div>
                </div>

                <div class="auth-field">
                    <label for="email" class="form-label">E-mail</label>
                    <div class="auth-input-wrap">
                        <i class="hgi-stroke hgi-mail-01"></i>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-control"
                            value="<?= esc(old('email')) ?>"
                            placeholder="voce@email.com"
                            autocomplete="email"
                            required
                        >
                        <div class="invalid-feedback">
                            Insira um e-mail válido.
                        </div>
                        <div class="valid-feedback">
                            E-mail válido.
                        </div>
                    </div>
                </div>

                <div class="auth-field">
                    <label for="telefone" class="form-label">
                        Telefone <span>opcional</span>
                    </label>
                    <div class="auth-input-wrap">
                        <i class="hgi-stroke hgi-smart-phone-01"></i>
                        <input
                            type="tel"
                            id="telefone"
                            name="telefone"
                            class="form-control"
                            value="<?= esc(old('telefone')) ?>"
                            placeholder="(00) 00000-0000"
                            pattern="\(\d{2}\)\s\d{4,5}-\d{4}"
                            inputmode="tel"
                            autocomplete="tel"
                            oninput="mascaraTelefone(this)"
                        >
                        <div class="invalid-feedback">
                            Insira um telefone válido. Exemplo: (27) 99999-9999.
                        </div>
                        <div class="valid-feedback">
                            Telefone válido.
                        </div>
                    </div>
                </div>

                <div class="auth-field">
                    <label for="senha" class="form-label">Senha</label>
                    <div class="auth-input-wrap">
                        <i class="hgi-stroke hgi-lock-password"></i>
                        <input
                            type="password"
                            id="senha"
                            name="senha"
                            class="form-control"
                            placeholder="Crie uma senha segura"
                            minlength="8"
                            autocomplete="new-password"
                            required
                        >
                        <div class="invalid-feedback">
                            A senha precisa ter pelo menos 8 caracteres.
                        </div>
                        <div class="valid-feedback">
                            Senha válida.
                        </div>
                    </div>
                </div>

                <div class="auth-field">
                    <label for="confirmarSenha" class="form-label">Confirmar senha</label>
                    <div class="auth-input-wrap">
                        <i class="hgi-stroke hgi-lock-password"></i>
                        <input
                            type="password"
                            id="confirmarSenha"
                            name="confirmar_senha"
                            class="form-control"
                            placeholder="Repita sua senha"
                            minlength="8"
                            autocomplete="new-password"
                            required
                        >
                        <div class="invalid-feedback">
                            As senhas precisam ser iguais.
                        </div>
                        <div class="valid-feedback">
                            Senhas conferem.
                        </div>
                    </div>
                </div>

                <button type="submit" class="auth-submit">
                    Criar conta e fazer o quiz
                    <i class="hgi-stroke hgi-arrow-right-01"></i>
                </button>
            </form>

            <a href="<?= base_url('/login') ?>" class="auth-secondary-link">
                Já tenho conta — fazer login
            </a>

        </div>
    </section>

</main>

<script>
function mascaraTelefone(input) {
    let valor = input.value.replace(/\D/g, "");

    if (valor.length > 11) {
        valor = valor.slice(0, 11);
    }

    valor = valor.replace(/^(\d{2})(\d)/g, "($1) $2");

    if (valor.length > 13) {
        valor = valor.replace(/(\d{5})(\d{4})$/, "$1-$2");
    } else {
        valor = valor.replace(/(\d{4})(\d{4})$/, "$1-$2");
    }

    input.value = valor;
}

(() => {
    'use strict';

    const form = document.getElementById('cadastroForm');
    const senha = document.getElementById('senha');
    const confirmarSenha = document.getElementById('confirmarSenha');

    function validarConfirmacaoSenha() {
        if (confirmarSenha.value === '') {
            confirmarSenha.setCustomValidity('');
            return;
        }

        if (senha.value !== confirmarSenha.value) {
            confirmarSenha.setCustomValidity('As senhas precisam ser iguais.');
        } else {
            confirmarSenha.setCustomValidity('');
        }
    }

    senha.addEventListener('input', validarConfirmacaoSenha);
    confirmarSenha.addEventListener('input', validarConfirmacaoSenha);

    form.addEventListener('submit', event => {
        validarConfirmacaoSenha();

        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }

        form.classList.add('was-validated');
    }, false);

    document.querySelectorAll('.auth-alert').forEach((flash) => {
        const close = flash.querySelector('.flash-close');
        const hide = () => {
            flash.classList.add('is-hiding');
            setTimeout(() => flash.remove(), 260);
        };

        if (close) close.addEventListener('click', hide);
        setTimeout(hide, 7000);
    });
})();
</script>

</body>
</html>
