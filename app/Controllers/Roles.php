<?php

namespace App\Controllers;
use \App\Models\UserModel;
use \App\Models\RolModel;
class Roles extends BaseController
{
    public function rolesD()
    {
        return view('Guias/roles');
    }
    public function crudD()
    {
        return view('Guias/crud');
    }
        public function consultarD()
    {
        $rolModel= new RolModel();
        $id_rol =1;
        $user = $rolModel->find($id_rol);
        print_r($user);
    }
    public function listarD()
    {
        $rolModel= new RolModel();
        $rol = $rolModel->findAll();
        print_r($rol);
    }
    public function insertarD()
    {
        $rolModel= new RolModel();
        $data = [
            'nombre_rol'=> 'Director General',
            'descripcion_rol'=> 'Director de Todos los departamentos'
        ];
        $rolModel->insert($data);
        return "Dato Ingresado, Correctamente";
    }
    public function actualizarD()
    {
        $rolModel= new RolModel();
        $rol_id = 4;
        $data = [
            'nombre_rol'=> 'Subdirector',
            'descripcion_rol'=> 'Segundo al mando de todos los departamentos'
        ];
        $rolModel->update($rol_id,$data);
        return "Dato Actualizado, Correctamente";
    }
    public function eliminarD()
    {
        $rolModel= new RolModel();
        $rol_id = 4;

        $rolModel->delete($rol_id);
        return "Dato Eliminado, Correctamente";
    }
    
// FUNCIONES CORRESPONDIENTES A LA PRACICA 10-----
   /* public function consultarD()
    {
        $userModel= new UserModel();
        $user_id =1;
        $user = $userModel->find($user_id);
        print_r($user);
    }
    public function listarD()
    {
        $userModel= new UserModel();
        $user = $userModel->findAll();
        print_r($user);
    }
    public function insertarD()
    {
        $userModel= new UserModel();
        $data = [
            'name'=> 'datyh',
            'email'=> 'repassda@asdasa.com'
        ];
        $userModel->insert($data);
        return "Dato Ingresado, Correctamente";
    }
    public function actualizarD()
    {
        $userModel= new UserModel();
        $id = 6;
        $data = [
            'name'=> 'XER',
            'email'=> 'XEN@xek.com'
        ];
        $userModel->update($id,$data);
        return "Dato Actualizado, Correctamente";
    }
    public function eliminarD()
    {
        $userModel= new UserModel();
        $id = 9;

        $userModel->delete($id);
        return "Dato Eliminado, Correctamente";
    }
    */


}
