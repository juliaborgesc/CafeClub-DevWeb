<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    protected $clientesModel;

    public function __construct()
    {
        $this->clientesModel = new ClientesModel();
    }

    public function index()
    {
        $dados['clientes'] = $this->clientesModel->findAll();

        return view('admin/clientes/index', $dados);
    }

    public function create()
    {
        return view('admin/clientes/create');
    }

    public function store()
    {
        $this->clientesModel->insert([
            'nome' => $this->request->getPost('nome'),
            'email' => $this->request->getPost('email'),
            'telefone' => $this->request->getPost('telefone'),
            'perfil' => $this->request->getPost('perfil'),
            'metodo_preparo' => $this->request->getPost('metodo_preparo'),
            'moagem' => $this->request->getPost('moagem'),
            'forma_envio' => $this->request->getPost('forma_envio')
        ]);

        return redirect()->to('admin/clientes');
    }

    public function edit($id)
    {
        $dados['cliente'] = $this->clientesModel->find($id);

        return view('admin/clientes/edit', $dados);
    }

    public function update($id)
    {
        $this->clientesModel->update($id, [
            'nome' => $this->request->getPost('nome'),
            'email' => $this->request->getPost('email'),
            'telefone' => $this->request->getPost('telefone'),
            'perfil' => $this->request->getPost('perfil'),
            'metodo_preparo' => $this->request->getPost('metodo_preparo'),
            'moagem' => $this->request->getPost('moagem'),
            'forma_envio' => $this->request->getPost('forma_envio')
        ]);

        return redirect()->to('admin/clientes');
    }

    public function excluir($id)
    {
        $this->clientesModel->delete($id);

        return redirect()->to('admin/clientes');
    }
}