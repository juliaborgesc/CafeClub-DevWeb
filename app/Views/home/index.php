<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasa Café Clube | Seu Café do Seu Jeito</title>
    <meta name="description" content="Clube de assinatura de café especial. Descubra seu perfil sensorial e receba cafés selecionados todo mês.">
    <link rel="icon" href="<?= base_url('images/brasinha.svg') ?>" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Condiment&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
<?php
$clienteLogado = session()->get('cliente_id');
$clienteNome = session()->get('cliente_nome');
$primeiroNome = $clienteNome ? explode(' ', trim($clienteNome))[0] : null;
?>

    <!-- Header -->
    <header id="header">
        <a href="<?= base_url('/') ?>" class="logo-link" aria-label="Voltar para a página inicial">
            <img src="<?= base_url('images/brasinha.svg') ?>" alt="Brasa Café Clube" class="logo">
        </a>

        <nav>
            <a href="#como-funciona">Como funciona</a>
            <a href="#perfis">Perfis</a>
            <a href="#planos">Planos</a>
            <a href="#faq">FAQ</a>
        </nav>

        <div class="site-auth-actions">
            <?php if ($clienteLogado): ?>
                <span class="user-pill">
                    <i class="hgi-stroke hgi-user-circle"></i>
                    Olá, <?= esc($primeiroNome) ?>
                </span>

                <a href="<?= base_url('/quiz') ?>" class="btn btn-primary">Fazer Quiz</a>

                <a href="<?= base_url('/logout') ?>" class="btn btn-ghost">Sair</a>
            <?php else: ?>
                <a href="<?= base_url('/login') ?>" class="login-link">Entrar</a>

                <a href="<?= base_url('/cadastro') ?>" class="btn btn-primary">Criar conta</a>
            <?php endif; ?>
        </div>

        <button class="mobile-menu-btn" onclick="toggleMobileMenu()" aria-label="Abrir menu">
            <i class="hgi-stroke hgi-menu-02"></i>
        </button>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <button class="mobile-menu-close" onclick="toggleMobileMenu()" aria-label="Fechar menu">
            <i class="hgi-stroke hgi-cancel-01"></i>
        </button>

        <?php if ($clienteLogado): ?>
            <div class="mobile-user-box">
                <span>Olá, <?= esc($primeiroNome) ?></span>
                <small>Bem-vindo de volta ao Brasa</small>
            </div>
        <?php endif; ?>

        <a href="#como-funciona" onclick="toggleMobileMenu()">Como funciona</a>
        <a href="#perfis" onclick="toggleMobileMenu()">Perfis</a>
        <a href="#planos" onclick="toggleMobileMenu()">Planos</a>
        <a href="#faq" onclick="toggleMobileMenu()">FAQ</a>

        <?php if ($clienteLogado): ?>
            <a href="<?= base_url('/quiz') ?>" class="btn btn-primary" onclick="toggleMobileMenu()">Fazer Quiz</a>
            <a href="<?= base_url('/logout') ?>" class="mobile-logout" onclick="toggleMobileMenu()">Sair da conta</a>
        <?php else: ?>
            <a href="<?= base_url('/login') ?>" onclick="toggleMobileMenu()">Entrar</a>
            <a href="<?= base_url('/cadastro') ?>" class="btn btn-primary" onclick="toggleMobileMenu()">Criar conta</a>
        <?php endif; ?>
    </div>

    <?php if (session()->getFlashdata('sucesso')): ?>
        <div class="home-flash home-flash-success">
            <i class="hgi-stroke hgi-checkmark-circle-02"></i>
            <?= esc(session()->getFlashdata('sucesso')) ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('erro')): ?>
        <div class="home-flash home-flash-error">
            <i class="hgi-stroke hgi-alert-circle"></i>
            <?= esc(session()->getFlashdata('erro')) ?>
        </div>
    <?php endif; ?>

    <!-- Hero Section -->
    <section class="hero">
        <video class="hero-video" autoplay muted loop playsinline>
            <source src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Cozy_Coffee_Mascot_Animation-omm2SY8eyctOIN74AkgCSHn4ss0vdD.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-blur"></div>

        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title font-display">
                    Seu Café

                    <span class="hero-highlight">Do Seu Jeito</span>

                    Todo Mês
                </h1>

                <p style="color: var(--text-light); font-size: 1.25rem; max-width: 500px; margin-bottom: 1rem; opacity: 0.9;">
                    Descubra seu perfil sensorial e receba cafés especiais selecionados especialmente para você.
                </p>
                <div class="hero-cta">
                    <?php if ($clienteLogado): ?>
                        <a href="<?= base_url('/quiz') ?>" class="btn btn-primary">Fazer meu quiz</a>
                        <a href="#planos" class="btn btn-outline" style="border-color: white; color: white;">Ver planos</a>
                    <?php else: ?>
                        <a href="<?= base_url('/cadastro') ?>" class="btn btn-primary">Criar conta e fazer quiz</a>
                        <a href="<?= base_url('/login') ?>" class="btn btn-outline" style="border-color: white; color: white;">Já tenho conta</a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="hero-icons">
                <a href="<?= $clienteLogado ? base_url('/quiz') : base_url('/cadastro') ?>" class="hero-icon-item">
                    <i class="hgi-stroke hgi-quiz-02"></i>
                    <span>Faça o Quiz</span>
                </a>
                <a href="#planos" class="hero-icon-item">
                    <i class="hgi-stroke hgi-shopping-bag-03"></i>
                    <span>Escolha o Plano</span>
                </a>
                <a href="#perfis" class="hero-icon-item">
                    <i class="hgi-stroke hgi-truck-delivery"></i>
                    <span>Receba o Café Ideal</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Marquee Banner -->
    <div class="marquee">
        <div class="marquee-content">
            <span>CAFÉ ESPECIAL</span>
            <img src="<?= base_url('images/caneca.svg') ?>" alt="" class="marquee-separator">
            <span>TODO MÊS</span>
            <img src="<?= base_url('images/caneca.svg') ?>" alt="" class="marquee-separator">
            <span>SEM COMPLICAÇÃO</span>
            <img src="<?= base_url('images/caneca.svg') ?>" alt="" class="marquee-separator">
            <span>QUIZ DE PALADAR</span>
            <img src="<?= base_url('images/caneca.svg') ?>" alt="" class="marquee-separator">
            <span>PERFIL SENSORIAL</span>
            <img src="<?= base_url('images/caneca.svg') ?>" alt="" class="marquee-separator">
            <span>CANCELE QUANDO QUISER</span>
            <img src="<?= base_url('images/caneca.svg') ?>" alt="" class="marquee-separator">
            <span>CAFÉ ESPECIAL</span>
            <img src="<?= base_url('images/caneca.svg') ?>" alt="" class="marquee-separator">
            <span>TODO MÊS</span>
            <img src="<?= base_url('images/caneca.svg') ?>" alt="" class="marquee-separator">
            <span>SEM COMPLICAÇÃO</span>
            <img src="<?= base_url('images/caneca.svg') ?>" alt="" class="marquee-separator">
            <span>QUIZ DE PALADAR</span>
            <img src="<?= base_url('images/caneca.svg') ?>" alt="" class="marquee-separator">
            <span>PERFIL SENSORIAL</span>
            <img src="<?= base_url('images/caneca.svg') ?>" alt="" class="marquee-separator">
            <span>CANCELE QUANDO QUISER</span>
            <img src="<?= base_url('images/caneca.svg') ?>" alt="" class="marquee-separator">
        </div>
    </div>

    <!-- Social Proof Section -->
    <section class="social-proof">
        <div class="container">
            <div class="social-proof-number font-display">+10.000</div>
            <div class="social-proof-label">assinantes satisfeitos em todo Brasil</div>

            <div class="trust-indicators">
                <div class="trust-item">
                    <i class="hgi-stroke hgi-checkmark-circle-02"></i>
                    <span>Entrega garantida</span>
                </div>
                <div class="trust-item">
                    <i class="hgi-stroke hgi-checkmark-circle-02"></i>
                    <span>Cafés selecionados</span>
                </div>
                <div class="trust-item">
                    <i class="hgi-stroke hgi-checkmark-circle-02"></i>
                    <span>Cancelamento fácil</span>
                </div>
            </div>

            <div class="testimonial-cards">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="hgi-stroke hgi-star"></i>
                        <i class="hgi-stroke hgi-star"></i>
                        <i class="hgi-stroke hgi-star"></i>
                        <i class="hgi-stroke hgi-star"></i>
                        <i class="hgi-stroke hgi-star"></i>
                    </div>
                    <p class="testimonial-text">"Nunca pensei que escolher café poderia ser tão fácil. O quiz acertou em cheio meu gosto!"</p>
                    <p class="testimonial-author">Marina S.</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="hgi-stroke hgi-star"></i>
                        <i class="hgi-stroke hgi-star"></i>
                        <i class="hgi-stroke hgi-star"></i>
                        <i class="hgi-stroke hgi-star"></i>
                        <i class="hgi-stroke hgi-star"></i>
                    </div>
                    <p class="testimonial-text">"Todo mês uma surpresa deliciosa. Já descobri produtores incríveis que não conhecia."</p>
                    <p class="testimonial-author">Ricardo M.</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="hgi-stroke hgi-star"></i>
                        <i class="hgi-stroke hgi-star"></i>
                        <i class="hgi-stroke hgi-star"></i>
                        <i class="hgi-stroke hgi-star"></i>
                        <i class="hgi-stroke hgi-star"></i>
                    </div>
                    <p class="testimonial-text">"A qualidade dos cafés é incomparável. Vale cada centavo da assinatura."</p>
                    <p class="testimonial-author">Juliana C.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits">
        <div class="container">
            <h2 class="section-title font-display">Por Que Assinar?</h2>
            <p class="section-subtitle">Benefícios exclusivos para membros do clube</p>

            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="hgi-stroke hgi-user-settings-01"></i>
                    </div>
                    <h3 class="benefit-title">Personalização Real</h3>
                    <p class="benefit-desc">Cafés selecionados de acordo com seu perfil sensorial único, descoberto através do nosso quiz exclusivo.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="hgi-stroke hgi-award-03"></i>
                    </div>
                    <h3 class="benefit-title">Cafés Selecionados</h3>
                    <p class="benefit-desc">Trabalhamos apenas com produtores de café especial, garantindo qualidade excepcional em cada grão.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="hgi-stroke hgi-discover-circle"></i>
                    </div>
                    <h3 class="benefit-title">Descoberta Mensal</h3>
                    <p class="benefit-desc">Explore novas origens, métodos de processamento e perfis de sabor a cada entrega.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="hgi-stroke hgi-cancel-circle"></i>
                    </div>
                    <h3 class="benefit-title">Sem Fidelidade</h3>
                    <p class="benefit-desc">Cancele quando quiser, sem taxas ou burocracia. Sua liberdade é nossa prioridade.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works" id="como-funciona">
        <div class="container">
            <h2 class="section-title font-display">Como Funciona</h2>
            <p class="section-subtitle">Três passos simples para receber café do seu jeito</p>

            <div class="steps">
                <div class="step">
                    <div class="step-number">
                        <i class="step-icon hgi-stroke hgi-quiz-02"></i>
                    </div>
                    <h3 class="step-title">Faça o Quiz</h3>
                    <p class="step-desc">Responda algumas perguntas sobre suas preferências e hábitos de consumo de café.</p>
                </div>
                <div class="step">
                    <div class="step-number">
                        <i class="step-icon hgi-stroke hgi-chart-radar"></i>
                    </div>
                    <h3 class="step-title">Descubra Seu Perfil</h3>
                    <p class="step-desc">Nosso algoritmo identifica seu perfil sensorial e recomenda os cafés ideais para você.</p>
                </div>
                <div class="step">
                    <div class="step-number">
                        <i class="step-icon hgi-stroke hgi-package"></i>
                    </div>
                    <h3 class="step-title">Receba em Casa</h3>
                    <p class="step-desc">Todo mês, cafés frescos e selecionados chegam na sua porta, prontos para serem apreciados.</p>
                </div>
            </div>
        </div>
    </section>

  <!-- Perfis Section -->
<section class="profiles-sensorial" id="perfis">
    <div class="profiles-bg"></div>
    <div class="profiles-overlay"></div>
    <div class="profiles-blur"></div>

    <div class="profiles-content">
        <div class="profiles-text-box">
            <span class="profiles-label">Perfis sensoriais</span>

            <h2 class="profiles-title font-display">
                Descubra Seu<br>
                Perfil Sensorial
            </h2>

            <p class="profiles-desc-hero">
                Responda ao quiz e descubra qual tipo de café combina com seu paladar, sua rotina e seu jeito de viver café.
            </p>

            <div class="profiles-badges">
                <span>Iniciante</span>
                <span>Equilibrado</span>
                <span>Frutado</span>
                <span>Intenso</span>
                <span>Explorador</span>
            </div>

            <div class="profiles-actions">
                <a href="<?= $clienteLogado ? base_url('/quiz') : base_url('/cadastro') ?>" class="btn btn-primary profiles-btn">
                    <?= $clienteLogado ? 'Refazer o Quiz' : 'Faça o Quiz' ?>
                </a>

                <a href="<?= base_url('/perfis') ?>" class="profiles-more-link">
                    Saiba mais sobre os perfis
                </a>
            </div>
        </div>
    </div>
</section>

    <!-- Plans Section -->
    <section class="plans" id="planos">
        <div class="container">
            <h2 class="section-title font-display">Escolha Seu Plano</h2>
            <p class="section-subtitle">Opções flexíveis para todo tipo de amante de café</p>

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
                            <a href="<?= $clienteLogado ? base_url('/quiz') : base_url('/cadastro') ?>" class="btn btn-outline plan-cta">Assinar agora</a>
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
                            <a href="<?= $clienteLogado ? base_url('/quiz') : base_url('/cadastro') ?>" class="btn btn-primary plan-cta">Assinar agora</a>
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
                            <a href="<?= $clienteLogado ? base_url('/quiz') : base_url('/cadastro') ?>" class="btn btn-secondary plan-cta">Assinar agora</a>
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

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title font-display">O Que Dizem Nossos Assinantes</h2>
            <p class="section-subtitle">Histórias reais de quem já faz parte do clube</p>

            <div class="testimonials-grid">
                <div class="testimonial-large">
                    <p class="testimonial-large-text">"Sou assinante há mais de um ano e posso dizer que minha relação com café mudou completamente. Antes tomava qualquer um, agora entendo as nuances e aprecio cada xícara como uma experiência única. O Brasa Café Clube abriu um mundo novo para mim."</p>
                    <div class="testimonial-large-author">
                        <div class="testimonial-avatar">PF</div>
                        <div class="testimonial-info">
                            <strong>Pedro Ferreira</strong>
                            <span>Assinante Premium</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-large">
                    <p class="testimonial-large-text">"O quiz de paladar é genial! Descobri que meu perfil é frutado e desde então tenho recebido cafés incríveis que combinam perfeitamente comigo. A curadoria é impecável e sempre me surpreende."</p>
                    <div class="testimonial-large-author">
                        <div class="testimonial-avatar" style="background: var(--secondary-green);">CL</div>
                        <div class="testimonial-info">
                            <strong>Camila Lima</strong>
                            <span>Assinante Gold</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq" id="faq">
        <div class="container">
            <h2 class="section-title font-display">Perguntas Frequentes</h2>
            <p class="section-subtitle">Tire suas dúvidas sobre o clube</p>

            <div class="faq-list">
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        Posso cancelar minha assinatura a qualquer momento?
                        <i class="hgi-stroke hgi-add-circle"></i>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Sim! Você pode cancelar sua assinatura quando quiser, sem taxas ou multas. Basta acessar sua conta e solicitar o cancelamento. Sua assinatura será encerrada no próximo ciclo de cobrança.
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        Como funciona o envio dos cafés?
                        <i class="hgi-stroke hgi-add-circle"></i>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Enviamos seus cafés entre os dias 1 e 5 de cada mês, com frete grátis para todo o Brasil. Você recebe um código de rastreamento por e-mail assim que o pedido é despachado. O prazo de entrega varia de 3 a 10 dias úteis, dependendo da sua região.
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        Posso mudar meu perfil sensorial depois?
                        <i class="hgi-stroke hgi-add-circle"></i>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Claro! Seu paladar pode evoluir com o tempo, e estamos aqui para acompanhar essa jornada. Você pode refazer o quiz de paladar a qualquer momento na sua conta e seu perfil será atualizado automaticamente para as próximas entregas.
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        Os cafés são torrados na hora?
                        <i class="hgi-stroke hgi-add-circle"></i>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Trabalhamos com microtorrefadores parceiros que torram os grãos poucos dias antes do envio, garantindo frescor máximo. Cada pacote vem com a data de torra para você acompanhar.
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        Posso escolher café moído ou em grãos?
                        <i class="hgi-stroke hgi-add-circle"></i>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Sim! Ao configurar sua assinatura, você pode escolher entre café em grãos ou moído. Se preferir moído, também pode selecionar a granulometria ideal para o seu método de preparo preferido (espresso, filtro, prensa francesa, etc.).
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="final-cta">
        <div class="container">
            <h2 class="section-title font-display">Descubra Seu Café Ideal</h2>
            <p class="section-subtitle">Comece sua jornada sensorial hoje mesmo e transforme sua relação com o café.</p>
            <?php if ($clienteLogado): ?>
                <a href="<?= base_url('/quiz') ?>" class="btn btn-primary" style="font-size: 1.1rem; padding: 1.25rem 3rem;">Fazer meu quiz</a>
            <?php else: ?>
                <a href="<?= base_url('/cadastro') ?>" class="btn btn-primary" style="font-size: 1.1rem; padding: 1.25rem 3rem;">Criar conta e começar</a>
            <?php endif; ?>
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
                    <li><a href="#como-funciona">Como funciona</a></li>
                    <li><a href="#perfis">Perfis sensoriais</a></li>
                    <li><a href="#planos">Planos</a></li>
                    <li><a href="#faq">FAQ</a></li>
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
                        if (i === center)        card.dataset.pos = 'center';
                        else if (i === leftIdx)  card.dataset.pos = 'left';
                        else if (i === rightIdx) card.dataset.pos = 'right';
                        else                     delete card.dataset.pos;
                    });

                    dots.forEach((dot, i) => {
                        dot.classList.toggle('active', i === center);
                        dot.setAttribute('aria-current', i === center ? 'true' : 'false');
                    });
                }

                if (btnPrev) btnPrev.addEventListener('click', () => goTo(center - 1));
                if (btnNext) btnNext.addEventListener('click', () => goTo(center + 1));

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

        // FAQ accordion
        function toggleFaq(button) {
            const faqItem = button.parentElement;
            const isActive = faqItem.classList.contains('active');
            document.querySelectorAll('.faq-item').forEach(item => item.classList.remove('active'));
            if (!isActive) faqItem.classList.add('active');
        }

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetPosition = target.getBoundingClientRect().top + window.pageYOffset - 80;
                    window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
                }
            });
        });

        // Scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

        document.querySelectorAll('.benefit-card, .profile-card, .testimonial-card, .testimonial-large, .step').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>