<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('principal');
    }

    public function homeD()
    {
        return view('Guias/home');
    }
    public function inicioH()
    {
        return view('Guias/inicio');
    }
    public function crudI()
    {
        return view('Guias/crudI');
    }
    //public function inicioD(){
    //    return view('plantillas/inicio');
    //}
    //    
    //public function crudD(){
    //    return view('plantillas/crud');
    //}

}
