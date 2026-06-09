<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home/index');
    }
    public function planos()
    {
    return view('home/planos');
    }
    
    public function perfis()
    {
        $perfis = [
            'iniciante' => [
                'nome' => 'Iniciante',
                'tagline' => 'Confortável, suave e sem complicação',
                'accent' => '#c8845a',
                'imagem' => 'iniciante.svg',
                'desc' => 'Você busca conforto na xícara. Sem amargor forte, sem susto e sem complicação: só aquele café gostoso, acolhedor e fácil de amar.',
                'ideal' => 'Combina com quem está começando no mundo dos cafés especiais e quer uma experiência doce, macia e familiar.',
                'notas' => ['Chocolate ao leite', 'Caramelo', 'Castanhas'],
                'badges' => ['Suave', 'Acolhedor', 'Matinal'],
                'atributos' => [
                    'Doçura' => 85,
                    'Acidez' => 25,
                    'Corpo' => 50,
                    'Intensidade' => 35,
                    'Ousadia' => 20,
                ],
            ],

            'equilibrado' => [
                'nome' => 'Equilibrado',
                'tagline' => 'A xícara no ponto certo',
                'accent' => '#788aa3',
                'imagem' => 'equilibrado.svg',
                'desc' => 'Você aprecia harmonia. Nem suave demais, nem intenso demais: uma xícara limpa, bem feita, com doçura e acidez em equilíbrio.',
                'ideal' => 'Combina com quem quer um café versátil, gostoso em qualquer momento do dia e com personalidade sem exagero.',
                'notas' => ['Mel', 'Nozes', 'Frutas amarelas'],
                'badges' => ['Balanceado', 'Versátil', 'Clássico'],
                'atributos' => [
                    'Doçura' => 70,
                    'Acidez' => 55,
                    'Corpo' => 65,
                    'Intensidade' => 55,
                    'Ousadia' => 45,
                ],
            ],

            'frutado' => [
                'nome' => 'Frutado',
                'tagline' => 'Vivo, leve e aromático',
                'accent' => '#59a96a',
                'imagem' => 'frutado.svg',
                'desc' => 'Seu paladar gosta de brilho. Você percebe quando o café tem um gostinho diferente — frutas, florais, acidez gostosa e final elegante.',
                'ideal' => 'Combina com quem gosta de cafés leves, aromáticos e surpreendentes, daqueles que deixam a xícara mais interessante.',
                'notas' => ['Frutas vermelhas', 'Cítricos', 'Florais'],
                'badges' => ['Frutado', 'Vibrante', 'Delicado'],
                'atributos' => [
                    'Doçura' => 65,
                    'Acidez' => 90,
                    'Corpo' => 40,
                    'Intensidade' => 50,
                    'Ousadia' => 65,
                ],
            ],

            'intenso' => [
                'nome' => 'Intenso',
                'tagline' => 'Marcante do primeiro ao último gole',
                'accent' => '#e28413',
                'imagem' => 'intenso.svg',
                'desc' => 'Sem força não tem graça. Você quer um café que deixe presença: encorpado, profundo, marcante e com final longo.',
                'ideal' => 'Combina com quem gosta de café com impacto, corpo alto e sabor forte, mas ainda dentro da qualidade dos cafés especiais.',
                'notas' => ['Cacau amargo', 'Especiarias', 'Final longo'],
                'badges' => ['Intenso', 'Encorpado', 'Marcante'],
                'atributos' => [
                    'Doçura' => 50,
                    'Acidez' => 35,
                    'Corpo' => 90,
                    'Intensidade' => 95,
                    'Ousadia' => 60,
                ],
            ],

            'explorador' => [
                'nome' => 'Explorador',
                'tagline' => 'Para quem quer descobrir o novo',
                'accent' => '#92614a',
                'imagem' => 'explorador.svg',
                'desc' => 'O café pra você é descoberta. Você gosta do diferente, do experimental, do microlote, do processo inusitado e do sabor que foge do óbvio.',
                'ideal' => 'Combina com quem quer ser surpreendido e transformar cada mês em uma nova experiência sensorial.',
                'notas' => ['Fermentados', 'Microlotes', 'Processos experimentais'],
                'badges' => ['Curioso', 'Aventureiro', 'Ousado'],
                'atributos' => [
                    'Doçura' => 60,
                    'Acidez' => 75,
                    'Corpo' => 65,
                    'Intensidade' => 75,
                    'Ousadia' => 100,
                ],
            ],
        ];

        return view('home/perfis', [
            'perfis' => $perfis
        ]);
    }
}

