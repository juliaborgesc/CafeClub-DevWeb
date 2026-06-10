<?php

namespace App\Controllers;

class QuizController extends BaseController
{
    private array $perguntas = [
        1 => [
            'texto' => 'Você entra em um restaurante novo. O que pede?',
            'opcoes' => [
                'A' => ['texto' => 'O prato mais famoso da casa', 'pontos' => ['iniciante' => 2, 'equilibrado' => 1]],
                'B' => ['texto' => 'Algo leve e refrescante', 'pontos' => ['frutado' => 3]],
                'C' => ['texto' => 'O prato mais elaborado', 'pontos' => ['intenso' => 3]],
                'D' => ['texto' => 'O mais diferente do cardápio', 'pontos' => ['explorador' => 3]],
                'E' => ['texto' => 'Algo equilibrado, sem arriscar demais', 'pontos' => ['equilibrado' => 3]],
            ],
        ],

        2 => [
            'texto' => 'Qual desses sucos você escolheria agora?',
            'opcoes' => [
                'A' => ['texto' => 'Goiaba ou caju', 'pontos' => ['iniciante' => 3]],
                'B' => ['texto' => 'Limão ou maracujá', 'pontos' => ['frutado' => 3]],
                'C' => ['texto' => 'Uva integral ou açaí', 'pontos' => ['intenso' => 3]],
                'D' => ['texto' => 'Kombucha ou algo que nunca provei', 'pontos' => ['explorador' => 3]],
                'E' => ['texto' => 'Um suco misto bem balanceado', 'pontos' => ['equilibrado' => 3]],
            ],
        ],

        3 => [
            'texto' => 'Como você prefere seu chocolate?',
            'opcoes' => [
                'A' => ['texto' => 'Ao leite, cremoso e suave', 'pontos' => ['iniciante' => 3]],
                'B' => ['texto' => 'Com frutas ou recheios leves', 'pontos' => ['frutado' => 3]],
                'C' => ['texto' => '70% cacau ou mais', 'pontos' => ['intenso' => 3]],
                'D' => ['texto' => 'Com algum sabor diferente ou inesperado', 'pontos' => ['explorador' => 3]],
                'E' => ['texto' => 'Meio amargo, nem doce demais nem forte demais', 'pontos' => ['equilibrado' => 3]],
            ],
        ],

        4 => [
            'texto' => 'Qual dessas sobremesas você escolheria?',
            'opcoes' => [
                'A' => ['texto' => 'Pudim de leite condensado', 'pontos' => ['iniciante' => 3]],
                'B' => ['texto' => 'Sorbet de frutas vermelhas', 'pontos' => ['frutado' => 3]],
                'C' => ['texto' => 'Brownie de chocolate amargo', 'pontos' => ['intenso' => 3]],
                'D' => ['texto' => 'A sobremesa mais diferente do menu degustação', 'pontos' => ['explorador' => 3]],
                'E' => ['texto' => 'Cheesecake ou algo doce na medida', 'pontos' => ['equilibrado' => 3]],
            ],
        ],

        5 => [
            'texto' => 'Uma pessoa próxima te descreveria como:',
            'opcoes' => [
                'A' => ['texto' => 'Acolhedor', 'pontos' => ['iniciante' => 3]],
                'B' => ['texto' => 'Leve', 'pontos' => ['frutado' => 3]],
                'C' => ['texto' => 'Intenso', 'pontos' => ['intenso' => 3]],
                'D' => ['texto' => 'Curioso', 'pontos' => ['explorador' => 3]],
                'E' => ['texto' => 'Equilibrado', 'pontos' => ['equilibrado' => 3]],
            ],
        ],

        6 => [
            'texto' => 'Qual é sua relação atual com café?',
            'opcoes' => [
                'A' => ['texto' => 'Tomo, mas não entendo muito', 'pontos' => ['iniciante' => 5]],
                'B' => ['texto' => 'Gosto bastante e quero conhecer melhor', 'pontos' => ['frutado' => 2, 'equilibrado' => 2]],
                'C' => ['texto' => 'Café faz parte da minha rotina', 'pontos' => ['intenso' => 4]],
                'D' => ['texto' => 'Adoro descobrir cafés diferentes', 'pontos' => ['explorador' => 5]],
                'E' => ['texto' => 'Gosto, mas depende do momento', 'pontos' => ['equilibrado' => 4]],
            ],
        ],

        7 => [
            'texto' => 'Quantas xícaras de café você costuma tomar por dia?',
            'opcoes' => [
                'A' => ['texto' => 'Menos de uma', 'pontos' => ['iniciante' => 3]],
                'B' => ['texto' => 'Uma por dia', 'pontos' => ['equilibrado' => 2, 'frutado' => 1]],
                'C' => ['texto' => 'Duas ou três', 'pontos' => ['intenso' => 3]],
                'D' => ['texto' => 'Quatro ou mais', 'pontos' => ['intenso' => 4]],
                'E' => ['texto' => 'Varia muito conforme o dia', 'pontos' => ['equilibrado' => 3]],
            ],
        ],

        8 => [
            'texto' => 'Em qual momento você mais gosta de tomar café?',
            'opcoes' => [
                'A' => ['texto' => 'No café da manhã', 'pontos' => ['iniciante' => 3]],
                'B' => ['texto' => 'À tarde, com calma', 'pontos' => ['frutado' => 3]],
                'C' => ['texto' => 'Quando preciso de energia', 'pontos' => ['intenso' => 3]],
                'D' => ['texto' => 'Quando quero degustar algo novo', 'pontos' => ['explorador' => 4]],
                'E' => ['texto' => 'Em qualquer momento do dia', 'pontos' => ['equilibrado' => 3]],
            ],
        ],

        9 => [
            'texto' => 'O que você mais busca em uma xícara?',
            'opcoes' => [
                'A' => ['texto' => 'Conforto', 'pontos' => ['iniciante' => 5]],
                'B' => ['texto' => 'Frescor', 'pontos' => ['frutado' => 5]],
                'C' => ['texto' => 'Intensidade', 'pontos' => ['intenso' => 5]],
                'D' => ['texto' => 'Surpresa', 'pontos' => ['explorador' => 5]],
                'E' => ['texto' => 'Equilíbrio', 'pontos' => ['equilibrado' => 5]],
            ],
        ],

        10 => [
            'texto' => 'Qual descrição de café parece mais interessante?',
            'opcoes' => [
                'A' => ['texto' => 'Chocolate, caramelo e castanhas', 'pontos' => ['iniciante' => 6]],
                'B' => ['texto' => 'Frutas vermelhas, cítrico e floral', 'pontos' => ['frutado' => 6]],
                'C' => ['texto' => 'Cacau, especiarias e corpo marcante', 'pontos' => ['intenso' => 6]],
                'D' => ['texto' => 'Fermentado, vínico e incomum', 'pontos' => ['explorador' => 6]],
                'E' => ['texto' => 'Doce, limpo e balanceado', 'pontos' => ['equilibrado' => 6]],
            ],
        ],

        11 => [
            'texto' => 'Como você costuma preparar seu café?',
            'opcoes' => [
                'coador'    => ['texto' => 'Coador de papel ou pano', 'metodo' => 'COADOR'],
                'v60'       => ['texto' => 'V60', 'metodo' => 'V60'],
                'espresso'  => ['texto' => 'Espresso', 'metodo' => 'ESPRESSO'],
                'moka'      => ['texto' => 'Moka italiana', 'metodo' => 'MOKA'],
                'aeropress' => ['texto' => 'Aeropress', 'metodo' => 'AEROPRESS'],
                'prensa'    => ['texto' => 'Prensa francesa', 'metodo' => 'PRENSA_FRANCESA'],
            ],
            'tipo' => 'metodo',
        ],

        12 => [
            'texto' => 'Como prefere receber seu café?',
            'opcoes' => [
                'GRAOS' => ['texto' => 'Em grãos'],
                'MOIDO' => ['texto' => 'Moído'],
            ],
            'tipo' => 'envio',
        ],
    ];

    private array $perfis = [
        'iniciante' => [
            'nome'   => 'Iniciante',
            'accent' => '#c8845a',
            'desc'   => 'Você busca conforto na xícara. Sem complicação, sem amargor forte — só aquele café gostoso e acolhedor que aquece o dia. Os melhores grãos pra você têm notas de chocolate ao leite, caramelo e castanhas, com corpo suave e acidez baixa que não assustam o paladar.',
            'badges' => [
                ['icone' => 'hgi-stroke hgi-coffee-01', 'texto' => 'Suave'],
                ['icone' => 'hgi-stroke hgi-heart',     'texto' => 'Acolhedor'],
                ['icone' => 'hgi-stroke hgi-sun-01',    'texto' => 'Matinal'],
            ],
        ],
        'frutado' => [
            'nome'   => 'Frutado',
            'accent' => '#59a96a',
            'desc'   => 'Seu paladar ama vivacidade. Você percebe quando algo tem um gostinho diferente — e gosta disso. Cafés com notas de frutas vermelhas, cítricos e florais, com acidez vibrante e final elegante, foram feitos pra você.',
            'badges' => [
                ['icone' => 'hgi-stroke hgi-lemon',        'texto' => 'Frutado'],
                ['icone' => 'hgi-stroke hgi-lightning-02', 'texto' => 'Vibrante'],
                ['icone' => 'hgi-stroke hgi-leaf-01',      'texto' => 'Delicado'],
            ],
        ],
        'intenso' => [
            'nome'   => 'Intenso',
            'accent' => '#e28413',
            'desc'   => 'Sem força não tem graça. Você quer uma xícara que deixe impressão — que você sinta do primeiro gole ao último. Cafés encorpados, com notas de cacau amargo, especiarias e um final longo e marcante são o seu território.',
            'badges' => [
                ['icone' => 'hgi-stroke hgi-fire-02', 'texto' => 'Intenso'],
                ['icone' => 'hgi-stroke hgi-flash',   'texto' => 'Encorpado'],
                ['icone' => 'hgi-stroke hgi-moon-02', 'texto' => 'Noturno'],
            ],
        ],
        'equilibrado' => [
            'nome'   => 'Equilibrado',
            'accent' => '#788aa3',
            'desc'   => 'Você aprecia o melhor dos dois mundos. Nem suave demais, nem intenso demais — uma xícara limpa, bem feita, com doçura e acidez em harmonia, que combina com qualquer momento do dia.',
            'badges' => [
                ['icone' => 'hgi-stroke hgi-coffee-02', 'texto' => 'Balanceado'],
                ['icone' => 'hgi-stroke hgi-sun-02',    'texto' => 'Versátil'],
                ['icone' => 'hgi-stroke hgi-star',      'texto' => 'Clássico'],
            ],
        ],
        'explorador' => [
            'nome'   => 'Explorador',
            'accent' => '#92614a',
            'desc'   => 'O café pra você é descoberta. Você quer o inusitado — o fermentado anaeróbico, o processo experimental, o que ninguém ainda provou. Cada mês vai ser uma surpresa diferente, e você vai adorar cada gole.',
            'badges' => [
                ['icone' => 'hgi-stroke hgi-stars',  'texto' => 'Curioso'],
                ['icone' => 'hgi-stroke hgi-compass', 'texto' => 'Aventureiro'],
                ['icone' => 'hgi-stroke hgi-idea-01', 'texto' => 'Ousado'],
            ],
        ],
    ];

    private array $planos = [
        'basico' => [
            'nome'  => 'Básico',
            'preco' => 'R$49',
            'desc'  => 'Perfeito pra você — 1 pacote de 250g por mês, curadoria pelo seu perfil e frete grátis.',
            'url'   => '/assinar/basico',
        ],
        'gold' => [
            'nome'  => 'Gold',
            'preco' => 'R$89',
            'desc'  => 'O plano certo pra você — 2 pacotes por mês, nota de sabor personalizada e acesso a cafés exclusivos.',
            'url'   => '/assinar/gold',
        ],
        'premium' => [
            'nome'  => 'Premium',
            'preco' => 'R$129',
            'desc'  => 'Feito pra quem leva café a sério — 3 pacotes, brinde mensal surpresa e acesso VIP a lançamentos.',
            'url'   => '/assinar/premium',
        ],
    ];

    private array $metodos = [
        'COADOR'          => 'coador',
        'V60'             => 'V60',
        'ESPRESSO'        => 'espresso',
        'MOKA'            => 'moka italiana',
        'AEROPRESS'       => 'Aeropress',
        'PRENSA_FRANCESA' => 'prensa francesa',
    ];

    private array $moagens = [
        'FINA'       => 'fina',
        'MEDIA_FINA' => 'média-fina',
        'MEDIA'      => 'média',
        'GROSSA'     => 'grossa',
    ];

    public function index()
    {
        $this->limparSessaoQuiz();
        return view('quiz/index');
    }

    public function pergunta($numero)
    {
        $numero = (int) $numero;

        if ($numero === 1) {
            $this->limparSessaoQuiz();
        }

        if (!isset($this->perguntas[$numero])) {
            return redirect()->to('/quiz');
        }

        return view('quiz/pergunta', [
            'numero'  => $numero,
            'total'   => count($this->perguntas),
            'pergunta' => $this->perguntas[$numero],
        ]);
    }

    public function responder()
    {
        $numero   = (int) $this->request->getPost('numero');
        $resposta = $this->request->getPost('resposta');

        if (!isset($this->perguntas[$numero])) {
            return redirect()->to('/quiz');
        }

        if (empty($resposta) || !isset($this->perguntas[$numero]['opcoes'][$resposta])) {
            return redirect()->back()->with('erro', 'Selecione uma opção válida.');
        }

        if ($numero === 1) {
            $this->limparSessaoQuiz();
        }

        $respostas          = session()->get('respostas_quiz') ?? [];
        $respostas[$numero] = $resposta;
        session()->set('respostas_quiz', $respostas);

        $proxima = $numero + 1;

        if ($proxima > count($this->perguntas)) {
            $this->calcularResultado();
            return redirect()->to('/quiz/calculando');
        }

        return redirect()->to('/quiz/pergunta/' . $proxima);
    }

    public function calculando()
    {
        if (!session()->get('perfil_quiz')) {
            $this->calcularResultado();
        }

        if (!session()->get('perfil_quiz')) {
            return redirect()->to('/quiz');
        }

        return view('quiz/calculando');
    }

    public function resultado()
    {
        if (!session()->get('perfil_quiz')) {
            $this->calcularResultado();
        }

        if (!session()->get('perfil_quiz')) {
            return redirect()->to('/quiz');
        }

        $perfilKey  = session()->get('perfil_quiz');
        $planoKey   = session()->get('plano_recomendado') ?? 'gold';
        $metodo     = session()->get('metodo_preparo');
        $formaEnvio = session()->get('forma_envio');
        $moagem     = session()->get('moagem');

        $dados      = $this->perfis[$perfilKey]  ?? $this->perfis['equilibrado'];
        $dadosPlano = $this->planos[$planoKey]   ?? $this->planos['gold'];

        $metodoLabel = $this->metodos[$metodo ?? ''] ?? null;
        $moagemLabel = $this->moagens[$moagem ?? ''] ?? null;

        // Monta o trecho de método/moagem no texto
        $textoMetodo = '';
        if ($metodoLabel) {
            if ($formaEnvio === 'MOIDO' && $moagemLabel) {
                $textoMetodo = " Como você usa {$metodoLabel}, a moagem ideal pra você é <strong>{$moagemLabel}</strong> — assim você vai extrair tudo que o grão tem a oferecer.";
            } else {
                $textoMetodo = " Como você prefere receber em grãos, é só moer na hora do preparo no {$metodoLabel} pra garantir o frescor máximo.";
            }
        }

        return view('quiz/resultado', [
            'perfilKey'   => $perfilKey,
            'dados'       => $dados,
            'dadosPlano'  => $dadosPlano,
            'textoMetodo' => $textoMetodo,
        ]);
    }

    private function calcularResultado()
    {
        $respostas = session()->get('respostas_quiz') ?? [];

        $pontuacao = [
            'iniciante'   => 0,
            'frutado'     => 0,
            'intenso'     => 0,
            'equilibrado' => 0,
            'explorador'  => 0,
        ];

        foreach ($respostas as $numero => $resposta) {
            if (!isset($this->perguntas[$numero])) continue;

            $pergunta = $this->perguntas[$numero];

            if (!isset($pergunta['opcoes'][$resposta])) continue;

            $opcao = $pergunta['opcoes'][$resposta];

            if (($pergunta['tipo'] ?? '') === 'metodo') {
                session()->set('metodo_preparo', $opcao['metodo']);
                continue;
            }

            if (($pergunta['tipo'] ?? '') === 'envio') {
                session()->set('forma_envio', $resposta);
                continue;
            }

            if (!isset($opcao['pontos'])) continue;

            foreach ($opcao['pontos'] as $perfil => $pontos) {
                if (isset($pontuacao[$perfil])) {
                    $pontuacao[$perfil] += $pontos;
                }
            }
        }

        arsort($pontuacao);
        $perfilFinal = array_key_first($pontuacao);

        // Recomendação de plano pela frequência (pergunta 7)
        $respostaFrequencia = $respostas[7] ?? null;

        $planoRecomendado = match(true) {
            $respostaFrequencia === 'A' => 'basico',
            $respostaFrequencia === 'D' => 'premium',
            default                     => 'gold',
        };

        $formaEnvio = session()->get('forma_envio');
        $metodo     = session()->get('metodo_preparo');

        $moagem = $formaEnvio === 'MOIDO'
            ? $this->calcularMoagem($metodo)
            : null;

        session()->set([
            'perfil_quiz'       => $perfilFinal,
            'plano_recomendado' => $planoRecomendado,
            'moagem'            => $moagem,
        ]);
    }

    private function calcularMoagem($metodo)
    {
        return match ($metodo) {
            'ESPRESSO'                => 'FINA',
            'V60', 'AEROPRESS'        => 'MEDIA_FINA',
            'COADOR', 'MOKA'          => 'MEDIA',
            'PRENSA_FRANCESA'         => 'GROSSA',
            default                   => null,
        };
    }

    private function limparSessaoQuiz()
    {
        session()->remove([
            'respostas_quiz',
            'perfil_quiz',
            'metodo_preparo',
            'forma_envio',
            'moagem',
            'plano_recomendado',
        ]);
    }
}