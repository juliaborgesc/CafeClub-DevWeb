<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planos — Brasa Café Clube</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<!-- Header -->
<header id="header">
    <img src="<?= base_url('images/brasinha.svg') ?>" alt="Brasa Café Clube" class="logo">
    <nav>
        <a href="<?= base_url('/') ?>#como-funciona">Como funciona</a>
        <a href="<?= base_url('/') ?>#perfis">Perfis</a>
        <a href="<?= base_url('/planos') ?>">Planos</a>
        <a href="<?= base_url('/') ?>#faq">FAQ</a>
    </nav>
    <a href="<?= base_url('/quiz') ?>" class="btn btn-primary">Fazer o Quiz</a>
    <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
        <i class="hgi-stroke hgi-menu-02"></i>
    </button>
</header>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
    <button class="mobile-menu-close" onclick="toggleMobileMenu()">
        <i class="hgi-stroke hgi-cancel-01"></i>
    </button>
    <a href="<?= base_url('/') ?>#como-funciona" onclick="toggleMobileMenu()">Como funciona</a>
    <a href="<?= base_url('/') ?>#perfis" onclick="toggleMobileMenu()">Perfis</a>
    <a href="<?= base_url('/planos') ?>" onclick="toggleMobileMenu()">Planos</a>
    <a href="<?= base_url('/') ?>#faq" onclick="toggleMobileMenu()">FAQ</a>
    <a href="<?= base_url('/quiz') ?>" class="btn btn-primary" onclick="toggleMobileMenu()">Fazer o Quiz</a>
</div>

<!-- Page Hero -->
<section class="planos-hero">
    <div class="container" style="text-align:center; padding-top: 8rem; padding-bottom: 2rem;">
        <p class="planos-hero-label">Assinatura mensal</p>
        <h1 class="section-title font-display">Escolha seu plano</h1>
        <p class="section-subtitle" style="margin-bottom: 0;">
            Cancele quando quiser. Sem fidelidade. Frete grátis em todos os planos.
        </p>
    </div>
</section>

<!-- Plans -->
<section class="plans" style="padding-top: 2rem;">
    <div class="container">
        <div class="planos-carousel-shell" data-planos-carousel>

            <div class="planos-carousel">

                <button class="planos-carousel-btn planos-carousel-prev" type="button" aria-label="Plano anterior">
                    <span aria-hidden="true">‹</span>
                </button>

                <div class="planos-carousel-track">

                    <!-- Básico -->
                    <div class="plan-card planos-carousel-item" data-idx="0">
                        <div style="height: 22px;"></div>
                        <h3 class="plan-name">Básico</h3>
                        <p class="plan-tagline">Pra quem quer começar sem drama.</p>
                        <div class="plan-price">R$49</div>
                        <div class="plan-period">por mês</div>
                        <ul class="plan-features">
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> 1 pacote de 250g por mês</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Curadoria pelo seu perfil sensorial</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Carta da torrefação</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Frete grátis</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Cancele quando quiser</li>
                        </ul>
                        <a href="<?= base_url('/assinar/basico') ?>" class="btn btn-outline plan-cta">
                            Assinar agora
                        </a>
                    </div>

                    <!-- Gold -->
                    <div class="plan-card planos-carousel-item" data-idx="1">
                        <span class="plan-badge">Mais Popular</span>
                        <h3 class="plan-name">Gold</h3>
                        <p class="plan-tagline">Dobrou a dose, dobrou a felicidade.</p>
                        <div class="plan-price">R$89</div>
                        <div class="plan-period">por mês</div>
                        <ul class="plan-features">
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> 2 pacotes de 250g por mês</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Curadoria pelo seu perfil sensorial</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Nota de sabor personalizada</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Carta da torrefação</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Acesso a cafés exclusivos</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Frete grátis</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Cancele quando quiser</li>
                        </ul>
                        <a href="<?= base_url('/assinar/gold') ?>" class="btn btn-primary plan-cta">
                            Assinar agora
                        </a>
                    </div>

                    <!-- Premium -->
                    <div class="plan-card planos-carousel-item" data-idx="2">
                        <div style="height: 22px;"></div>
                        <h3 class="plan-name">Premium</h3>
                        <p class="plan-tagline">Você merecia desde sempre.</p>
                        <div class="plan-price">R$129</div>
                        <div class="plan-period">por mês</div>
                        <ul class="plan-features">
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> 3 pacotes de 250g por mês</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Curadoria pelo seu perfil sensorial</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Nota de sabor personalizada</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Brinde mensal surpresa</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Acesso VIP a lançamentos</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Carta da torrefação</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Frete grátis</li>
                            <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Cancele quando quiser</li>
                        </ul>
                        <a href="<?= base_url('/assinar/premium') ?>" class="btn btn-secondary plan-cta">
                            Assinar agora
                        </a>
                    </div>

                </div><!-- /.planos-carousel-track -->

                <button class="planos-carousel-btn planos-carousel-next" type="button" aria-label="Próximo plano">
                    <span aria-hidden="true">›</span>
                </button>

            </div><!-- /.planos-carousel -->

            <div class="planos-carousel-dots" aria-label="Selecionar plano"></div>

        </div><!-- /.planos-carousel-shell -->
    </div>
</section>

<!-- Comparativo -->
<section class="compare-section">
    <div class="container">
        <h2 class="section-title font-display section-title-spaced">Compare os planos</h2>
        <div class="planos-table-wrap">
            <table class="planos-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Básico</th>
                        <th class="planos-table-featured">Gold</th>
                        <th>Premium</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pacotes por mês</td>
                        <td>1 (250g)</td>
                        <td class="planos-table-featured">2 (500g)</td>
                        <td>3 (750g)</td>
                    </tr>
                    <tr>
                        <td>Curadoria personalizada</td>
                        <td><i class="hgi-stroke hgi-checkmark-circle-02 check-yes"></i></td>
                        <td class="planos-table-featured"><i class="hgi-stroke hgi-checkmark-circle-02 check-yes"></i></td>
                        <td><i class="hgi-stroke hgi-checkmark-circle-02 check-yes"></i></td>
                    </tr>
                    <tr>
                        <td>Carta da torrefação</td>
                        <td><i class="hgi-stroke hgi-checkmark-circle-02 check-yes"></i></td>
                        <td class="planos-table-featured"><i class="hgi-stroke hgi-checkmark-circle-02 check-yes"></i></td>
                        <td><i class="hgi-stroke hgi-checkmark-circle-02 check-yes"></i></td>
                    </tr>
                    <tr>
                        <td>Nota de sabor personalizada</td>
                        <td><i class="hgi-stroke hgi-cancel-01 check-no"></i></td>
                        <td class="planos-table-featured"><i class="hgi-stroke hgi-checkmark-circle-02 check-yes"></i></td>
                        <td><i class="hgi-stroke hgi-checkmark-circle-02 check-yes"></i></td>
                    </tr>
                    <tr>
                        <td>Acesso a cafés exclusivos</td>
                        <td><i class="hgi-stroke hgi-cancel-01 check-no"></i></td>
                        <td class="planos-table-featured"><i class="hgi-stroke hgi-checkmark-circle-02 check-yes"></i></td>
                        <td><i class="hgi-stroke hgi-checkmark-circle-02 check-yes"></i></td>
                    </tr>
                    <tr>
                        <td>Brinde mensal surpresa</td>
                        <td><i class="hgi-stroke hgi-cancel-01 check-no"></i></td>
                        <td class="planos-table-featured"><i class="hgi-stroke hgi-cancel-01 check-no"></i></td>
                        <td><i class="hgi-stroke hgi-checkmark-circle-02 check-yes"></i></td>
                    </tr>
                    <tr>
                        <td>Acesso VIP a lançamentos</td>
                        <td><i class="hgi-stroke hgi-cancel-01 check-no"></i></td>
                        <td class="planos-table-featured"><i class="hgi-stroke hgi-cancel-01 check-no"></i></td>
                        <td><i class="hgi-stroke hgi-checkmark-circle-02 check-yes"></i></td>
                    </tr>
                    <tr>
                        <td>Frete grátis</td>
                        <td><i class="hgi-stroke hgi-checkmark-circle-02 check-yes"></i></td>
                        <td class="planos-table-featured"><i class="hgi-stroke hgi-checkmark-circle-02 check-yes"></i></td>
                        <td><i class="hgi-stroke hgi-checkmark-circle-02 check-yes"></i></td>
                    </tr>
                    <tr class="planos-table-price-row">
                        <td></td>
                        <td><strong>R$49/mês</strong></td>
                        <td class="planos-table-featured"><strong>R$89/mês</strong></td>
                        <td><strong>R$129/mês</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- CTA não sabe qual escolher -->
<section class="final-cta final-cta-planos">
    <div class="container">
        <h2 class="section-title font-display">Não sabe qual escolher?</h2>
        <p class="section-subtitle">Faça o quiz de paladar e descubra seu perfil sensorial antes de assinar.</p>
        <a href="<?= base_url('/quiz') ?>" class="btn btn-primary btn-large-quiz">
            Fazer o quiz grátis
        </a>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="footer-content">
        <div class="footer-brand">
            <img src="<?= base_url('images/brasinha.svg') ?>" alt="Brasa Café Clube">
            <p>Café especial entregue na sua porta todo mês, personalizado para o seu paladar.</p>
        </div>
        <div class="footer-links">
            <h4>Links Rápidos</h4>
            <ul>
                <li><a href="<?= base_url('/') ?>#como-funciona">Como funciona</a></li>
                <li><a href="<?= base_url('/') ?>#perfis">Perfis sensoriais</a></li>
                <li><a href="<?= base_url('/planos') ?>">Planos</a></li>
                <li><a href="<?= base_url('/') ?>#faq">FAQ</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <h4>Institucional</h4>
            <ul>
                <li><a href="#">Sobre nós</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Produtores parceiros</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <h4>Siga-nos</h4>
            <div class="footer-social">
                <a href="#" aria-label="Instagram"><i class="hgi-stroke hgi-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="hgi-stroke hgi-facebook-02"></i></a>
                <a href="#" aria-label="YouTube"><i class="hgi-stroke hgi-youtube"></i></a>
                <a href="#" aria-label="TikTok"><i class="hgi-stroke hgi-tiktok"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>2026 Brasa Café Clube. Todos os direitos reservados.</p>
    </div>
</footer>


<script>
    // Header scroll
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        if (header) header.classList.toggle('scrolled', window.scrollY > 50);
    });

    // Mobile menu
    function toggleMobileMenu() {
        const mobileMenu = document.getElementById('mobileMenu');
        if (!mobileMenu) return;
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    }

    // Carrossel infinito circular
    function iniciarCarrosseisPlanos() {
        document.querySelectorAll('[data-planos-carousel]').forEach(carousel => {
            const track    = carousel.querySelector('.planos-carousel-track');
            const items    = Array.from(carousel.querySelectorAll('.planos-carousel-item'));
            const btnPrev  = carousel.querySelector('.planos-carousel-prev');
            const btnNext  = carousel.querySelector('.planos-carousel-next');
            const dotsWrap = carousel.querySelector('.planos-carousel-dots');
            const viewport = carousel.querySelector('.planos-carousel');

            if (!track || !items.length) return;

            const n = items.length;
            let center = 1; // Gold começa no centro

            // Cria dots
            if (dotsWrap) {
                dotsWrap.innerHTML = '';
                items.forEach((_, i) => {
                    const dot = document.createElement('button');
                    dot.type = 'button';
                    dot.className = 'planos-dot';
                    dot.setAttribute('aria-label', `Ver plano ${i + 1}`);
                    dot.addEventListener('click', () => goTo(i));
                    dotsWrap.appendChild(dot);
                });
            }

            const dots = dotsWrap ? Array.from(dotsWrap.querySelectorAll('.planos-dot')) : [];

            function mod(x, m) {
                return ((x % m) + m) % m;
            }

            function goTo(idx) {
                center = mod(idx, n);
                render();
            }

            function render() {
                const leftIdx  = mod(center - 1, n);
                const rightIdx = mod(center + 1, n);

                items.forEach((card, i) => {
                    if (i === center)          card.dataset.pos = 'center';
                    else if (i === leftIdx)    card.dataset.pos = 'left';
                    else if (i === rightIdx)   card.dataset.pos = 'right';
                    else                       delete card.dataset.pos;
                });

                dots.forEach((dot, i) => {
                    dot.classList.toggle('active', i === center);
                    dot.setAttribute('aria-current', i === center ? 'true' : 'false');
                });
            }

            // Navegação
            if (btnPrev) btnPrev.addEventListener('click', () => goTo(center - 1));
            if (btnNext) btnNext.addEventListener('click', () => goTo(center + 1));

            // Clique nos cards laterais centraliza
            items.forEach((card, i) => {
                card.addEventListener('click', () => {
                    if (card.dataset.pos !== 'center') goTo(i);
                });
            });

            // Swipe touch
            let startX = 0;
            if (viewport) {
                viewport.addEventListener('touchstart', e => {
                    startX = e.touches[0].clientX;
                }, { passive: true });

                viewport.addEventListener('touchend', e => {
                    const diff = startX - e.changedTouches[0].clientX;
                    if (Math.abs(diff) > 50) goTo(center + (diff > 0 ? 1 : -1));
                });
            }

            render();
        });
    }

    document.addEventListener('DOMContentLoaded', iniciarCarrosseisPlanos);
</script>

</body>
</html>