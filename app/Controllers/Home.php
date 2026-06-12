<?php

namespace App\Controllers;

use App\Models\ClientesModel;
use App\Models\EnderecosModel;
use App\Models\AssinaturasModel;
use App\Models\PlanosModel;

class Home extends BaseController
{
    private array $perfisResumo = [
        'iniciante' => [
            'nome'    => 'Iniciante',
            'tagline' => 'Confortável, suave e sem complicação',
            'cor'     => '#c8845a',
            'imagem'  => 'iniciante.svg',
            'desc'    => 'Seu café ideal é acolhedor, doce e fácil de amar, com notas de chocolate, caramelo e castanhas.',
        ],
        'equilibrado' => [
            'nome'    => 'Equilibrado',
            'tagline' => 'A xícara no ponto certo',
            'cor'     => '#788aa3',
            'imagem'  => 'equilibrado.svg',
            'desc'    => 'Você combina com cafés limpos e harmônicos, com doçura, acidez e corpo bem balanceados.',
        ],
        'frutado' => [
            'nome'    => 'Frutado',
            'tagline' => 'Vivo, leve e aromático',
            'cor'     => '#59a96a',
            'imagem'  => 'frutado.svg',
            'desc'    => 'Seu paladar pede cafés aromáticos, com brilho, acidez gostosa e notas de frutas e florais.',
        ],
        'intenso' => [
            'nome'    => 'Intenso',
            'tagline' => 'Marcante do primeiro ao último gole',
            'cor'     => '#e28413',
            'imagem'  => 'intenso.svg',
            'desc'    => 'Você gosta de cafés encorpados e profundos, com notas de cacau, especiarias e final longo.',
        ],
        'explorador' => [
            'nome'    => 'Explorador',
            'tagline' => 'Para quem quer descobrir o novo',
            'cor'     => '#92614a',
            'imagem'  => 'explorador.svg',
            'desc'    => 'Sua experiência ideal passa por cafés diferentes, microlotes e processos com personalidade.',
        ],
    ];

    public function index(): string
    {
        return view('home/index', [
            'resumoCliente' => $this->montarResumoCliente(),
        ]);
    }

    public function planos()
    {
        return view('home/planos');
    }

    public function perfis()
    {
        $perfis = [
            'iniciante' => [
                'nome'     => 'Iniciante',
                'tagline'  => 'Confortável, suave e sem complicação',
                'accent'   => '#c8845a',
                'imagem'   => 'iniciante.svg',
                'desc'     => 'Você busca conforto na xícara. Sem amargor forte, sem susto e sem complicação: só aquele café gostoso, acolhedor e fácil de amar.',
                'ideal'    => 'Combina com quem está começando no mundo dos cafés especiais e quer uma experiência doce, macia e familiar.',
                'notas'    => ['Chocolate ao leite', 'Caramelo', 'Castanhas'],
                'badges'   => ['Suave', 'Acolhedor', 'Matinal'],
                'atributos' => [
                    'Doçura'      => 85,
                    'Acidez'      => 25,
                    'Corpo'       => 50,
                    'Intensidade' => 35,
                    'Ousadia'     => 20,
                ],
            ],
            'equilibrado' => [
                'nome'     => 'Equilibrado',
                'tagline'  => 'A xícara no ponto certo',
                'accent'   => '#788aa3',
                'imagem'   => 'equilibrado.svg',
                'desc'     => 'Você aprecia harmonia. Nem suave demais, nem intenso demais: uma xícara limpa, bem feita, com doçura e acidez em equilíbrio.',
                'ideal'    => 'Combina com quem quer um café versátil, gostoso em qualquer momento do dia e com personalidade sem exagero.',
                'notas'    => ['Mel', 'Nozes', 'Frutas amarelas'],
                'badges'   => ['Balanceado', 'Versátil', 'Clássico'],
                'atributos' => [
                    'Doçura'      => 70,
                    'Acidez'      => 55,
                    'Corpo'       => 65,
                    'Intensidade' => 55,
                    'Ousadia'     => 45,
                ],
            ],
            'frutado' => [
                'nome'     => 'Frutado',
                'tagline'  => 'Vivo, leve e aromático',
                'accent'   => '#59a96a',
                'imagem'   => 'frutado.svg',
                'desc'     => 'Seu paladar gosta de brilho. Você percebe quando o café tem um gostinho diferente — frutas, florais, acidez gostosa e final elegante.',
                'ideal'    => 'Combina com quem gosta de cafés leves, aromáticos e surpreendentes, daqueles que deixam a xícara mais interessante.',
                'notas'    => ['Frutas vermelhas', 'Cítricos', 'Florais'],
                'badges'   => ['Frutado', 'Vibrante', 'Delicado'],
                'atributos' => [
                    'Doçura'      => 65,
                    'Acidez'      => 90,
                    'Corpo'       => 40,
                    'Intensidade' => 50,
                    'Ousadia'     => 65,
                ],
            ],
            'intenso' => [
                'nome'     => 'Intenso',
                'tagline'  => 'Marcante do primeiro ao último gole',
                'accent'   => '#e28413',
                'imagem'   => 'intenso.svg',
                'desc'     => 'Sem força não tem graça. Você quer um café que deixe presença: encorpado, profundo, marcante e com final longo.',
                'ideal'    => 'Combina com quem gosta de café com impacto, corpo alto e sabor forte, mas ainda dentro da qualidade dos cafés especiais.',
                'notas'    => ['Cacau amargo', 'Especiarias', 'Final longo'],
                'badges'   => ['Intenso', 'Encorpado', 'Marcante'],
                'atributos' => [
                    'Doçura'      => 50,
                    'Acidez'      => 35,
                    'Corpo'       => 90,
                    'Intensidade' => 95,
                    'Ousadia'     => 60,
                ],
            ],
            'explorador' => [
                'nome'     => 'Explorador',
                'tagline'  => 'Para quem quer descobrir o novo',
                'accent'   => '#92614a',
                'imagem'   => 'explorador.svg',
                'desc'     => 'O café pra você é descoberta. Você gosta do diferente, do experimental, do microlote, do processo inusitado e do sabor que foge do óbvio.',
                'ideal'    => 'Combina com quem quer ser surpreendido e transformar cada mês em uma nova experiência sensorial.',
                'notas'    => ['Fermentados', 'Microlotes', 'Processos experimentais'],
                'badges'   => ['Curioso', 'Aventureiro', 'Ousado'],
                'atributos' => [
                    'Doçura'      => 60,
                    'Acidez'      => 75,
                    'Corpo'       => 65,
                    'Intensidade' => 75,
                    'Ousadia'     => 100,
                ],
            ],
        ];

        return view('home/perfis', ['perfis' => $perfis]);
    }

    // ── Área do cliente ─────────────────────────────────

    private function verificarLogin()
    {
        if (!session()->get('cliente_id')) {
            return redirect()->to('/login')->with('erro', 'Faça login para continuar.');
        }
        return null;
    }

    private function montarResumoCliente(): array
    {
        $resumo = [
            'logado' => false,
            'fezQuiz' => false,
        ];

        $clienteId = session()->get('cliente_id');

        if (!$clienteId) {
            return $resumo;
        }

        $clientesModel = new ClientesModel();
        $cliente = $clientesModel->find($clienteId);

        if (!$cliente) {
            return $resumo;
        }

        $perfilKey = strtolower((string) ($cliente['perfil'] ?? ''));
        $perfil = $this->perfisResumo[$perfilKey] ?? null;
        $fezQuiz = $perfil !== null;
        $primeiroNome = explode(' ', trim($cliente['nome'] ?? 'Cliente'))[0] ?: 'Cliente';
        $assinaturaAtiva = (new AssinaturasModel())
            ->where('cliente_id', $clienteId)
            ->where('status', 'Ativa')
            ->orderBy('id', 'DESC')
            ->first();
        $planoAssinatura = $assinaturaAtiva
            ? (new PlanosModel())->find($assinaturaAtiva['plano_id'])
            : null;

        return [
            'logado' => true,
            'fezQuiz' => $fezQuiz,
            'primeiroNome' => $primeiroNome,
            'nome' => $cliente['nome'] ?? $primeiroNome,
            'perfilKey' => $perfilKey,
            'perfilNome' => $perfil['nome'] ?? null,
            'perfilTagline' => $perfil['tagline'] ?? null,
            'perfilDescricao' => $perfil['desc'] ?? null,
            'perfilCor' => $perfil['cor'] ?? '#4f3328',
            'perfilImagem' => $perfil['imagem'] ?? null,
            'metodoLabel' => $this->labelMetodo($cliente['metodo_preparo'] ?? null),
            'envioLabel' => $this->labelEnvio($cliente['forma_envio'] ?? null),
            'moagemLabel' => $this->labelMoagem($cliente['moagem'] ?? null),
            'planoLabel' => $planoAssinatura['nome'] ?? $this->labelPlano($cliente['plano'] ?? null),
            'statusPlano' => $assinaturaAtiva['status'] ?? (!empty($cliente['plano_ativo']) ? 'Ativo' : 'Sem plano ativo'),
        ];
    }

    private function labelMetodo(?string $metodo): string
    {
        return [
            'COADOR' => 'Coador',
            'V60' => 'V60',
            'ESPRESSO' => 'Espresso',
            'MOKA' => 'Moka italiana',
            'AEROPRESS' => 'Aeropress',
            'PRENSA_FRANCESA' => 'Prensa francesa',
        ][$metodo ?? ''] ?? 'Não informado';
    }

    private function labelEnvio(?string $envio): string
    {
        return [
            'GRAOS' => 'Em grãos',
            'MOIDO' => 'Moído',
        ][$envio ?? ''] ?? 'Não informado';
    }

    private function labelMoagem(?string $moagem): string
    {
        return [
            'FINA' => 'Fina',
            'MEDIA_FINA' => 'Média-fina',
            'MEDIA' => 'Média',
            'GROSSA' => 'Grossa',
        ][$moagem ?? ''] ?? 'Moer na hora';
    }

    private function labelPlano(?string $plano): string
    {
        return [
            'basico' => 'Básico',
            'gold' => 'Gold',
            'premium' => 'Premium',
        ][$plano ?? ''] ?? 'Nenhum plano';
    }

    public function assinar(string $plano)
    {
        if ($redir = $this->verificarLogin()) return $redir;

        if (!in_array($plano, ['basico', 'gold', 'premium'])) {
            return redirect()->to('/planos');
        }

        return view('home/assinar', ['plano' => $plano]);
    }

    public function salvarPlano()
    {
        if ($redir = $this->verificarLogin()) return $redir;

        $plano = $this->request->getPost('plano');
        $planosPermitidos = [
            'basico'  => 'Básico',
            'gold'    => 'Gold',
            'premium' => 'Premium',
        ];

        if (!array_key_exists($plano, $planosPermitidos)) {
            return redirect()->to('/planos')->with('erro', 'Plano inválido.');
        }

        $planosModel = new PlanosModel();
        $planoBanco = $planosModel->where('nome', $planosPermitidos[$plano])->first();

        if (!$planoBanco) {
            return redirect()->to('/planos')
                ->with('erro', 'Plano não encontrado. Cadastre os planos no painel admin antes de assinar.');
        }

        $clienteId = session()->get('cliente_id');
        $assinaturasModel = new AssinaturasModel();
        $clientesModel = new ClientesModel();
        $db = db_connect();

        $db->transStart();

        $assinaturasModel
            ->where('cliente_id', $clienteId)
            ->where('status', 'Ativa')
            ->set(['status' => 'Inativa'])
            ->update();

        $assinaturasModel->insert([
            'cliente_id'   => $clienteId,
            'plano_id'     => $planoBanco['id'],
            'data_inicio'  => date('Y-m-d'),
            'status'       => 'Ativa',
        ]);

        $clientesModel->update($clienteId, [
            'plano'       => $plano,
            'plano_ativo' => 1,
        ]);

        $db->transComplete();

        if (!$db->transStatus()) {
            return redirect()->to('/planos')
                ->with('erro', 'Não foi possível confirmar a assinatura. Tente novamente.');
        }

        return redirect()->to('/')
            ->with('sucesso', 'Assinatura confirmada! Bem-vindo ao Brasa Café Clube.');
    }
    public function endereco()
    {
        if ($redir = $this->verificarLogin()) return $redir;

        return view('home/endereco');
    }

    public function salvarEndereco()
    {
        if ($redir = $this->verificarLogin()) return $redir;

        $model = new EnderecosModel();

        $dados = [
            'cliente_id'  => session()->get('cliente_id'),
            'cep'         => $this->request->getPost('cep'),
            'rua'         => $this->request->getPost('rua'),
            'numero'      => $this->request->getPost('numero'),
            'complemento' => $this->request->getPost('complemento'),
            'bairro'      => $this->request->getPost('bairro'),
            'cidade'      => $this->request->getPost('cidade'),
            'estado'      => $this->request->getPost('estado'),
        ];

        if (!$model->insert($dados)) {
            return redirect()->back()
                ->withInput()
                ->with('erros', $model->errors());
        }

        return redirect()->to('/planos')
            ->with('sucesso', 'Assinatura confirmada! Bem-vindo ao Brasa Café Clube.');
    }


    public function admin()
    {
        return view('admin/dashboard');
    } 
}
