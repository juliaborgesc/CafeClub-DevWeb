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
        $rules = [
            'nome'  => 'required',
            'email' => 'required|valid_email|is_unique[clientes.email]',
            'senha' => 'required',
        ];

        if (!$this->validate($rules, $this->mensagensValidacao())) {
            return redirect()->back()
                ->withInput()
                ->with('erros', $this->validator->getErrors());
        }

        $this->clientesModel->insert([
            'nome' => trim($this->request->getPost('nome')),
            'email' => strtolower(trim($this->request->getPost('email'))),
            'senha' => password_hash($this->request->getPost('senha'), PASSWORD_DEFAULT),
            'telefone' => trim((string) $this->request->getPost('telefone')),
            'perfil' => $this->request->getPost('perfil'),
            'metodo_preparo' => $this->request->getPost('metodo_preparo'),
            'moagem' => $this->request->getPost('moagem'),
            'forma_envio' => $this->request->getPost('forma_envio'),
            'plano' => $this->request->getPost('plano'),
            'plano_ativo' => $this->request->getPost('plano_ativo') ? 1 : 0,
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
        $rules = [
            'nome'  => 'required',
            'email' => "required|valid_email|is_unique[clientes.email,id,{$id}]",
            'senha' => 'permit_empty',
        ];

        if (!$this->validate($rules, $this->mensagensValidacao())) {
            return redirect()->back()
                ->withInput()
                ->with('erros', $this->validator->getErrors());
        }

        $dados = [
            'nome' => trim($this->request->getPost('nome')),
            'email' => strtolower(trim($this->request->getPost('email'))),
            'telefone' => trim((string) $this->request->getPost('telefone')),
        ];

        if ($this->request->getPost('senha')) {
            $dados['senha'] = password_hash($this->request->getPost('senha'), PASSWORD_DEFAULT);
        }

        $this->clientesModel->update($id, $dados);

        return redirect()->to('admin/clientes');
    }

    public function excluir($id)
    {
        $this->clientesModel->delete($id);

        return redirect()->to('admin/clientes');
    }

    private function mensagensValidacao(): array
    {
        return [
            'nome' => [
                'required' => 'Informe o nome do cliente.',
            ],
            'email' => [
                'required' => 'Informe o e-mail do cliente.',
                'valid_email' => 'Informe um e-mail válido.',
                'is_unique' => 'Este e-mail já está cadastrado.',
            ],
            'senha' => [
                'required' => 'Informe uma senha para o cliente.',
            ],
        ];
    }
}
