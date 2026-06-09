<?php
$perfilKeys = array_keys($perfis);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfis Sensoriais — Brasa Café Clube</title>
    <link rel="icon" href="<?= base_url('images/logo.svg') ?>" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css">

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>

<header id="header">
    <a href="<?= base_url('/') ?>">
        <img src="<?= base_url('images/brasinha.svg') ?>" alt="Brasa Café Clube" class="logo">
    </a>

    <nav>
        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('/planos') ?>">Planos</a>
        <a href="<?= base_url('/perfis') ?>">Perfis</a>
        <a href="<?= base_url('/quiz') ?>">Quiz</a>
    </nav>

    <button class="mobile-menu-btn" onclick="toggleMobileMenu()" aria-label="Abrir menu">
        <i class="hgi-stroke hgi-menu-01"></i>
    </button>

    <a href="<?= base_url('/quiz') ?>" class="btn btn-primary">Fazer Quiz</a>
</header>

<div class="mobile-menu" id="mobileMenu">
    <button class="mobile-menu-close" onclick="toggleMobileMenu()" aria-label="Fechar menu">
        ×
    </button>

    <a href="<?= base_url('/') ?>">Home</a>
    <a href="<?= base_url('/planos') ?>">Planos</a>
    <a href="<?= base_url('/perfis') ?>">Perfis</a>
    <a href="<?= base_url('/quiz') ?>">Quiz</a>
</div>

<main class="profile-carousel-page">

    <section class="profile-carousel-hero">
        <span class="profile-carousel-kicker">Guia sensorial Brasa Café Clube</span>

        <h1 class="profile-carousel-title font-display">
            Conheça os<br>
            Perfis Sensoriais
        </h1>

        <p class="profile-carousel-subtitle">
            Cada perfil traduz um jeito diferente de viver café. Passe pelos cards e descubra qual combina mais com você.
        </p>
    </section>

    <section class="profile-carousel-section">

        <div class="profile-carousel-shell" data-profile-carousel>

            <button class="profile-carousel-btn profile-carousel-prev" type="button" aria-label="Perfil anterior">
                ‹
            </button>

            <div class="profile-carousel-viewport">
                <div class="profile-carousel-track">

                    <?php foreach ($perfis as $perfil): ?>  

                        <article class="profile-slide" style="--profile-color: <?= esc($perfil['accent']) ?>;">

                            <div class="profile-slide-left">

                                <h2 class="profile-slide-title font-display">
                                    <?= esc($perfil['nome']) ?>
                                </h2>

                                <p class="profile-slide-tagline">
                                    <?= esc($perfil['tagline']) ?>
                                </p>

                                <p class="profile-slide-desc">
                                    <?= esc($perfil['desc']) ?>
                                </p>

                                <div class="profile-slide-badges">
                                    <?php foreach ($perfil['badges'] as $badge): ?>
                                        <span><?= esc($badge) ?></span>
                                    <?php endforeach; ?>
                                </div>

                                <div class="profile-slide-notes">
                                    <strong>Notas mais prováveis</strong>

                                    <div>
                                        <?php foreach ($perfil['notas'] as $nota): ?>
                                            <span><?= esc($nota) ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-slide-center">
                                <div class="profile-slide-image-card">
                                    <div class="profile-slide-glow"></div>

                                    <img
                                        src="<?= base_url('images/perfis/' . $perfil['imagem']) ?>"
                                        alt="Bonequinho do perfil <?= esc($perfil['nome']) ?>"
                                    >
                                </div>
                            </div>

                            <div class="profile-slide-right">
                                <h3>Mapa sensorial</h3>

                                <div class="profile-slide-bars">
                                    <?php foreach ($perfil['atributos'] as $label => $valor): ?>
                                        <div class="profile-slide-bar-row">
                                            <div class="profile-slide-bar-label">
                                                <span><?= esc($label) ?></span>
                                                <strong><?= esc($valor) ?>%</strong>
                                            </div>

                                            <div class="profile-slide-bar-track">
                                                <div class="profile-slide-bar-fill" style="width: <?= esc($valor) ?>%;"></div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="profile-slide-ideal">
                                    <strong>Na sua xícara</strong>
                                    <p><?= esc($perfil['ideal']) ?></p>
                                </div>
                            </div>

                        </article>
                    <?php endforeach; ?>

                </div>
            </div>

            <button class="profile-carousel-btn profile-carousel-next" type="button" aria-label="Próximo perfil">
                ›
            </button>

        </div>

        <div class="profile-carousel-dots">
            <?php foreach ($perfis as $index => $perfil): ?>
                <button
                    class="profile-carousel-dot"
                    type="button"
                    data-profile-index="<?= array_search($index, $perfilKeys) ?>"
                    aria-label="Ir para perfil <?= esc($perfil['nome']) ?>"
                ></button>
            <?php endforeach; ?>
        </div>

    </section>

    <section class="profile-carousel-cta">
        <div class="profile-carousel-cta-content">
            <span>Faça o quiz</span>

            <h2 class="font-display">
                Saiba qual é seu perfil
            </h2>

            <p>
                Descubra o tipo de café que dá match com você e receba cafés feitos para o seu paladar.
            </p>
        </div>

        <a href="<?= base_url('/quiz') ?>" class="btn btn-primary profile-carousel-cta-btn">
            Fazer o Quiz
        </a>
    </section>
</main>

<footer>
    <div class="footer-bottom">
        <p>&copy; <?= date('Y') ?> Brasa Café Clube. Todos os direitos reservados.</p>
    </div>
</footer>

<script>
    const header = document.getElementById('header');

    if (header) {
        window.addEventListener('scroll', () => {
            header.classList.toggle('scrolled', window.scrollY > 50);
        });
    }

    function toggleMobileMenu() {
        const mobileMenu = document.getElementById('mobileMenu');

        if (!mobileMenu) return;

        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    }

    document.addEventListener('DOMContentLoaded', () => {
        const carousel = document.querySelector('[data-profile-carousel]');

        if (!carousel) return;

        const track = carousel.querySelector('.profile-carousel-track');
        const slides = Array.from(carousel.querySelectorAll('.profile-slide'));
        const btnPrev = carousel.querySelector('.profile-carousel-prev');
        const btnNext = carousel.querySelector('.profile-carousel-next');
        const dots = Array.from(document.querySelectorAll('.profile-carousel-dot'));

        if (!track || !slides.length) return;

        let atual = 0;
        let autoplay = null;

        function atualizarCarousel() {
            track.style.transform = `translateX(-${atual * 100}%)`;

            slides.forEach((slide, index) => {
                slide.classList.toggle('active', index === atual);
            });

            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === atual);
            });
        }

        function irPara(index) {
            if (index < 0) {
                atual = slides.length - 1;
            } else if (index >= slides.length) {
                atual = 0;
            } else {
                atual = index;
            }

            atualizarCarousel();
        }

        function proximo() {
            irPara(atual + 1);
        }

        function anterior() {
            irPara(atual - 1);
        }

        function iniciarAutoplay() {
            pararAutoplay();
            autoplay = setInterval(proximo, 6500);
        }

        function pararAutoplay() {
            if (autoplay) {
                clearInterval(autoplay);
                autoplay = null;
            }
        }

        if (btnPrev) {
            btnPrev.addEventListener('click', () => {
                anterior();
                iniciarAutoplay();
            });
        }

        if (btnNext) {
            btnNext.addEventListener('click', () => {
                proximo();
                iniciarAutoplay();
            });
        }

        dots.forEach((dot) => {
            dot.addEventListener('click', () => {
                irPara(Number(dot.dataset.profileIndex));
                iniciarAutoplay();
            });
        });

        let startX = 0;

        carousel.addEventListener('touchstart', (event) => {
            startX = event.touches[0].clientX;
        }, { passive: true });

        carousel.addEventListener('touchend', (event) => {
            const endX = event.changedTouches[0].clientX;
            const diff = startX - endX;

            if (Math.abs(diff) > 50) {
                if (diff > 0) {
                    proximo();
                } else {
                    anterior();
                }

                iniciarAutoplay();
            }
        });

        carousel.addEventListener('mouseenter', pararAutoplay);
        carousel.addEventListener('mouseleave', iniciarAutoplay);

        atualizarCarousel();
        iniciarAutoplay();
    });
</script>

</body>
</html>