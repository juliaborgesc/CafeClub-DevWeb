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

        $this->cafeModel->insert([
            'nome' => $this->request->getPost('nome'),
            'origem' => $this->request->getPost('origem'),
            'descricao' => $this->request->getPost('descricao'),
            'perfil' => $this->request->getPost('perfil'),
            'torra' => $this->request->getPost('torra'),
            'intensidade' => $this->request->getPost('intensidade'),
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

        $this->cafeModel->update($id, [
            'nome' => $this->request->getPost('nome'),
            'origem' => $this->request->getPost('origem'),
            'descricao' => $this->request->getPost('descricao'),
            'perfil' => $this->request->getPost('perfil'),
            'torra' => $this->request->getPost('torra'),
            'intensidade' => $this->request->getPost('intensidade'),
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
}
