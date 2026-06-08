<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasa Café Clube | Seu Café do Seu Jeito</title>
    <meta name="description" content="Clube de assinatura de café especial. Descubra seu perfil sensorial e receba cafés selecionados todo mês.">
    <!-- Favicon padrão para navegadores -->
    <link rel="icon" href="<?= base_url('images/logo.svg') ?>" type="image/svg+xml">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Condiment&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Hugeicons -->
    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css">
    
    <!-- External CSS -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <!-- Header -->
    <header id="header">
        <img src="<?= base_url('images/brasinha.svg') ?>" alt="Brasa Cafe Clube" class="logo">
        <nav>
            <a href="#como-funciona">Como funciona</a>
            <a href="#perfis">Perfis</a>
            <a href="#planos">Planos</a>
            <a href="#faq">FAQ</a>
        </nav>
        <a href="#planos" class="btn btn-primary">Assinar Agora</a>
        <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
            <i class="hgi-stroke hgi-menu-02"></i>
        </button>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <button class="mobile-menu-close" onclick="toggleMobileMenu()">
            <i class="hgi-stroke hgi-cancel-01"></i>
        </button>
        <a href="#como-funciona" onclick="toggleMobileMenu()">Como funciona</a>
        <a href="#perfis" onclick="toggleMobileMenu()">Perfis</a>
        <a href="#planos" onclick="toggleMobileMenu()">Planos</a>
        <a href="#faq" onclick="toggleMobileMenu()">FAQ</a>
        <a href="#planos" class="btn btn-primary" onclick="toggleMobileMenu()">Assinar Agora</a>
    </div>

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
                    <a href="#planos" class="btn btn-primary">Assinar Agora</a>
                    <a href="#como-funciona" class="btn btn-outline" style="border-color: white; color: white;">Como funciona</a>
                </div>
            </div>
            
            <div class="hero-icons">
                <a href="#como-funciona" class="hero-icon-item">
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

    <!-- Sensory Profiles Section -->
    <section id="perfis">
        <div class="container">
            <h2 class="section-title font-display">Perfis Sensoriais</h2>
            <p class="section-subtitle">Descubra qual perfil combina mais com você</p>
            
            <div class="profiles-grid">
                <div class="profile-card">
                    <div class="profile-header">
                        <img src="<?= base_url('images/iniciante.svg') ?>" alt="Perfil Iniciante" class="profile-icon-img">
                        <h3 class="profile-name font-display">Iniciante</h3>
                    </div>
                    <div class="profile-body">
                        <p class="profile-desc">Para quem está começando a explorar o mundo dos cafés especiais. Sabores suaves, equilibrados e acessíveis.</p>
                        <div class="profile-notes">
                            <span class="profile-note">Chocolate</span>
                            <span class="profile-note">Caramelo</span>
                            <span class="profile-note">Nozes</span>
                            <span class="profile-note">Suave</span>
                        </div>
                    </div>
                </div>
                <div class="profile-card">
                    <div class="profile-header">
                        <img src="<?= base_url('images/frutado.svg') ?>" alt="Perfil Frutado" class="profile-icon-img">
                        <h3 class="profile-name font-display">Frutado</h3>
                    </div>
                    <div class="profile-body">
                        <p class="profile-desc">Para paladares curiosos que apreciam acidez vibrante e notas frutadas complexas. Uma explosão de sabores.</p>
                        <div class="profile-notes">
                            <span class="profile-note">Frutas vermelhas</span>
                            <span class="profile-note">Cítrico</span>
                            <span class="profile-note">Floral</span>
                            <span class="profile-note">Vibrante</span>
                        </div>
                    </div>
                </div>
                <div class="profile-card">
                    <div class="profile-header">
                        <img src="<?= base_url('images/intenso.svg') ?>" alt="Perfil Intenso" class="profile-icon-img">
                        <h3 class="profile-name font-display">Intenso</h3>
                    </div>
                    <div class="profile-body">
                        <p class="profile-desc">Para quem ama café encorpado e marcante. Sabores robustos que deixam impressão duradoura.</p>
                        <div class="profile-notes">
                            <span class="profile-note">Cacau</span>
                            <span class="profile-note">Especiarias</span>
                            <span class="profile-note">Tostado</span>
                            <span class="profile-note">Encorpado</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section class="plans" id="planos">
        <div class="container">
            <h2 class="section-title font-display">Escolha Seu Plano</h2>
            <p class="section-subtitle">Opções flexíveis para todo tipo de amante de café</p>
            
            <div class="plans-grid">
                <div class="plan-card">
                    <h3 class="plan-name">Básico</h3>
                    <div class="plan-price">R$49</div>
                    <div class="plan-period">por mês</div>
                    <ul class="plan-features">
                        <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> 1 pacote de 250g</li>
                        <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Frete grátis</li>
                        <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Perfil personalizado</li>
                        <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Cancele quando quiser</li>
                    </ul>
                    <a href="#" class="btn btn-outline">Assinar Agora</a>
                </div>
                <div class="plan-card featured">
                    <span class="plan-badge">Mais Popular</span>
                    <h3 class="plan-name">Gold</h3>
                    <div class="plan-price">R$89</div>
                    <div class="plan-period">por mês</div>
                    <ul class="plan-features">
                        <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> 2 pacotes de 250g</li>
                        <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Frete grátis</li>
                        <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Perfil personalizado</li>
                        <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Acesso a cafés exclusivos</li>
                        <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Cancele quando quiser</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Assinar Agora</a>
                </div>
                <div class="plan-card">
                    <h3 class="plan-name">Premium</h3>
                    <div class="plan-price">R$129</div>
                    <div class="plan-period">por mês</div>
                    <ul class="plan-features">
                        <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> 3 pacotes de 250g</li>
                        <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Frete grátis</li>
                        <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Perfil personalizado</li>
                        <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Brinde exclusivo mensal</li>
                        <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Acesso VIP a lançamentos</li>
                        <li><i class="hgi-stroke hgi-checkmark-circle-02"></i> Cancele quando quiser</li>
                    </ul>
                    <a href="#" class="btn btn-secondary">Assinar Agora</a>
                </div>
            </div>
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
            <a href="#planos" class="btn btn-primary" style="font-size: 1.1rem; padding: 1.25rem 3rem;">Assinar Agora</a>
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
        // Header scroll effect
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('active');
            document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
        }

        // FAQ accordion
        function toggleFaq(button) {
            const faqItem = button.parentElement;
            const isActive = faqItem.classList.contains('active');
            
            // Close all other FAQ items
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });
            
            // Toggle current item
            if (!isActive) {
                faqItem.classList.add('active');
            }
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.benefit-card, .profile-card, .plan-card, .testimonial-card, .testimonial-large, .step').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>
