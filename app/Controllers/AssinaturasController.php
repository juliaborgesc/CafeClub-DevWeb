<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AssinaturasModel;
use App\Models\ClientesModel;
use App\Models\PlanosModel;

class AssinaturasController extends BaseController
{
    protected $assinaturasModel;

    public function __construct()
    {
        $this->assinaturasModel = new AssinaturasModel();
    }

    public function index()
    {
        $dados['assinaturas'] = $this->assinaturasModel->findAll();

        return view('admin/assinaturas/index', $dados);
    }

    public function create()
    {
        $clientesModel = new ClientesModel();
        $planosModel = new PlanosModel();

        $dados['clientes'] = $clientesModel->findAll();
        $dados['planos'] = $planosModel->findAll();

        return view('admin/assinaturas/create', $dados);
    }

    public function edit($id)
    {
        $clientesModel = new ClientesModel();
        $planosModel = new PlanosModel();

        $dados['assinatura'] = $this->assinaturasModel->find($id);
        $dados['clientes'] = $clientesModel->findAll();
        $dados['planos'] = $planosModel->findAll();

        return view('admin/assinaturas/edit', $dados);
    }

    public function store()
    {
        $dados = [
            'cliente_id' => $this->request->getPost('cliente_id'),
            'plano_id' => $this->request->getPost('plano_id'),
            'data_inicio' => $this->request->getPost('data_inicio') ?: date('Y-m-d'),
            'status' => $this->request->getPost('status')
        ];

        if (!$this->validarAssinatura($dados)) {
            return redirect()->back()
                ->withInput()
                ->with('erros', service('validation')->getErrors());
        }

        $this->assinaturasModel->insert($dados);

        return redirect()->to('admin/assinaturas');
    }

    public function update($id)
    {
        $dados = [
            'cliente_id' => $this->request->getPost('cliente_id'),
            'plano_id' => $this->request->getPost('plano_id'),
            'data_inicio' => $this->request->getPost('data_inicio') ?: date('Y-m-d'),
            'status' => $this->request->getPost('status')
        ];

        if (!$this->validarAssinatura($dados)) {
            return redirect()->back()
                ->withInput()
                ->with('erros', service('validation')->getErrors());
        }

        $this->assinaturasModel->update($id, $dados);

        return redirect()->to('admin/assinaturas');
    }

    public function excluir($id)
    {
        $this->assinaturasModel->delete($id);

        return redirect()->to('admin/assinaturas');
    }

    private function validarAssinatura(array $dados): bool
    {
        $validation = service('validation');

        $validation->setRules([
            'cliente_id' => 'required',
            'plano_id' => 'required',
            'data_inicio' => 'required|valid_date[Y-m-d]',
            'status' => 'required',
        ], [
            'cliente_id' => [
                'required' => 'Selecione o cliente da assinatura.',
            ],
            'plano_id' => [
                'required' => 'Selecione o plano da assinatura.',
            ],
            'data_inicio' => [
                'required' => 'Informe a data de início.',
                'valid_date' => 'Informe uma data de início válida.',
            ],
            'status' => [
                'required' => 'Selecione o status da assinatura.',
            ],
        ]);

        return $validation->run($dados);
    }
}
