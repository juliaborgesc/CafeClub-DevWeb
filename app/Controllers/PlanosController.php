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

        return view('planos/index', $dados);
    }

    public function create()
    {
        return view('planos/create');
    }

    public function store()
    {
        $this->planosModel->insert([
            'nome' => $this->request->getPost('nome'),
            'descricao' => $this->request->getPost('descricao'),
            'valor' => $this->request->getPost('valor')
        ]);

        return redirect()->to('/planos');
    }

    public function edit($id)
    {
        $dados['plano'] = $this->planosModel->find($id);

        return view('planos/edit', $dados);
    }

    public function update($id)
    {
        $this->planosModel->update($id, [
            'nome' => $this->request->getPost('nome'),
            'descricao' => $this->request->getPost('descricao'),
            'valor' => $this->request->getPost('valor')
        ]);

        return redirect()->to('/planos');
    }

    public function excluir($id)
    {
        $this->planosModel->delete($id);

        return redirect()->to('/planos');
    }
}