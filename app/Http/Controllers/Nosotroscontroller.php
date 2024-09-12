<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Nosotroscontroller extends Controller
{
    public function index()
    {
        return "Gestor de finca agricola es una app, para mejorar las paracticas dentro de tu produccion agricola";
    }

    public function create()
    {
        return "Formulario para hacer parte de nosotros";
    }

    public function show($post)
    {
        return "Aqui veras el post {$post}";
    }
}
