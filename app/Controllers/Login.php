<?php

namespace App\Controllers;

use \App\Models\LoginModel;

class Login extends BaseController
{
    private $users = [
        ['username' => 'HOLA', 'password' => '123'],
        ['username' => 'GUIA10', 'password' => '123'],
        ['username' => 'KEVIN', 'password' => '123'],
    ];


    public function loginL()
    {
        return view('Guias/login');
    }
    public function subloginL()
    {
        return view('Guias/msglogin');
    }

    public function validacion()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validar las credenciales
        $isValid = false;
        foreach ($this->users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                $isValid = true;
                break;
            }
        }

        if ($isValid) {
            // Iniciar sesión exitosa
            session()->set('username', $username);
            return redirect()->to('/SBLOGIN');
        } else {
            // Inicio de sesión fallido
            return 'Datos ingresados inválidos.';
        }
    }
    
    public function logout()
    {
        // Cerrar sesión
        session()->remove('username');
        return redirect()->to('login');
    }

}