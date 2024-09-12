<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Nosotroscontroller;


Route::get('/', HomeController::class);

Route::get('/Nosotros',[Nosotroscontroller::class, 'index']);

Route::get('/Nosotros/formulario',[Nosotroscontroller::class, 'create']);

Route::get('/Nosotros/{post}', [Nosotroscontroller::class,  'show']);