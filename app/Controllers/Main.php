<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Usuarios;

class Main extends BaseController
{
    public function index()
    {
       return redirect()->to('reservado');
    }

    public function login()
    {
        $data = [''];

        //vefiricar se exite erros de validação
        $validation = session()->getFlashdata('validation');
        if ($validation) {
            $data['validation'] = $validation; 
        }
        
        //vefiricar se exite erros de login
        $login_error = session()->getFlashdata('login_error');
        if ($login_error) {
         $data['login_error'] = $login_error; 
           }      
        //login process
        return view('login_frm', $data);
    }
    public function login_submit()
    {
        //form validation
        $validation = $this->validate([
            'text_usuario' => [
            'label' => 'Usuário',
            'rules' => 'required|min_length[3]',
            'errors' => [
                'required' => 'O campo {field} é obrigatório.',
                'min_length' => 'O campo {field} deve ter no mínimo 3 caracteres.'
            ],
            ],
            'text_senha' => [
            'label' => 'Senha',
            'rules' => 'required|min_length[3]',
            'errors' => [
                'required' => 'O campo {field} é obrigatório.',
                'min_length' => 'O campo {field} deve ter no mínimo 3 caracteres.'
            ],
            ]
        ]);

        // verifica se validação é correta
        
        if (!$validation) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        //captação via codeigniter
        $usuarioInput = $this->request->getPost('text_usuario');
        $senhaInput = $this->request->getPost('text_senha');
        
        // agora crie o model:
        $usuariosModel = new Usuarios();
        
        // passe a string correta para o verify_login():
        $results = $usuariosModel->verify_login($usuarioInput, $senhaInput);
            
        //verificar se login foi realizado com sucesso
        if (!$results) {
            return redirect()->back()->withInput()->with('login_error', 'Login ou senha inválidos.');
        }
        

        //echo 'login realizado com sucesso';

        //criar uma sessão com os dados do usurario
        $session = session();
        $dados_para_sessao = [
            'id' => $results->id,
            'usuario' => $results->usuario,
            
        ];
        $session->set($dados_para_sessao);
        return redirect()->to('/');
    }

    public function reservado()
    {
       
        return view('reservado');
    }
    public function logout()
    {
       
        //destruir a sessão
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

}
