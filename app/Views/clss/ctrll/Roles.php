<?php

namespace App\Controllers;
use \App\Models\UserModel;
class Roles extends BaseController
{
    public function roles()
    {
        return view('roles');
    }

    public function consultar()
    {
        $userModel = new UserModel();
        $user_id = 6;
        $user = $userModel->find($user_id);
        print_r ($user);
    }

    public function listar()
    {
        $userModel = new UserModel();
        $users = $userModel->findAll();
        $data = [
            'users' => $users,
        ];
        //print_r ($users);
        return view('listado', $data);
        /*$table = new \CodeIgniter\View\Table();
        $template = [
            'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">',
        ];
        $table->setTemplate($template); 
        echo $table->generate($users);*/
    }

    public function insertar()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $userModel = new UserModel();
        $data = [
            'name' => $name,
            'email'    => $email,
        ];
        
        // Inserts data and returns inserted row's primary key
        $userModel->insert($data);

        return "Registro Ingresado.";
    }

    public function actualizar()
    {
        $userModel = new UserModel();
        $id = 9;
        $data = [
            'name' => 'Darth Mario',
            'email'    => 'woop@marioempire.com',
        ];
        
        $userModel->update($id, $data);

        return "Registro Actualizado.";
    }

    public function eliminar()
    {
        $userModel = new UserModel();
        $id = 8;
        $userModel->delete($id);

        return "Registro Eliminado.";
    }
}