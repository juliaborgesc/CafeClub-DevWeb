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
            'coador' => ['texto' => 'Coador de papel ou pano', 'metodo' => 'COADOR'],
            'v60' => ['texto' => 'V60', 'metodo' => 'V60'],
            'espresso' => ['texto' => 'Espresso', 'metodo' => 'ESPRESSO'],
            'moka' => ['texto' => 'Moka italiana', 'metodo' => 'MOKA'],
            'aeropress' => ['texto' => 'Aeropress', 'metodo' => 'AEROPRESS'],
            'prensa' => ['texto' => 'Prensa francesa', 'metodo' => 'PRENSA_FRANCESA'],
        ],
        'tipo' => 'metodo'
    ],

    12 => [
        'texto' => 'Como prefere receber seu café?',
        'opcoes' => [
            'GRAOS' => ['texto' => 'Em grãos'],
            'MOIDO' => ['texto' => 'Moído'],
        ],
        'tipo' => 'envio'
    ],
];

    public function index()
    {
        session()->remove(['respostas_quiz', 'perfil_quiz', 'metodo_preparo', 'forma_envio', 'moagem']);

        return view('quiz/index');
    }

    public function pergunta($numero)
    {
        if (!isset($this->perguntas[$numero])) {
            return redirect()->to('/quiz/resultado');
        }

        return view('quiz/pergunta', [
            'numero' => $numero,
            'total' => count($this->perguntas),
            'pergunta' => $this->perguntas[$numero],
        ]);
    }

    public function responder()
    {
        $numero = (int) $this->request->getPost('numero');
        $resposta = $this->request->getPost('resposta');

        // valida pergunta existente
        if (!isset($this->perguntas[$numero])) {
            return redirect()->to('/quiz');
        }

        // valida resposta
        if (
            empty($resposta) ||
            !isset($this->perguntas[$numero]['opcoes'][$resposta])
        ) {
            return redirect()->back()
                ->with('erro', 'Selecione uma opção válida.');
        }

        // recupera respostas anteriores
        $respostas = session()->get('respostas_quiz') ?? [];

        // salva resposta atual
        $respostas[$numero] = $resposta;

        session()->set('respostas_quiz', $respostas);

        // próxima pergunta
        $proxima = $numero + 1;

        // terminou o quiz?
        if ($proxima > count($this->perguntas)) {

            $this->calcularResultado();

            return redirect()->to('/quiz/resultado');
        }

        return redirect()->to('/quiz/pergunta/' . $proxima);
    }
    public function resultado()
    {
        return view('quiz/resultado', [
            'perfil' => session()->get('perfil_quiz'),
            'metodo_preparo' => session()->get('metodo_preparo'),
            'forma_envio' => session()->get('forma_envio'),
            'moagem' => session()->get('moagem'),
        ]);
    }

    private function calcularResultado()
    {
        $respostas = session()->get('respostas_quiz') ?? [];

        $pontuacao = [
            'iniciante' => 0,
            'frutado' => 0,
            'intenso' => 0,
            'equilibrado' => 0,
            'explorador' => 0,
        ];

        foreach ($respostas as $numero => $resposta) {
            $pergunta = $this->perguntas[$numero];

            if (($pergunta['tipo'] ?? '') === 'metodo') {
                $metodo = $pergunta['opcoes'][$resposta]['metodo'];
                session()->set('metodo_preparo', $metodo);
                continue;
            }

            if (($pergunta['tipo'] ?? '') === 'envio') {
                session()->set('forma_envio', $resposta);
                continue;
            }

            foreach ($pergunta['opcoes'][$resposta]['pontos'] as $perfil => $pontos) {
                $pontuacao[$perfil] += $pontos;
            }
        }

        arsort($pontuacao);
        $perfilFinal = array_key_first($pontuacao);

        $metodo = session()->get('metodo_preparo');
        $formaEnvio = session()->get('forma_envio');

        $moagem = $formaEnvio === 'MOIDO'
            ? $this->calcularMoagem($metodo)
            : null;

        session()->set([
            'perfil_quiz' => $perfilFinal,
            'moagem' => $moagem,
        ]);
    }

    private function calcularMoagem($metodo)
    {
        return match ($metodo) {
            'ESPRESSO' => 'FINA',
            'MOKA' => 'MEDIA_FINA',
            'PRENSA_FRANCESA' => 'GROSSA',
            default => 'MEDIA',
        };
    }
}