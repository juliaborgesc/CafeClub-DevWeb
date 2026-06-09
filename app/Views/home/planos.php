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
        <div class="plans-grid">

            <!-- Básico -->
            <div class="plan-card">
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
                <a href="<?= base_url('/assinar/basico') ?>" class="btn btn-outline" style="width:100%; margin-top: auto;">
                    Assinar agora
                </a>
            </div>

            <!-- Gold -->
            <div class="plan-card featured">
                <span class="plan-badge">Mais Popular</span>
                <h3 class="plan-name">Gold</h3>
                <p class="plan-tagline" style="opacity:.7;">Dobrou a dose, dobrou a felicidade.</p>
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
                <a href="<?= base_url('/assinar/gold') ?>" class="btn btn-primary" style="width:100%; margin-top: auto;">
                    Assinar agora
                </a>
            </div>

            <!-- Premium -->
            <div class="plan-card">
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
                <a href="<?= base_url('/assinar/premium') ?>" class="btn btn-secondary" style="width:100%; margin-top: auto;">
                    Assinar agora
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Comparativo -->
<section style="background: white; padding: 4rem 2rem;">
    <div class="container">
        <h2 class="section-title font-display" style="margin-bottom: 2.5rem;">Compare os planos</h2>
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
<section class="final-cta" style="margin: 0 1rem 4rem;">
    <div class="container">
        <h2 class="section-title font-display">Não sabe qual escolher?</h2>
        <p class="section-subtitle">Faça o quiz de paladar e descubra seu perfil sensorial antes de assinar.</p>
        <a href="<?= base_url('/quiz') ?>" class="btn btn-primary" style="font-size: 1.1rem; padding: 1.25rem 3rem;">
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

<style>
    .planos-hero-label {
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.16em;
        color: rgba(79, 51, 40, 0.4);
        margin-bottom: 12px;
    }

    .plan-tagline {
        font-size: 0.9rem;
        opacity: 0.6;
        margin-bottom: 1.5rem;
        margin-top: -0.5rem;
    }

    .plan-card {
        display: flex;
        flex-direction: column;
    }

    .plan-features {
        flex: 1;
    }

    /* TABELA COMPARATIVA */
    .planos-table-wrap {
        overflow-x: auto;
    }

    .planos-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.95rem;
    }

    .planos-table thead th {
        padding: 1rem 1.5rem;
        font-family: 'Anton', sans-serif;
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: var(--primary-dark);
        text-align: center;
        border-bottom: 2px solid rgba(79, 51, 40, 0.1);
    }

    .planos-table thead th:first-child {
        text-align: left;
    }

    .planos-table tbody td {
        padding: 1rem 1.5rem;
        border-bottom: 1px solid rgba(79, 51, 40, 0.07);
        text-align: center;
        color: var(--primary-dark);
    }

    .planos-table tbody td:first-child {
        text-align: left;
        font-weight: 500;
    }

    .planos-table tbody tr:last-child td {
        border-bottom: none;
    }

    .planos-table-featured {
        background: rgba(79, 51, 40, 0.04);
    }

    .planos-table-price-row td {
        padding-top: 1.5rem;
        font-size: 1.1rem;
    }

    .check-yes {
        color: var(--secondary-green);
        font-size: 1.3rem;
    }

    .check-no {
        color: rgba(79, 51, 40, 0.2);
        font-size: 1.3rem;
    }

    @media (max-width: 768px) {
        .planos-table thead th,
        .planos-table tbody td {
            padding: 0.75rem 1rem;
            font-size: 0.85rem;
        }
    }
</style>

<script>
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 50);
    });

    function toggleMobileMenu() {
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    }

    document.querySelectorAll('.plan-card, .planos-table').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.plan-card, .planos-table').forEach(el => observer.observe(el));
</script>

</body>
</html>