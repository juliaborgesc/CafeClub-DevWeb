<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlanosModel;

class PlanosController extends BaseController
{
    protected $planosModel;

    public function __construct()
    {
        $this->planosModel = new PlanosModel();
    }

    public function index()
    {
        $dados['planos'] = $this->planosModel->findAll();

        return view('admin/planos/index', $dados);
    }

    public function create()
    {
        return view('admin/planos/create');
    }

    public function store()
    {
        if (!$this->validate($this->regrasValidacaoPlano(), $this->mensagensValidacaoPlano())) {
            return redirect()->back()
                ->withInput()
                ->with('erros', $this->validator->getErrors());
        }

        $this->planosModel->insert([
            'nome' => trim($this->request->getPost('nome')),
            'descricao' => trim($this->request->getPost('descricao')),
            'valor' => $this->request->getPost('valor')
        ]);

        return redirect()->to('admin/planos');
    }

    public function edit($id)
    {
        $dados['plano'] = $this->planosModel->find($id);

        return view('admin/planos/edit', $dados);
    }

    public function update($id)
    {
        if (!$this->validate($this->regrasValidacaoPlano(), $this->mensagensValidacaoPlano())) {
            return redirect()->back()
                ->withInput()
                ->with('erros', $this->validator->getErrors());
        }

        $this->planosModel->update($id, [
            'nome' => trim($this->request->getPost('nome')),
            'descricao' => trim($this->request->getPost('descricao')),
            'valor' => $this->request->getPost('valor')
        ]);

        return redirect()->to('admin/planos');
    }

    public function excluir($id)
    {
        $this->planosModel->delete($id);

        return redirect()->to('admin/planos');
    }

    private function regrasValidacaoPlano(): array
    {
        return [
            'nome' => 'required',
            'descricao' => 'required',
            'valor' => 'required|numeric|greater_than[0]',
        ];
    }

    private function mensagensValidacaoPlano(): array
    {
        return [
            'nome' => [
                'required' => 'Informe o nome do plano.',
            ],
            'descricao' => [
                'required' => 'Informe a descrição do plano.',
            ],
            'valor' => [
                'required' => 'Informe o valor do plano.',
                'numeric' => 'Informe um valor numérico.',
                'greater_than' => 'O valor do plano precisa ser maior que zero.',
            ],
        ];
    }
}
