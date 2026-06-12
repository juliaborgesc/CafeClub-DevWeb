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
        $this->assinaturasModel->insert([
            'cliente_id' => $this->request->getPost('cliente_id'),
            'plano_id' => $this->request->getPost('plano_id'),
            'data_inicio' => $this->request->getPost('data_inicio'),
            'status' => $this->request->getPost('status')
        ]);

        return redirect()->to('admin/assinaturas');
    }

    public function update($id)
    {
        $this->assinaturasModel->update($id, [
            'cliente_id' => $this->request->getPost('cliente_id'),
            'plano_id' => $this->request->getPost('plano_id'),
            'data_inicio' => $this->request->getPost('data_inicio'),
            'status' => $this->request->getPost('status')
        ]);

        return redirect()->to('admin/assinaturas');
    }

    public function excluir($id)
    {
        $this->assinaturasModel->delete($id);

        return redirect()->to('admin/assinaturas');
    }
}