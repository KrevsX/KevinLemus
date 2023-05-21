<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('principal');
    }

    public function inicioD(){
        return view('plantillas/inicio');
    }
        
    public function crudD(){
        return view('plantillas/crud');
    }

}
