<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientesModel;

class AuthController extends BaseController
{
    public function cadastro()
    {
        return view('auth/cadastro');
    }

    public function salvarCadastro()
    {
        $regras = [
                    'nome' => 'required|min_length[3]|regex_match[/^[A-Za-zÀ-ÖØ-öø-ÿ\s\'-]+$/]',
                    'email' => 'required|valid_email|is_unique[clientes.email]',
                    'telefone' => 'permit_empty|regex_match[/^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$/]',
                    'senha' => 'required|min_length[8]',
                    'confirmar_senha' => 'required|matches[senha]',
                ];

                $mensagens = [
                    'nome' => [
                        'required' => 'Informe seu nome completo.',
                        'min_length' => 'O nome precisa ter pelo menos 3 caracteres.',
                        'regex_match' => 'Insira um nome válido, usando apenas letras e espaços.',
                    ],
                    'email' => [
                        'required' => 'Informe seu e-mail.',
                        'valid_email' => 'Insira um e-mail válido.',
                        'is_unique' => 'Este e-mail já está cadastrado. Faça login ou use outro e-mail.',
                    ],
                    'telefone' => [
                        'regex_match' => 'Insira um telefone válido. Exemplo: (27) 99999-9999.',
                    ],
                    'senha' => [
                        'required' => 'Crie uma senha.',
                        'min_length' => 'A senha precisa ter pelo menos 8 caracteres.',
                    ],
                    'confirmar_senha' => [
                        'required' => 'Confirme sua senha.',
                        'matches' => 'As senhas não conferem.',
                    ],
                ];

                if (!$this->validate($regras, $mensagens)) {
                    return redirect()->back()
                        ->withInput()
                        ->with('erros', $this->validator->getErrors());
                }


        if (!$this->validate($regras)) {
            return redirect()->back()
                ->withInput()
                ->with('erros', $this->validator->getErrors());
        }

        $clientesModel = new ClientesModel();

        $clientesModel->insert([
            'nome' => trim($this->request->getPost('nome')),
            'email' => strtolower(trim($this->request->getPost('email'))),
            'telefone' => trim($this->request->getPost('telefone')),
            'senha' => password_hash($this->request->getPost('senha'), PASSWORD_DEFAULT),
        ]);

        return redirect()->to('/login')
            ->with('sucesso', 'Conta criada com sucesso! Faça login para continuar.');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function autenticar()
    {
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        $clientesModel = new ClientesModel();
        $cliente = $clientesModel->where('email', $email)->first();

        if (!$cliente || !password_verify($senha, $cliente['senha'])) {
            return redirect()->back()
                ->withInput()
                ->with('erro', 'E-mail ou senha inválidos.');
        }

        session()->set([
            'cliente_id' => $cliente['id'],
            'cliente_nome' => $cliente['nome'],
        ]);

        return redirect()->to('/quiz');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/');
    }
}