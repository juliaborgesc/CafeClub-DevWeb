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
        return view('admin/cafes/create');
    }

    public function store()
    {
        $this->cafeModel->insert([
            'nome' => $this->request->getPost('nome'),
            'origem' => $this->request->getPost('origem'),
            'descricao' => $this->request->getPost('descricao'),
            'perfil' => $this->request->getPost('perfil')
        ]);

        return redirect()->to('admin/cafes');
    }

    public function edit($id)
    {
        $dados['cafe'] = $this->cafeModel->find($id);

        return view('admin/cafes/edit', $dados);
    }

    public function update($id)
    {
        $this->cafeModel->update($id, [
            'nome' => $this->request->getPost('nome'),
            'origem' => $this->request->getPost('origem'),
            'descricao' => $this->request->getPost('descricao'),
            'perfil' => $this->request->getPost('perfil')
        ]);

        return redirect()->to('admin/cafes');
    }

    public function excluir($id)
    {
        $this->cafeModel->delete($id);

        return redirect()->to('admin/cafes');
    }
}