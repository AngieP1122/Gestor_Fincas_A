<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return "Bienvenido a la pagina principal de Gestor de Finca agricola";
    }
   
}
