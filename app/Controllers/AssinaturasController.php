<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AssinaturasModel;

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

        return view('assinaturas/index', $dados);
    }

    public function create()
    {
        return view('assinaturas/create');
    }

    public function store()
    {
        $this->assinaturasModel->insert([
            'cliente_id' => $this->request->getPost('cliente_id'),
            'plano_id' => $this->request->getPost('plano_id'),
            'data_inicio' => $this->request->getPost('data_inicio'),
            'status' => $this->request->getPost('status')
        ]);

        return redirect()->to('/assinaturas');
    }

    public function edit($id)
    {
        $dados['assinatura'] = $this->assinaturasModel->find($id);

        return view('assinaturas/edit', $dados);
    }

    public function update($id)
    {
        $this->assinaturasModel->update($id, [
            'cliente_id' => $this->request->getPost('cliente_id'),
            'plano_id' => $this->request->getPost('plano_id'),
            'data_inicio' => $this->request->getPost('data_inicio'),
            'status' => $this->request->getPost('status')
        ]);

        return redirect()->to('/assinaturas');
    }

    public function excluir($id)
    {
        $this->assinaturasModel->delete($id);

        return redirect()->to('/assinaturas');
    }
}