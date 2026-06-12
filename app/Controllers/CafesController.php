<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CafeModel;

class CafesController extends BaseController
{
    protected $cafeModel;

    public function __construct()
    {
        $this->cafeModel = new CafeModel();
    }

    public function index()
    {
        $dados['cafes'] = $this->cafeModel->findAll();

        return view('admin/cafes/index', $dados);
    }

    public function create()
    {
        return view('admin/cafes/create', [
            'perfis' => $this->perfisDisponiveis(),
        ]);
    }

    public function store()
    {
        $formaEnvio = $this->request->getPost('forma_envio');
        $rules = $this->regrasValidacaoCafe($formaEnvio);

        if (!$this->validate($rules, $this->mensagensValidacaoCafe())) {
            return redirect()->back()
                ->withInput()
                ->with('erros', $this->validator->getErrors());
        }

        $this->cafeModel->insert([
            'nome' => trim($this->request->getPost('nome')),
            'origem' => trim($this->request->getPost('origem')),
            'descricao' => trim((string) $this->request->getPost('descricao')),
            'perfil' => $this->request->getPost('perfil'),
            'torra' => $this->request->getPost('torra'),
            'forma_envio' => $formaEnvio,
            'moagem' => $formaEnvio === 'MOIDO' ? $this->request->getPost('moagem') : null,
            'disponivel' => $this->request->getPost('disponivel') ? 1 : 0,
        ]);

        return redirect()->to('admin/cafes');
    }

    public function edit($id)
    {
        $dados['cafe'] = $this->cafeModel->find($id);
        $dados['perfis'] = $this->perfisDisponiveis();

        return view('admin/cafes/edit', $dados);
    }

    public function update($id)
    {
        $formaEnvio = $this->request->getPost('forma_envio');
        $rules = $this->regrasValidacaoCafe($formaEnvio);

        if (!$this->validate($rules, $this->mensagensValidacaoCafe())) {
            return redirect()->back()
                ->withInput()
                ->with('erros', $this->validator->getErrors());
        }

        $this->cafeModel->update($id, [
            'nome' => trim($this->request->getPost('nome')),
            'origem' => trim($this->request->getPost('origem')),
            'descricao' => trim((string) $this->request->getPost('descricao')),
            'perfil' => $this->request->getPost('perfil'),
            'torra' => $this->request->getPost('torra'),
            'forma_envio' => $formaEnvio,
            'moagem' => $formaEnvio === 'MOIDO' ? $this->request->getPost('moagem') : null,
            'disponivel' => $this->request->getPost('disponivel') ? 1 : 0,
        ]);

        return redirect()->to('admin/cafes');
    }

    public function excluir($id)
    {
        $this->cafeModel->delete($id);

        return redirect()->to('admin/cafes');
    }

    private function perfisDisponiveis(): array
    {
        return [
            'Iniciante',
            'Equilibrado',
            'Frutado',
            'Intenso',
            'Explorador',
        ];
    }

    private function regrasValidacaoCafe(?string $formaEnvio): array
    {
        $rules = [
            'nome' => 'required',
            'origem' => 'required',
            'descricao' => 'permit_empty',
            'perfil' => 'required',
            'torra' => 'required',
            'forma_envio' => 'required|in_list[GRAOS,MOIDO]',
            'moagem' => 'permit_empty',
        ];

        if ($formaEnvio === 'MOIDO') {
            $rules['moagem'] = 'required|in_list[FINA,MEDIA_FINA,MEDIA,GROSSA]';
        }

        return $rules;
    }

    private function mensagensValidacaoCafe(): array
    {
        return [
            'nome' => [
                'required' => 'Informe o nome do café.',
            ],
            'origem' => [
                'required' => 'Informe a origem do café.',
            ],
            'perfil' => [
                'required' => 'Selecione o perfil sensorial do café.',
            ],
            'torra' => [
                'required' => 'Selecione a torra do café.',
            ],
            'forma_envio' => [
                'required' => 'Selecione a forma de envio.',
                'in_list' => 'Selecione uma forma de envio válida.',
            ],
            'moagem' => [
                'required' => 'Selecione a moagem quando a forma de envio for moído.',
                'in_list' => 'Selecione uma moagem válida.',
            ],
        ];
    }
}
