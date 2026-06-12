<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminsModel;

class AdminAuthController extends BaseController
{
    public function login()
    {
        if (session()->get('admin_id')) {
            return redirect()->to(base_url('admin'));
        }

        return view('admin/login');
    }

    public function autenticar()
    {
        $email = strtolower(trim($this->request->getPost('email')));
        $senha = $this->request->getPost('senha');

        $adminsModel = new AdminsModel();
        $admin = $adminsModel
            ->where('email', $email)
            ->where('ativo', 1)
            ->first();

        if (!$admin || !password_verify($senha, $admin['senha'])) {
            return redirect()->back()
                ->withInput()
                ->with('erro', 'E-mail ou senha de administrador inválidos.');
        }

        session()->remove([
            'cliente_id',
            'cliente_nome',
        ]);

        session()->set([
            'admin_id'    => $admin['id'],
            'admin_nome'  => $admin['nome'],
            'admin_email' => $admin['email'],
        ]);

        return redirect()->to(base_url('admin'))
            ->with('sucesso', 'Login administrativo realizado com sucesso.');
    }

    public function logout()
    {
        session()->remove([
            'admin_id',
            'admin_nome',
            'admin_email',
        ]);

        return redirect()->to(base_url('admin/login'));
    }
}
